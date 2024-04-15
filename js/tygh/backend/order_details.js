(function (_, $) {

    $(_.doc).on('click', '.btn_update_order_info', function (e) {
        fn_update_order_info();
    });

    var fn_update_order_info = function fn_update_order_info() {
        var tracking_number = $('#on_tracking_number_0').text()
        var request_data = {
            'tracking_number': tracking_number
        };
        $.ceAjax('request', fn_url("orders.update_order_info_from_tracking_number"), {
            method: 'post',
            data: request_data,
            callback: function callback(res) {
                return;
            }
        });
      };

})(Tygh, Tygh.$);