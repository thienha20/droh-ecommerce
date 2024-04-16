<script>
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '{$settings.Checkout.default_country|escape:javascript}',
        states: {$states|json_encode nofilter},
        states_are_optional: {$states_are_optional|default:false|intval}
    });

    $(_.doc).on('change', '.cm-state', function () {
        var states = $('.cm-state');
        var districts = $('.cm-district');
        var wards = $('.cm-ward');
        districts
            .find('option')
            .remove()
            .end()
            .val('whatever');
        
        $.ceAjax('request', fn_url('district.state_districts'), {
            data: {
              state_code: states.val()
            },
            callback: function callback(response) {
                var responseJson = JSON.parse(response['text']);
                districts
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value = ""> {__("select_district")} </option>')
                    .val('whatever');
                for (let i = 0; i < responseJson['list_district'].length; i++) {
                    districts.append('<option value="' + responseJson['list_district'][i].code + '">'
                                    + responseJson['list_district'][i].district +
                                '</option>'
                    );
                }
                districts.val('');
                // remove wards
                wards
                .find('option')
                .remove()
                .end()
                .append('<option data-ca-rebuild-districts="skip" value = ""> {__("select_ward")} </option>')
                .val('whatever');
            }
          });
    });

    $(_.doc).on('change', '.cm-district', function () {
        var districts = $('.cm-district');
        var wards = $('.cm-ward');
        wards
            .find('option')
            .remove()
            .end()
            .val('whatever');
        
        $.ceAjax('request', fn_url('district.district_wards'), {
            data: {
              district_code: districts.val()
            },
            callback: function callback(response) {
                var responseJson = JSON.parse(response['text']);
                console.log(responseJson);
                wards
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value = ""> {__("select_ward")} </option>')
                    .val('whatever');
                for (let i = 0; i < responseJson['list_ward'].length; i++) {
                    wards.append('<option value="' + responseJson['list_ward'][i].code + '">'
                                    + responseJson['list_ward'][i].ward +
                                '</option>'
                    );
                }
                wards.val('');
            }
          });
    });

    {literal}
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });
    {/literal}

}(Tygh, Tygh.$));
</script>
