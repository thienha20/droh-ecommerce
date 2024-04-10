<?php

/* * *************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 * ***************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 * ************************************************************************** */

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

#region REGIONS
function fn_get_wards($params = array(), $lang_code = CART_LANGUAGE)
{
    $default_params = array(
        'items_per_page' => 0,
    );

    $params = array_merge($default_params, $params);

    $sortings = array(
        'position' => 'b.position',
        'name' => 'bd.name',
    );

    $condition = $limit = '';

    $sorting = db_sort($params, $sortings, 'name', 'asc');

    if (!empty($params["sorting"]))
        $sorting = $params["sorting"];

    $condition = (AREA == 'A') ? '' : " AND b.status = 'A' ";

    if (!empty($params['name'])) {
        $condition .= db_quote(' AND bd.name like ?s', "%" . $params['name'] . "%");
    }

    if (!empty($params['code'])) {
        $condition .= db_quote(' AND b.code like ?s', "%" . $params['code'] . "%");
    }

    if (!empty($params['status'])) {
        $condition .= db_quote(' AND b.status = ?s', $params['status']);
    }

    if (!empty($params['district_id'])) {
        if (is_array($params['district_id'])) {
            $condition .= db_quote(' AND district_id in (?a)', $params['district_id']);
        } else {
            $condition .= db_quote(' AND district_id = ?s', $params['district_id']);
        }
    } else {
        if (!empty($params['state_id'])) {
            $condition .= db_quote(' AND district_id IN (SELECT district_id FROM ?:districts WHERE state_code=?s AND country_code=?s)', $params['state_id'], $params['country_id']);

        } else {
            if (!empty($params['country_id'])) {
                $condition .= db_quote(' AND district_id IN (SELECT district_id FROM ?:districts WHERE country_code=?s)', $params['country_id']);
            }
        }

    }

    if (!empty($params['item_ids'])) {
        $condition .= db_quote(' AND b.ward_id IN (?n)', explode(',', $params['item_ids']));
    }

    fn_set_hook('get_ward', $params, $condition, $sorting, $limit, $lang_code);

    $fields = array(
        'b.ward_id',
        'b.code',
        'b.status',
        'b.state_code',
        'b.district_code',
        'b.position',
        'bd.name'
    );

    $total = !empty($params['total']) ? intval($params['total']) : 0;

    $calc_found_rows = '';
    if (empty($total)) {
        $calc_found_rows = 'SQL_CALC_FOUND_ROWS';
    }

    if (!empty($params['limit'])) {
        $limit = db_quote(" LIMIT 0, ?i", $params['limit']);
    } elseif (!empty($params['items_per_page'])) {
        $limit = db_paginate($params['page'], $params['items_per_page']);
    }

    $sql_query_body = db_quote(
        "SELECT $calc_found_rows ?p FROM ?:wards b " .
        " LEFT JOIN ?:ward_descriptions bd ON b.ward_id = bd.ward_id AND bd.lang_code = ?s" .
        " WHERE 1 ?p ?p ?p", implode(", ", $fields), $lang_code, $condition, $sorting, $limit
    );

    $fn_load_ward = function ($query, $params) use ($total) {
        $contacts = db_get_array($query);
        $total_found_rows = empty($params['items_per_page']) ? count($contacts) : (empty($total) ? db_get_found_rows() : $total);

        return array($contacts, $total_found_rows);
    };

    list ($tat_ward, $params['total_items']) = $fn_load_ward($sql_query_body, $params);
    return array($tat_ward, $params);
}

//
// Get specific ward data
//
function fn_get_ward_data($ward_id, $lang_code = CART_LANGUAGE)
{
    $status_condition = (AREA == 'A') ? '' : " AND b.status IN ('A') ";

    $fields = array(
        'b.*',
        'bd.name'
    );

    $ward = db_get_row(
        "SELECT ?p FROM ?:wards b " .
        " LEFT JOIN ?:ward_descriptions bd ON b.ward_id = bd.ward_id AND bd.lang_code = ?s " .
        " WHERE b.ward_id = ?i ?p", implode(", ", $fields), $lang_code, $ward_id, $status_condition
    );

    return $ward;
}

/**
 * Deletes ward and all related data
 *
 * @param int $ward_id identificator
 */
function fn_delete_ward_by_id($ward_id)
{
    if (!empty($ward_id)) {
        db_query("DELETE FROM ?:wards WHERE ward_id = ?i", $ward_id);
        db_query("DELETE FROM ?:ward_descriptions WHERE ward_id = ?i", $ward_id);
    }
}

function fn_update_ward($data, $ward_id, $lang_code = CART_LANGUAGE)
{
    $ex = explode("-", $data["district_id"]);
    $data["district_id"] = $ex[0];
    $data["district_code"] = !empty($ex[1]) ? $ex[1] : "";
    if (!empty($ward_id)) {
        db_query("UPDATE ?:wards SET ?u WHERE ward_id = ?i", $data, $ward_id);
        db_query("UPDATE ?:ward_descriptions SET ?u WHERE ward_id = ?i AND lang_code = ?s", $data, $ward_id, $lang_code);
    } else {
        $ward_id = $data['ward_id'] = db_query("REPLACE INTO ?:wards ?e", $data);
        foreach (fn_get_translation_languages() as $data['lang_code'] => $v) {
            db_query("REPLACE INTO ?:ward_descriptions ?e", $data);
        }
    }

    return $ward_id;
}

function fn_get_ward_by_district($params, $lang_code = CART_LANGUAGE)
{
    $key = md5("ward-".implode("-", $params).$lang_code);
    Registry::registerCache(array('ward', $key), array("wards"), Registry::cacheLevel('static'));
    if(Registry::isExist($key)) return Registry::get($key);
//    $status_condition = (AREA == 'A') ? '' : " AND b.status IN ('A') ";
    $status_condition = " AND b.status IN ('A') ";
    $fields = array(
        'b.*',
        'bd.name'
    );

    if (isset($params["district_code"]) || isset($params["state_code"])) {
        $condition = '';
        if (!empty($params['state_code'])) {
            $condition .= db_quote(" AND b.state_code = ?s ", $params['state_code']);
        }
        $condition .= db_quote(" AND b.district_code = ?s ", $params['district_code']);
        $condition .= db_quote($status_condition);

        $ward = db_get_array(
            "SELECT ?p FROM ?:wards b " .
            " LEFT JOIN ?:ward_descriptions bd ON b.ward_id = bd.ward_id AND bd.lang_code = ?s " .
            " WHERE 1 ?p ORDER BY b.position asc, bd.name asc", implode(", ", $fields), $lang_code, $condition
        );
    } else {
        $ward = db_get_array(
            "SELECT ?p FROM ?:wards b " .
            " LEFT JOIN ?:ward_descriptions bd ON b.ward_id = bd.ward_id AND bd.lang_code = ?s " .
            " WHERE b.district_id = ?i ?p ORDER BY b.position asc, bd.name asc", implode(", ", $fields), $lang_code, $params["id"], $status_condition
        );
    }
    Registry::set($key, $ward);
    return $ward;
}

function fn_get_ward_name($code, $district_code, $lang_code = CART_LANGUAGE)
{
    $fields = array(
        'bd.name'
    );
    $district = db_get_field(
        "SELECT ?p FROM ?:wards b " .
        " LEFT JOIN ?:ward_descriptions bd ON b.ward_id = bd.ward_id AND bd.lang_code = ?s " .
        " WHERE b.code = ?s and b.district_code = ?s", implode(", ", $fields), $lang_code, $code, $district_code
    );
    return $district;

}

//--------------------- function for district--------------------------\\
//
// Get district
//
function fn_get_districts($params = array(), $lang_code = CART_LANGUAGE)
{
    $default_params = array(
        'items_per_page' => 0,
    );

    $params = array_merge($default_params, $params);

    $sortings = array(
        'position' => 'b.position',
        'name' => 'bd.name',
    );

    $condition = $limit = '';

    $sorting = db_sort($params, $sortings, 'name', 'asc');

    if (!empty($params["sorting"]))
        $sorting = $params["sorting"];

    $condition = (AREA == 'A') ? '' : " AND b.status = 'A' ";

    if (!empty($params['name'])) {
        $condition .= db_quote(' AND bd.name like ?s', "%" . $params['name'] . "%");
    }

    if (!empty($params['code'])) {
        $condition .= db_quote(' AND b.code like ?s', "%" . $params['code'] . "%");
    }

    if (!empty($params['status'])) {
        $condition .= db_quote(' AND b.status = ?s', $params['status']);
    }

    if (!empty($params['country_id'])) {
        if (is_array($params['country_id']))
            $condition .= db_quote(' AND country_code in (?a)', $params['country_id']);
        else
            $condition .= db_quote(' AND country_code = ?s', $params['country_id']);
    }

    if (!empty($params['state_id'])) {
        if (is_array($params['state_id']))
            $condition .= db_quote(' AND b.state_code IN (?a)', $params['state_id']);
        else {
            if (is_int($params['state_id'])) {
                $condition .= db_quote(' AND b.state_code = (SELECT code FROM ?:states WHERE state_id=?i)', $params['state_id']);
            } else
                $condition .= db_quote(' AND b.state_code = ?s', $params['state_id']);
        }
    }


    if (!empty($params['item_ids'])) {
        $condition .= db_quote(' AND b.district_id IN (?n)', explode(',', $params['item_ids']));
    }

    fn_set_hook('get_district', $params, $condition, $sorting, $limit, $lang_code);

    $fields = array(
        'b.district_id',
        'b.code',
        'b.status',
        'b.state_code',
        'b.position',
        'bd.name'
    );

    $total = !empty($params['total']) ? intval($params['total']) : 0;

    $calc_found_rows = '';
    if (empty($total)) {
        $calc_found_rows = 'SQL_CALC_FOUND_ROWS';
    }

    if (!empty($params['limit'])) {
        $limit = db_quote(" LIMIT 0, ?i", $params['limit']);
    } elseif (!empty($params['items_per_page'])) {
        $limit = db_paginate($params['page'], $params['items_per_page']);
    }

    $sql_query_body = db_quote(
        "SELECT $calc_found_rows ?p FROM ?:districts b " .
        " LEFT JOIN ?:district_descriptions bd ON b.district_id = bd.district_id AND bd.lang_code = ?s" .
        " WHERE 1 ?p ?p ?p", implode(", ", $fields), $lang_code, $condition, $sorting, $limit
    );

    $fn_load_district = function ($query, $params) use ($total) {
        $contacts = db_get_array($query);
        $total_found_rows = empty($params['items_per_page']) ? count($contacts) : (empty($total) ? db_get_found_rows() : $total);

        return array($contacts, $total_found_rows);
    };

    list ($tat_district, $params['total_items']) = $fn_load_district($sql_query_body, $params);
    return array($tat_district, $params);
}

//
// Get specific district data
//
function fn_get_district_data($district_id, $lang_code = CART_LANGUAGE)
{
    $status_condition = (AREA == 'A') ? '' : " AND b.status IN ('A') ";

    $fields = array(
        'b.*',
        'bd.name'
    );

    $district = db_get_row(
        "SELECT ?p FROM ?:districts b " .
        " LEFT JOIN ?:district_descriptions bd ON b.district_id = bd.district_id AND bd.lang_code = ?s " .
        " WHERE b.district_id = ?i ?p", implode(", ", $fields), $lang_code, $district_id, $status_condition
    );

    return $district;
}

/**
 * Deletes district and all related data
 *
 * @param int $district_id identificator
 */
function fn_delete_district_by_id($district_id)
{
    if (!empty($district_id)) {
        db_query("DELETE FROM ?:districts WHERE district_id = ?i", $district_id);
        db_query("DELETE FROM ?:district_descriptions WHERE district_id = ?i", $district_id);
    }
}

function fn_update_district($data, $district_id, $lang_code = CART_LANGUAGE)
{
    if (!empty($district_id)) {
        db_query("UPDATE ?:districts SET ?u WHERE district_id = ?i", $data, $district_id);
        db_query("UPDATE ?:district_descriptions SET ?u WHERE district_id = ?i AND lang_code = ?s", $data, $district_id, $lang_code);
    } else {
        $district_id = $data['district_id'] = db_query("REPLACE INTO ?:districts ?e", $data);
        foreach (fn_get_translation_languages() as $data['lang_code'] => $v) {
            db_query("REPLACE INTO ?:district_descriptions ?e", $data);
        }
    }

    return $district_id;
}

function fn_get_district_by_city($country, $state, $lang_code = CART_LANGUAGE)
{
    $key = md5("location-".$country."-".$state.$lang_code);
    Registry::registerCache(array('district', $key), array("districts"), Registry::cacheLevel('static'));
    if(Registry::isExist($key)) return Registry::get($key);
    $fields = array(
        'b.*',
        'bd.name'
    );

    $district = db_get_array(
        "SELECT ?p FROM ?:districts b " .
        " LEFT JOIN ?:district_descriptions bd ON b.district_id = bd.district_id AND bd.lang_code = ?s " .
        " WHERE b.state_code = ?s AND b.country_code=?s AND b.status IN ('A') ORDER BY b.position asc, bd.name asc", implode(", ", $fields), $lang_code, $state, $country
    );
    Registry::set($key, $district);
    return $district;
}

function fn_get_districts_by_state($state, $lang_code = CART_LANGUAGE)
{
    $key = md5("location-".$state.$lang_code);
    Registry::registerCache(array('state_district', $key), array("districts"), Registry::cacheLevel('static'));
    if(Registry::isExist($key)) return Registry::get($key);
    $fields = array(
        'b.code',
        'b.state_code',
        'bd.name as district'
    );

    $district = db_get_array(
        "SELECT ?p FROM ?:districts b " .
        " LEFT JOIN ?:district_descriptions bd ON b.district_id = bd.district_id AND bd.lang_code = ?s " .
        " WHERE b.state_code = ?s AND b.status IN ('A') ORDER BY b.position asc, bd.name asc", implode(", ", $fields), $lang_code, $state
    );
    Registry::set($key, $district);
    return $district;
}

function fn_get_wards_by_district($district, $lang_code = CART_LANGUAGE)
{
    $key = md5("location-".$district.$lang_code);
    Registry::registerCache(array('district_ward', $key), array("wards"), Registry::cacheLevel('static'));
    if(Registry::isExist($key)) return Registry::get($key);
    $fields = array(
        'b.code',
        'b.district_code',
        'bd.name as ward'
    );

    $ward = db_get_array(
        "SELECT ?p FROM ?:wards b " .
        " LEFT JOIN ?:ward_descriptions bd ON b.ward_id = bd.ward_id AND bd.lang_code = ?s " .
        " WHERE b.district_code = ?s AND b.status IN ('A') ORDER BY b.position asc, bd.name asc", implode(", ", $fields), $lang_code, $district
    );
    Registry::set($key, $ward);
    return $ward;
}

function fn_get_district_name($district_code, $state_code, $lang_code = CART_LANGUAGE)
{
    $fields = array(
        'bd.name'
    );
    $district = db_get_field(
        "SELECT ?p FROM ?:districts b " .
        " LEFT JOIN ?:district_descriptions bd ON b.district_id = bd.district_id AND bd.lang_code = ?s " .
        " WHERE b.code = ?s AND b.state_code=?s", implode(", ", $fields), $lang_code, $district_code, $state_code
    );
    return $district;

}

function fn_get_district_by_country($country_id, $lang_code = CART_LANGUAGE)
{

    $status_condition = (AREA == 'A') ? '' : " AND b.status IN ('A') ";

    $fields = array(
        'b.*',
        'bd.state as name'
    );

    $city = db_get_array(
        "SELECT ?p FROM ?:states b " .
        " LEFT JOIN ?:state_descriptions bd ON b.state_id = bd.state_id AND bd.lang_code = ?s " .
        " WHERE b.country_code = ?s ?p ORDER BY b.position asc, bd.state asc", implode(", ", $fields), $lang_code, $country_id, $status_condition
    );
    return $city;
}

function fn_get_state_data($state_id, $lang_code = CART_LANGUAGE)
{
    //$status_condition = (AREA == 'A') ? '' : " AND b.status IN ('A') ";
    $status_condition = db_quote(" AND b.state_id=?i ", $state_id);
    $fields = array(
        'b.*',
        'bd.state as name'
    );

    $city = db_get_row(
        "SELECT ?p FROM ?:states b " .
        " LEFT JOIN ?:state_descriptions bd ON b.state_id = bd.state_id " .
        " WHERE bd.lang_code = ?s ?p", implode(", ", $fields), $lang_code, $status_condition
    );

    return $city;
}

function fn_get_districtGhn($district_code_local){
    $fields = array(
        'b.area_external_id'
    );
    $district = db_get_field(
        "SELECT ?p FROM ?:map_code_areas b " .
        " WHERE b.code_area_type = ?s AND b.shipping_service_code=?s AND area_local_code=?s", implode(", ", $fields), 'district', 'GHN', $district_code_local
    );
    return $district;
}

function fn_get_wardGhn($ward_code_local){
    $fields = array(
        'b.area_external_code'
    );
    $district = db_get_field(
        "SELECT ?p FROM ?:map_code_areas b " .
        " WHERE b.code_area_type = ?s AND b.shipping_service_code=?s AND area_local_code=?s", implode(", ", $fields), 'ward', 'GHN', $ward_code_local
    );
    return $district;
}
