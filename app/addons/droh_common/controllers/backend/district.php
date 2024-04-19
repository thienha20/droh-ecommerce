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

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    fn_trusted_vars('district', 'district_data');
    $suffix = '';
    //
    // Add/edit districts
    //
    if ($mode == 'update') {
        //print_r($_REQUEST);exit;
        $district_id = fn_update_district($_REQUEST['district_data'], $_REQUEST['district_id'], DESCR_SL);

        $suffix = ".update?district_id=$district_id";
    }

    if ($mode == 'm_update') {
        foreach ($_REQUEST['district_data'] as $key => $value) {
            db_query("UPDATE ?:districts SET ?u WHERE district_id = ?s", $value, $key);
            db_query("UPDATE ?:district_descriptions SET ?u WHERE district_id = ?s AND lang_code = ?s", $value, $key, DESCR_SL);
        }
        $suffix = '.manage';
    }

    if ($mode == 'delete') {
        if (!empty($_REQUEST['district_id'])) {
            fn_delete_district_by_id($_REQUEST['district_id']);
        }
        $suffix = '.manage';
    }

    if ($mode == 'm_delete') {
        if (isset($_REQUEST['district_ids'])) {
            foreach ($_REQUEST['district_ids'] as $v) {
                fn_delete_district_by_id($v);
            }
        }
        $suffix = ".manage";
    }

    return array(CONTROLLER_STATUS_OK, 'tat_district' . $suffix);
}
if ($mode == 'add') {

    Registry::set('navigation.tabs', array(
        'general' => array(
            'title' => __('general'),
            'js' => true
        ),
    ));
    list($countries,) = fn_get_countries(array());
    Tygh::$app['view']->assign('countries', $countries);
    // Tygh::$app['view']->assign('city', fn_get_city_data($district["city_id"]));

} elseif ($mode == 'update') {
    $district = fn_get_district_data($_REQUEST['district_id'], DESCR_SL);

    if (empty($district)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    Registry::set('navigation.tabs', array(
        'general' => array(
            'title' => __('general'),
            'js' => true
        ),
    ));
    list($countries,) = fn_get_countries(array());
    Tygh::$app['view']->assign('district', $district);
    Tygh::$app['view']->assign('countries', $countries);
    Tygh::$app['view']->assign('city', fn_get_state_data($district["state_code"]));

} elseif ($mode == 'manage') {
    $country_id = "";
    if (!empty($params["state_id"])) {
        $country_id = $params["country_id"];
        unset($params["country_id"]);
    }
    $params = $_REQUEST;
    $params["items_per_page"] = !empty($params["items_per_page"]) ? $params["items_per_page"] : 10;
    $params["sorting"] = " ORDER BY b.position asc, bd.name asc ";
    list($districts, $params) = fn_get_districts($params, DESCR_SL);
    list($countries,) = fn_get_countries(array());
    if (!empty($params["state_id"])) $params["country_id"] = $country_id;
    Tygh::$app['view']->assign('search', $params);
    Tygh::$app['view']->assign('districts', $districts);
    Tygh::$app['view']->assign('countries', $countries);

} elseif ($mode == 'wards') {
    $w = fn_get_ward_by_district($_REQUEST);
    echo json_encode($w);
    exit;
} elseif ($mode == 'districts') {
    $districts = array();
    if (!empty($_REQUEST['id'])) {
        $districts = fn_get_district_by_city($_REQUEST["cid"], $_REQUEST["id"]);
    }
    echo json_encode($districts);
    exit;
} elseif ($mode == 'cities') {
    $city = array();
    if (!empty($_REQUEST['id'])) {
        $city["state"] = fn_get_district_by_country($_REQUEST['id']);
    }
    echo json_encode($city);
    exit;
} elseif($mode == 'state_districts'){
     // get districts
     $state_code = !empty($_REQUEST['state_code']) ? $_REQUEST['state_code'] : '';
     $list_district = fn_get_districts_by_state($state_code);
     $list_district = !empty($list_district) ? json_encode(['list_district' => $list_district, "status" => "success"]) : '';
     echo $list_district;
     exit();
} elseif ($mode == 'district_wards'){
    // get wards
    $district_code = !empty($_REQUEST['district_code']) ? $_REQUEST['district_code'] : '';
    $list_ward = fn_get_wards_by_district($district_code);
    $list_ward = !empty($list_ward) ? json_encode(['list_ward' => $list_ward, "status" => "success"]) : '';
    echo $list_ward;
    exit();
}


