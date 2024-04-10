<?php

function fn_droh_common_create_payment_online($params)
{
    $params['timestamp'] = time();
    try {
        $result = db_query("INSERT INTO ?:payment_onlines ?e", $params);
        return $result;
    } catch (Exception $e) {
        return false;
    }
}


function fn_droh_common_finish_online_payment($data)
{
    $payment_online_request = fn_droh_common_get_payment_online($data['reference_number']);
    if ($data['amount'] != $payment_online_request["amount"]) {
        // Kiểm tra trường hợp: Số tiền trả về khớp với số tiền yêu cầu
        $data['message'] = 'giao-dich-nghi-van';
    }
    $data['payment_online_id'] = $payment_online_request['payment_online_id'];
    $data['payment_type'] = $data['payment_type'] ?? $payment_online_request['transaction_type'];
    $data['user_id'] = $data['user_id'] ?? $payment_online_request['user_id'];
    $data['order_id'] = $data['order_id'] ?? $payment_online_request['order_id'];
    $data['timestamp'] = time();

    fn_droh_common_insert_payment_online_result($data);
}

function fn_droh_common_insert_payment_online_result($payment_online_request)
{
    if (!empty($payment_online_request)) {
        $rs = db_query("INSERT INTO ?:payment_online_results ?e", $payment_online_request);
        return $rs;
    }
    return false;
}

//function fn_uuid($data)
//{
//    $length = strlen($data);
//    $randomLength = (16 - $length) / 2;
//    $data = random_bytes($randomLength) . $data . random_bytes($randomLength);
//    assert(strlen($data) == 16);
//
//    // Set version to 0100
//    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
//    // Set bits 6-7 to 10
//    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
//
//    // Output the 36 character UUID.
//    return vsprintf('%s%s%s%s%s%s%s%s', str_split(bin2hex($data), 4));
//}

function fn_droh_common_get_payment_online($reference_number): array
{
    return db_get_row("SELECT order_id, amount, reference_number, payment_online_id, transaction_type FROM ?:payment_onlines WHERE reference_number=?s", $reference_number);
}

function fn_generate_reference(int $length) : string
{
    if($length < 1) $length = 1;
    $code = substr(preg_replace("/[^A-Za-z0-9]/", '', base64_encode(openssl_random_pseudo_bytes($length * 2))), 0, $length);
    $valid = fn_droh_common_get_payment_online($code);
    while(!empty($valid)){
        $code = substr(preg_replace("/[^A-Za-z0-9]/", '', base64_encode(openssl_random_pseudo_bytes($length * 2))), 0, $length);
        $valid = fn_droh_common_get_payment_online($code);
    }
    return $code;
}