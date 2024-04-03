<?php

/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/
/** @var  $mode */
use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}
//post method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $suffix = "";
    
    if ($mode == 'state') {
//        get states
        $country_code = !empty($_REQUEST['country_code']) ? $_REQUEST['country_code'] : '';
        $list_states = fn_get_district_by_country($country_code);
        $list_states = !empty($list_states) ? json_encode(['list_states' => $list_states, "status" => "success"]) : '';
        echo $list_states;
        exit();
    }
    if ($mode == 'district') {
//        get district
        $state_code = !empty($_REQUEST['state_code']) ? $_REQUEST['state_code'] : '';
        $country_code = !empty($_REQUEST['country_code']) ? $_REQUEST['country_code'] : '';
        $list_district = fn_get_district_by_city($country_code, $state_code);
        $list_district = !empty($list_district) ? json_encode(['list_district' => $list_district, "status" => "success"]) : '';
        echo $list_district;
        exit();
    }
    if ($mode == 'ward') {
//        get ward
        $state_code = !empty($_REQUEST['state_code']) ? $_REQUEST['state_code'] : '';
        $district_code = !empty($_REQUEST['district_code']) ? $_REQUEST['district_code'] : '';
        $list_ward = fn_get_ward_by_district(
            [
                'state_code' => $state_code,
                'district_code' => $district_code
            ]);
        $list_ward = !empty($list_ward) ? json_encode(['list_ward' => $list_ward, "status" => "success"]) : '';
        echo $list_ward;
        exit();
    }

//    return array(CONTROLLER_STATUS_OK, 'b2b_manage' . $suffix);
}