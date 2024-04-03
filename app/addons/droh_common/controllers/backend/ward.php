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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD']	== 'POST') {

    fn_trusted_vars('ward', 'ward_data');
    $suffix = '';
    //
    // Add/edit wards
    //
    if ($mode == 'update') {
        //print_r($_REQUEST);exit;
        $ward_id = fn_update_ward($_REQUEST['ward_data'], $_REQUEST['ward_id'], DESCR_SL);

        $suffix = ".update?ward_id=$ward_id";
    }
    
    if ($mode == 'm_update') {
        foreach ($_REQUEST['ward_data'] as $key => $value) {
            db_query("UPDATE ?:wards SET ?u WHERE ward_id = ?s", $value, $key);
            db_query("UPDATE ?:ward_descriptions SET ?u WHERE ward_id = ?s AND lang_code = ?s", $value, $key, DESCR_SL);
        }
        $suffix = '.manage';
    }

    if ($mode == 'delete') {
        if (!empty($_REQUEST['ward_id'])) {
            fn_delete_ward_by_id($_REQUEST['ward_id']);
        }
        $suffix = '.manage';
    }
    
    if ($mode == 'm_delete') {
        if (isset($_REQUEST['ward_ids'])) {
            foreach ($_REQUEST['ward_ids'] as $v) {
                fn_delete_ward_by_id($v);
            }
        }
        $suffix = ".manage";
    }    
    
    return array(CONTROLLER_STATUS_OK, 'tat_ward' . $suffix);
}
if ($mode == 'add') {
    
    Registry::set('navigation.tabs', array (
        'general' => array (
            'title' => __('general'),
            'js' => true
        ),
    ));
    list($countries, ) =  fn_get_countries(array());
    Tygh::$app['view']->assign('countries', $countries);
   // Tygh::$app['view']->assign('city', fn_get_city_data($ward["city_id"]));

}elseif ($mode == 'update') {
    $ward = fn_get_ward_data($_REQUEST['ward_id'], DESCR_SL);

    if (empty($ward)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    Registry::set('navigation.tabs', array (
        'general' => array (
            'title' => __('general'),
            'js' => true
        ),
    ));
    list($countries, ) =  fn_get_countries(array());    
    Tygh::$app['view']->assign('ward', $ward);
    Tygh::$app['view']->assign('countries', $countries);
    Tygh::$app['view']->assign('district', fn_get_district_data($ward["district_id"]));

} elseif ($mode == 'manage') {
    $country_id = "";
    if(!empty($params["state_id"])){
        $country_id = $params["country_id"];
        unset($params["country_id"]);
    }
    $params = $_REQUEST;
    $params["items_per_page"] = !empty($params["items_per_page"])?$params["items_per_page"]:10;
    $params["sorting"] = " ORDER BY b.position asc, bd.name asc ";
    list($wards, $params) = fn_get_wards($params, DESCR_SL);    
    list($countries, ) =  fn_get_countries(array());
    if(!empty($params["state_id"]))$params["country_id"] = $country_id;
    Tygh::$app['view']->assign('search', $params);
    Tygh::$app['view']->assign('wards', $wards);
    Tygh::$app['view']->assign('countries',$countries);
    
}elseif ($mode == 'wards') {
    $wards = array();   
    if (!empty($_REQUEST['id'])) {        
        $wards = fn_get_ward_by_district($_REQUEST);
    }    
    echo json_encode($wards);
    exit;
}
