/* global only_code */
(function ($) {
    $.extend({
        urlParam: function (name) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == name) {
                    return sParameterName[1];
                }
            }
            return null;
        },
        local_load_all: function (country_id, state_id, district_id, type) {
            $("#country_id").val(country_id);
            var obj = {id: country_id, security_hash: $('input[name=security_hash]').val()}
            if ($('#region_id').length > 0) obj.region = 1;
            var request = $.ajax({
                url: fn_url('district.cities'),
                method: "GET",
                data: obj,
                dataType: "json"
            });
            request.done(function (data) {
                var str = "<option value=''>...</option>";
                var msg = {};
                if (data !== null) msg = data;
                if (data.state !== null) msg = data.state;
                if ($('#region_id').length > 0) {
                    var rstr = "<option value=''>...</option>";
                    var region = data.region;
                    for (var x in data.region) {
                        rstr += "<option value='" + region[x].region_id + "'";
                        if (region[x].region_id == $("#temp_region").val()) {
                            rstr += " selected='selected' ";
                        }
                        rstr += ">" + region[x].name + "</option>";
                    }
                    $("#region_id").html(rstr);
                }
                for (var x in msg) {
                    if (type !== null && type == "code") {
                        str += "<option value='" + msg[x].code + "'";
                        if (msg[x].code == state_id) {
                            str += " selected='selected' ";
                        }
                    } else {//alert(state_id);
                        str += "<option value='" + msg[x].state_id + "'";
                        if (msg[x].state_id == state_id) {
                            str += " selected='selected' ";
                        }
                    }

                    str += ">" + msg[x].name + "</option>";
                }
                $("#state_id").html(str);
                if ($("#district_id").length > 0) {
                    var obj = {
                        id: state_id,
                        cid: $("#country_id").val(),
                        security_hash: $('input[name=security_hash]').val()
                    };
                    if (type !== null && type == "code") {
                        obj = {
                            id: state_id,
                            cid: country_id,
                            security_hash: $('input[name=security_hash]').val(),
                            type: type
                        }
                    }
                    $.ajax({
                        url: fn_url('district.districts'),
                        method: "GET",
                        data: obj,
                        dataType: "json",
                        success: function (data) {
                            var str = "<option value=''>...</option>";
                            if (data !== null) {
                                for (x in data) {
                                    str += "<option value='" + data[x].district_id + "'";
                                    if (data[x].district_id == district_id) {
                                        str += " selected='selected' ";
                                    }
                                    str += ">" + data[x].name + "</option>";
                                }
                            }
                            $("#district_id").html(str);
                            if (typeof (special_func) !== "undefined" && special_func !== null && special_func !== "") {
                                eval(special_func);
                            }
                        }
                    });
                } else {
                    if (typeof (special_func) !== "undefined" && special_func !== null && special_func !== "") {
                        eval(special_func);
                    }
                }
            });
            request.fail(function (jqXHR, textStatus) {
            });
        },
        mutile_local_load_all: function (subname, country_id, state_id, district_id, ward_id, type) {
            $("#" + subname + "country_id").val(country_id);
            var obj = {id: country_id, security_hash: $('input[name=security_hash]').val()}
            if ($('#' + subname + 'region_id').length > 0) obj.region = 1;
            var request = $.ajax({
                url: fn_url('district.cities'),
                method: "GET",
                data: obj,
                dataType: "json"
            });
            request.done(function (data) {
                var str = "<option value=''>...</option>";
                var msg = {}
                if (data !== null) msg = data;
                if (data.state !== null) msg = data.state;
                if ($('#' + subname + 'region_id').length > 0) {
                    var rstr = "<option value=''>...</option>";
                    var region = data.region;
                    for (var x in data.region) {
                        rstr += "<option value='" + region[x].region_id + "'";
                        if (region[x].region_id == $("#temp_region").val()) {
                            rstr += " selected='selected' ";
                        }
                        rstr += ">" + region[x].name + "</option>";
                    }
                    $("#region_id").html(rstr);
                }
                for (var x in msg) {
                    if (type !== null && type == "code") {
                        str += "<option value='" + msg[x].code + "'";
                        if (msg[x].code == state_id) {
                            str += " selected='selected' ";
                        }
                    } else {//alert(state_id);
                        str += "<option value='" + msg[x].state_id + "'";
                        if (msg[x].state_id == state_id) {
                            str += " selected='selected' ";
                        }
                    }

                    str += ">" + msg[x].name + "</option>";
                }
                $("#" + subname + "state_id").html(str);
                if ($("#" + subname + "district_id").length > 0) {
                    var obj = {id: state_id, security_hash: $('input[name=security_hash]').val()};
                    if (type !== null && type == "code") {
                        obj = {
                            id: state_id,
                            cid: country_id,
                            security_hash: $('input[name=security_hash]').val(),
                            type: type
                        }
                    }
                    $.ajax({
                        url: fn_url('district.districts'),
                        method: "GET",
                        data: obj,
                        dataType: "json",
                        success: function (data) {
                            var str = "";
                            if (data !== null) {
                                for (x in data) {
                                    var vlspec = data[x].district_id + "-" + data[x].code;
                                    str += "<option value='" + vlspec + "'";
                                    if (data[x].district_id == district_id || vlspec == district_id || (typeof (only_code) !== "undefined" && only_code !== null && only_code !== "" && data[x].code == district_id)) {
                                        str += " selected='selected' ";
                                    }
                                    str += ">" + data[x].name + "</option>";
                                }
                            }
                            $("#" + subname + "district_id").html(str);
                            if ($("#" + subname + "ward_id").length > 0) {
                                var obj = {id: district_id, security_hash: $('input[name=security_hash]').val()};
                                if (typeof (only_code) !== "undefined" && only_code !== null && only_code !== "") {
                                    obj.id = $("#" + subname + "district_id").val();
                                }
                                $.ajax({
                                    url: fn_url('ward.wards'),
                                    method: "GET",
                                    data: obj,
                                    dataType: "json",
                                    success: function (data) {
                                        var str = "";
                                        if (data !== null) {
                                            for (x in data) {
                                                //var vlspecv = data[x].ward_id+"-"+data[x].code;
                                                if (typeof (only_code) !== "undefined" && only_code !== null && only_code !== "") {
                                                    str += "<option value='" + data[x].code + "'";
                                                } else {
                                                    str += "<option value='" + data[x].ward_id + "'";
                                                }
                                                if (data[x].ward_id == ward_id || (typeof (only_code) !== "undefined" && only_code !== null && only_code !== "" && data[x].code == ward_id)) {
                                                    str += " selected='selected' ";
                                                }
                                                str += ">" + data[x].name + "</option>";
                                            }
                                        }

                                        $("#" + subname + "ward_id").html(str);
                                        if (typeof (special_func) !== "undefined" && special_func !== null && special_func !== "") {
                                            eval(special_func);
                                        }
                                    }
                                });
                            } else {
                                if (typeof (special_func) !== "undefined" && special_func !== null && special_func !== "") {
                                    eval(special_func);
                                }
                            }
                        }
                    });
                } else {
                    if (typeof (special_func) !== "undefined" && special_func !== null && special_func !== "") {
                        eval(special_func);
                    }
                }
            });
            request.fail(function (jqXHR, textStatus) {
            });
        }
    });
    $.fn.extend({
        local_ajax: function (child, type, select, flag) {
            var link = "";
            var placeholder = "";
            switch (type) {
                case "city":
                    link = fn_url("district.cities");
                    break;
                case "district":
                    link = fn_url("district.districts");
                    if (flag === true) {
                        var child_id = $('#' + child).attr('sub-id');
                        var child_hidden = $('#' + child_id + '_hidden');
                        if (typeof child_hidden !== 'undefined' && $(child_hidden).val() !== '') {
                            select = $(child_hidden).val();
                        }
                        placeholder = $(this).attr('data-ca-sub-placeholder');
                    }
                    break;
                case "ward":
                    link = fn_url("ward.wards");
                    if (flag === true) {
                        var child_id = $('#' + child).attr('sub-id');
                        var child_hidden = $('#' + child_id + '_hidden');
                        if (typeof child_hidden !== 'undefined' && $(child_hidden).val() !== '') {
                            select = $(child_hidden).val();
                        }
                        placeholder = $(this).attr('data-ca-sub-placeholder');
                    }
                    break;
                case "date":
                    link = fn_url("mp_core.checkout_times");
                    if (flag === true) {
                        var child_id = $('#' + child).attr('sub-id');
                        var child_hidden = $('#' + child_id + '_hidden');
                        if (typeof child_hidden !== 'undefined' && $(child_hidden).val() !== '') {
                            select = $(child_hidden).val();
                        }
                        placeholder = $(this).attr('data-ca-sub-placeholder');
                    }
                    break;
            }
            var obj = {id: $(this).val(), security_hash: $('input[name=security_hash]').val()};
            if (type === "district") {
                var vl = $(this).val();
                var ex = vl.split("-");
                obj = {id: ex[0], security_hash: $('input[name=security_hash]').val()};
            }
            if (typeof (state_code) !== "undefined" && state_code !== null) {
                obj.type = "code";
                obj.cid = $("#country_id").val();
            }
            if ($('#region_id').length > 0 && type === "city") obj.region = 1;
            var request = $.ajax({
                url: link,
                method: "GET",
                data: obj,
                dataType: "json"
            });
            request.done(function (data) {
                var str = flag !== true ? "<option value=''>...</option>" : "<option value='null'>- " + placeholder + " -</option>";
                var msg = {};
                if (data !== null) msg = data;
                if (data.state !== null) msg = data.state;
                if ($('#region_id').length > 0 && type === "city") {
                    var rstr = "<option value=''>...</option>";
                    var region = data.region;
                    for (var x in data.region) {
                        rstr += "<option value='" + region[x].region_id + "'";
                        if (region[x].region_id === $("#temp_region").val()) {
                            rstr += " selected='selected' ";
                        }
                        rstr += ">" + region[x].name + "</option>";
                    }
                    $("#region_id").html(rstr);
                }
                for (x in msg) {
                    switch (type) {
                        case "city":
                            if (typeof (state_code) !== "undefined" && state_code !== null) {
                                str += "<option value='" + msg[x].code + "'";
                                if (select !== null && select !== "undefined" && msg[x].code === select) {
                                    str += " selected='selected' ";
                                }
                            } else {
                                str += "<option value='" + msg[x].state_id + "'";
                                if (select !== null && select !== "undefined" && msg[x].state_id === select) {
                                    str += " selected='selected' ";
                                }
                            }
                            break;
                        case "district":
                            // Only_code use code selected in district
                            var specvl = msg[x].district_id + "-" + msg[x].code;
                            if ((typeof (only_code) !== "undefined" && only_code !== null && only_code !== "") || flag === true) {
                                str += "<option value='" + specvl + "'";
                            } else {
                                str += "<option value='" + msg[x].district_id + "'";
                            }
                            if (select !== null && select !== "undefined" && msg[x].district_id === select || (select !== null && select !== "undefined" && ((typeof (only_code) !== "undefined" && only_code !== null && only_code !== "") || flag === true) && msg[x].code === select)) {
                                str += " selected='selected' ";
                                if (flag === true) {
                                    select = msg[x].district_id + '-' + msg[x].code;
                                }
                            }
                            break;
                        case "ward":
                            if ((typeof (only_code) !== "undefined" && only_code !== null && only_code !== "") || flag === true) {
                                str += "<option value='" + msg[x].code + "'";
                            } else {
                                str += "<option value='" + msg[x].ward_id + "'";
                            }
                            if ((select !== null && select !== "undefined" && msg[x].ward_id === select) || (select !== null && select !== "undefined" && ((typeof (only_code) !== "undefined" && only_code !== null && only_code !== "") || flag === true) && msg[x].code === select)) {
                                str += " selected='selected' ";
                            }
                            break;
                        case "date":
                            str += "<option value='" + msg[x].value + "'";
                            if (select !== null && select !== "undefined" && msg[x].ward_id === select) {
                                str += " selected='selected' ";
                            }
                            break;
                    }
                    str += ">" + msg[x].name + "</option>";
                }
                if (flag === true) {
                    $("#" + child).html(str).promise().done(function () {
                        $("#" + child).val(select).change();
                    });
                } else {
                    $("#" + child).html(str);
                }
                if (typeof (special_func) !== "undefined" && special_func !== null && special_func !== "") {
                    eval(special_func);
                }
            });
            request.fail(function (jqXHR, textStatus) {
            });
        }
    });

    $(document).ready(function () {
        if ($("#state_id").length > 0 && $("#country_id").length > 0) $("#country_id").change(function () {
            if ($("#district_id").length > 0) $("#district_id").html("<option value=''>...</option>");
            if ($("#ward_id").length > 0) $("#ward_id").html("<option value=''>...</option>");
            $(this).local_ajax("state_id", "city");
        });
        if ($("#state_id").length > 0 && $("#district_id").length > 0) $("#state_id").change(function () {
            if ($("#ward_id").length > 0) $("#ward_id").html("<option value=''>...</option>");
            $(this).local_ajax("district_id", "district");
        });
        if ($("#district_id").length > 0 && $("#ward_id").length > 0) $("#district_id").change(function () {
            $(this).local_ajax("ward_id", "ward");
        });
        if ($("#country_id").length > 0 && $.urlParam("country_id") !== null && $.urlParam("country_id") !== "") {
            var state = $.urlParam("state_id");
            if (state == null) state = $.urlParam("state_code");
            var type = "code";
            if (!isNaN(type)) type = "";
            $.local_load_all($.urlParam("country_id"), state, $.urlParam("district_id"), type);
        }
    });
})(jQuery);
