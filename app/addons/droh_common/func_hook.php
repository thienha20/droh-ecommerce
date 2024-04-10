<?php

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}
function fn_droh_common_checkout_update_steps_before_update_user_data(&$cart, $auth, $params, $user_id, $user_data)
{
    if (!empty($params['invoice_vat_selected'])) {
        if (!empty($params['invoice_vat']['code']) && !empty($params['invoice_vat']['address'])
            && !empty($params['invoice_vat']['email'])
            && !empty($params['invoice_vat']['company'])) {
            $cart['invoice_vat'] = $params['invoice_vat'];
            $cart['invoice_vat_selected'] = $params['invoice_vat_selected'];
        }
    } else {
        if (!empty($cart['invoice_vat'])) {
            $cart['invoice_vat'] = null;
            $cart['invoice_vat_selected'] = null;
        }
    }
}

function fn_droh_common_form_cart($order_info, &$cart, $auth)
{
    if (!empty($order_info['invoice_vat'])) {
        $cart['invoice_vat'] = json_decode($order_info['invoice_vat'], true);
    }
}

function fn_droh_common_repay_order($order_info, &$update_order, $payment, $payment_info, $change_order_status)
{
    if (!empty($_REQUEST['invoice_vat'])) {
        $update_order['invoice_vat'] = !empty($order_info['invoice_vat']) ? $order_info['invoice_vat'] : $_REQUEST['invoice_vat'];
    }
}

function fn_droh_common_update_cart_by_data_post(&$cart, $new_cart_data, $auth){
    $cart['invoice_vat'] = !empty($new_cart_data['invoice_vat']) ? $new_cart_data['invoice_vat'] : null;
}

function fn_droh_common_create_order(&$order){
    if(!empty($order['invoice_vat'])){
        $order['invoice_vat'] = json_encode($order['invoice_vat']);
    }
}

function fn_droh_common_update_order(&$order){
    if(!empty($order['invoice_vat'])){
        $order['invoice_vat'] = json_encode($order['invoice_vat']);
    }
}