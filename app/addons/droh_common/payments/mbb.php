<?php if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

/*****************************************************************************
 *                                                                           *
 *            Module tích hợp thanh toán MB Bank                            *
 ***************************************************/

/** @var $processor_data */
/** @var $order_info */
/** @var $order_id */

/** @var $mode */

use Tygh\Http;

$mbb_errors = array(
    "01" => "ĐVCNTT không tồn tại",
    "02" => "ĐVCNTT đang bị khóa",
    "03" => "ĐVCNTT chưa đăng ký dịch vụ",
    "04" => "Phiên bản CTT không hợp lệ",
    "05" => "PTTT không phù hợp",
    "06" => "ĐVCNTT thuộc MCC bị chặn",
    "07" => "Đơn hàng bị trùng",
    "08" => "Tạo đơn hàng không thành công",
    "09" => "Đồng tiền giao dịch không hợp lệ",
    "10" => "Số tiền giao dịch nhỏ hơn hạn mức tối thiểu của CTT",
    "11" => "Số tiền giao dịch lớn hơn hạn mức tối đa của CTT",
    "12" => "Đơn hàng chờ thanh toán",
    "13" => "Đơn hàng đã thanh toán",
    "14" => "Đơn hàng hết hạn thanh toán (hết phiên giao dịch)",
    "15" => "Đơn hàng không tìm thấy",
    "16" => "Đơn hàng đang được xử lý",
    "17" => "Giao dịch không nhận được trả lời từ TCPH",
    "18" => "KH hủy thanh toán",
    "19" => "Lỗi khác",
    "20" => "Số thẻ/tài khoản bị chặn bởi QLRR",
    "21" => "Giao dịch chờ xác thực thông tin",
    "22" => "Giao dịch chờ xác thực OTP",
    "23" => "Giao dịch chờ cấp phép",
    "24" => "Lỗi timeout",
    "25" => "Tài khoản/thẻ không đủ tiền thanh toán",
    "26" => "Không xác định được số dư tài khoản/thẻ thanh toán",
    "27" => "Số tiền giao dịch nhỏ hơn hạn mức tối thiểu của TCPH",
    "28" => "Số tiền giao dịch lớn hơn hạn mức tối đa của TCPH",
    "29" => "Số tiền giao dịch nằm ngoài khoảng quy định của TCPH",
    "30" => "Giao dịch vượt quá hạn mức thanh toán ngày của TCPH",
    "31" => "Giao dịch bị từ chối bởi TCPH",
    "32" => "TCPH không hợp lệ",
    "33" => "Kiểu giao dịch không được phép",
    "34" => "Giao dịch không được hỗ trợ bởi TCPH",
    "35" => "Sai OTP",
    "36" => "OTP hết hạn",
    "37" => "Sai OTP 3 lần liên tiếp (kết thúc giao dịch)",
    "38" => "Xác thực không thành công",
    "40" => "Số điện thoại không hợp lệ",
    "41" => "Số điện thoại chưa đăng ký ViettelPay",
    "42" => "Số điện thoại ViettelPay chưa đăng ký thanh toán trực tuyến",
    "43" => "Số điện thoại đang tạm khóa",
    "44" => "Sai PIN",
    "45" => "Sai PIN 3 lần liên tiếp",
    "46" => "Nguồn tiền không hợp lệ do số điện thoại chuyển mạng giữ số",
    "50" => "Số thẻ không đúng",
    "51" => "Tên chủ thẻ không đúng",
    "52" => "Hiệu lực thẻ không đúng",
    "53" => "Sai thông tin thẻ 3 lần liên tiếp",
    "54" => "Thẻ bị khóa/đóng",
    "55" => "Thẻ chưa đăng ký chức năng TTTT",
    "56" => "Thẻ/tài khoản không đủ điều kiện thanh toán",
    "57" => "Sai thông tin xác thực",
    "60" => "Sai CVV",
    "61" => "Giao dịch bị từ chối bởi AVS",
    "62" => "Giao dịch bị từ chối bởi CSC",
    "63" => "Xác thực 3DS không thành công",
    "64" => "Kiểm tra đăng ký 3DS không thành công",
    "65" => "Xác thực 3DS thành công nhưng ACS không trả về thông tin AAV/CAAV",
    "66" => "Xác thực 3DS hộ thành công nhưng ACS không trả về thông tin AAV/CAAV",
    "67" => "Không có dữ liệu 3DS trong bản tin trả về",
    "68" => "Dữ liệu 3DS trả về không đúng",
    "70" => "Tài khoản không hợp lệ",
    "71" => "Số tài khoản chưa đăng ký thanh toán trực tuyến",
    "72" => "Số tài khoản đang tạm khóa/đóng",
    "73" => "Sai mật khẩu",
    "74" => "Sai mật khẩu 3 lần liên tiếp",
    "80" => "ĐVCNTT chưa triển khai dịch vụ",
    "81" => "Token không đúng",
    "82" => "Token không tồn tại",
    "83" => "Token hết hạn",
    "90" => "Sai định dạng bản tin",
    "91" => "Sai checksum",
    "92" => "Hệ thống CTT đang bảo trì",
    "93" => "Lỗi kết nối đến TCPH",
    "94" => "Hệ thống TCPH đang bảo trì",
    "95" => "Lỗi xử lý tại hệ thống TCPH",
    "99" => "IP không được phép giao dịch"
);


if (defined('PAYMENT_NOTIFICATION')) {
    if ($mode == 'notify') {
        fn_order_placement_routines('route', $_REQUEST['order_id']);
    } elseif ($mode == 'result') {
        if (empty($_REQUEST['error_code']) && $_REQUEST['error_code'] == '00') {
            $pp_response["order_status"] = "P";
            $pp_response["reason_text"] = __('payment') . " " . __('complete');
        } else {
            $pp_response["order_status"] = "F";
            $pp_response["reason_text"] = $mbb_errors[$_REQUEST['error_code']];
        }

        $order_id = $_REQUEST['order_id'];

        fn_droh_common_finish_online_payment([
            "amount" => $_REQUEST['pg_amount'],
            "currency" => $_REQUEST['pg_currency'],
            "message" => $_REQUEST['pg_order_info'] ?? '',
            "transaction_ref_no" => $_REQUEST['pg_transaction_number'] ?? '',
            "partner_status_code" => $_REQUEST['error_code'],
            "signature" => $_REQUEST['mac'],
            "website_id" => $_REQUEST['pg_merchant_id'],
            "partner_code" => 'MBB',
            "payment_type" => $_REQUEST['pg_payment_method'],
            "reference_number" => $_REQUEST['pg_order_reference']
        ]);

        if (fn_check_payment_script('mbb.php', $order_id)) {
            fn_finish_payment($order_id, $pp_response);
        }
        exit;
    }

} else {
    // Tao yeu cau thanh toan online
    $payment_type = $processor_data['processor_params']['payment_method'];
    $reference_number = 'PFTT' . fn_generate_reference(8);
    if ($payment_type == 'QR') {
        $order_reference = 'PFQR' . fn_generate_reference(25);
    }
    $destinationUrl = $processor_data['processor_params']['link_process'];
    $secret_key = $processor_data['processor_params']['secret_key'];
    $website_id = $processor_data['processor_params']['merchant_id'];
    $currency = $processor_data['processor_params']['currency'];
    $receiver_account = $processor_data['processor_params']['access_code'];

    //url
    $url_return = fn_url("payment_notification.notify?payment=mbb&order_id=" . $order_info["order_id"]);
    $url_cancel = fn_url("payment_notification.notify?payment=mbb&order_id=" . $order_info["order_id"]);
    $url_ipn = fn_url("payment_notification.result?payment=mbb&order_id=" . $order_info["order_id"]);
//    $url_return = 'http://onehealth.foundation.test/return_payment';
//    $url_cancel = 'http://onehealth.foundation.test/cancel_payment';
//    $url_ipn = 'http://onehealth.foundation.test/ipn_payment';

    //order INFO
    $ip_address = fn_get_ip();

    $transfer_data = [
        "amount" => $order_info["total"] . "",
        "currency" => $currency,
        "access_code" => $receiver_account,
        "merchant_id" => $website_id,
        "order_info" => $order_info['repaid'] ? "Repaid $order_id" : "Pay $order_id",
        "order_reference" => $reference_number,
        "return_url" => $url_return,
        "cancel_url" => $url_cancel,
        "ipn_url" => $url_ipn,
        "pay_type" => "pay",
        "ip_address" => $ip_address['host'],
        "payment_method" => $payment_type
    ];
    ksort($transfer_data);
    $mac = strtoupper(hashMac($transfer_data, $secret_key));
    $transfer_data['mac_type'] = 'MD5';
    $transfer_data['mac'] = $mac;

//    fn_print_die(json_encode($transfer_data));
    //ghi log để đối soát thanh toán
    fn_droh_common_create_payment_online([
        'order_id' => $order_info["order_id"],
        'user_id' => $order_info['user_id'],
        'payment_id' => $order_info['payment_id'],
        'partner_code' => 'MBB',
        'amount' => floatval($order_info["total"]),
        'currency' => $currency,
        'lang_code' => !empty($order_info['lang_code']) ? $order_info['lang_code'] : "vi",
        'b_firstname' => $order_info["firstname"],
        'b_lastname' => $order_info["lastname"],
        'b_address' => $order_info["b_address"],
        'b_county' => $order_info["b_county"],
        'b_city' => $order_info["b_city"],
        'b_state' => $order_info["b_state_descr"],
        'b_country' => $order_info["b_country"],
        'b_phone' => $order_info["b_phone"],
        'b_email' => $order_info["email"],
        'ip_address' => $ip_address['host'],
        'receiver_account' => $receiver_account,
        'reference_number' => $reference_number,
        'transaction_type' => $payment_type,
        'url_return' => $url_return,
        'website_id' => $website_id,
        'signature' => $transfer_data['mac']
    ]);
//    fn_create_payment_form($destinationUrl, $transfer_data, 'MBB');
    $headers = ["content-type: application/json"];
    $return = Http::post($destinationUrl, json_encode($transfer_data), array('headers' => $headers));
    if (empty($return)) {
        exit('Connect to payment gateway error. Please try again!');
    } else {
        $return = json_decode($return);
        if ($return->error_code == '00') {
            if ($payment_type == 'QR') {
                header("Location: " . $return->qr_url);
            } else {
                header("Location: " . $return->payment_url);
            }
            exit;
        } else {
            exit('Error payment. Please try again!');
        }
    }
}

function hashMac(array $data, string $secret_key): string
{
    $hashData = '';
    foreach ($data as $k => $v) {
        $hashData .= "$k=$v&";
    }
    return md5($secret_key . trim($hashData, '&'));
}


