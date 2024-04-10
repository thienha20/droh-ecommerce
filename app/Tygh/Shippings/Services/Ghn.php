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

namespace Tygh\Shippings\Services;

use Tygh\Shippings\IService;
use Tygh\Http;
use Tygh\Registry;

/**
 * Giao Hang Nhanh shipping service.
 * Uses Rating Package XML API 2201
 */
class Ghn implements IService
{
    /**
     * API version
     */
    const VERSION = '1.0';
    /**
     * Production service URL
     */
    const URL_PRODUCTION  = 'https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee';
    /**
     * Development service URL
     */
    const URL_DEVELOPMENT = 'https://dev-online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee';
    /*
     * UPS All countries: Worldwide Express Freight service code
     */
    const WORLDWIDE_EXPRESS_FREIGHT = 96;
    /**
     * Weight: pounds
     */
    const WEIGHT_POUNDS = 'LBS';
    /**
     * Weight: kilograms
     */
    const WEIGHT_KILOGRAMS = 'KGS';
    /**
     * Length: inches
     */
    const LENGTH_INCHES = 'IN';
    /**
     * Length: centimetres
     */
    const LENGTH_CENTIMETRES = 'CM';
    /**
     * Availability multithreading in this module
     *
     * @var array $_allow_multithreading
     */
    private $_allow_multithreading = true;
    /**
     * @var string Service URL
     */
    private $service_url;
    /**
     * @var array Shipping settings
     */
    private $settings;
    /**
     * @var array Package info
     */
    private $package;
    /**
     * Stored shipping information
     *
     * @var array $_shipping_info
     */
    private $_shipping_info = array();

    /**
     * @inheritdoc
     */
    public function prepareData($shipping_info)
    {
        $this->_shipping_info = $shipping_info;

        $this->settings = $shipping_info['service_params'];

        $this->package = $shipping_info['package_info'];
        $this->package['origination'] = $this->prepareAddress($this->package['origination']);
        $this->package['location'] = $this->prepareAddress($this->package['location']);

        $this->service_url = isset($this->settings['test_mode']) && $this->settings['test_mode'] == 'Y' ?
            self::URL_DEVELOPMENT :
            self::URL_PRODUCTION;
    }

    /**
     * @inheritdoc
     */
    public function processRates($response)
    {
        $response = json_decode($response, true);
        $return = array();
        if ($response && $response['code'] == 200) {
            $service_code = "GHN";
            $total_charge = $response['data']['total'];
            $return[$service_code] = array(
                'rate' => $total_charge
            );
        }
        return $return;
    }

    /**
     * @inheritdoc
     */
    public function processResponse($response)
    {
        $return = array(
            'cost' => false,
            'error' => false,
            'delivery_time' => false,
        );

        $code = $this->_shipping_info['service_code'];
        $rates = $this->processRates($response);
        if (isset($rates[$code])) {
            $return['cost'] = $rates[$code]['rate'];

            if (isset($rates[$code]['delivery_time'])) {
                $return['delivery_time'] = $rates[$code]['delivery_time'];
            }
        } else {
            $return['error'] = $this->processErrors($response);
        }

        return $return;
    }

    /**
     * @inheritdoc
     */
    public function processErrors($response)
    {
        // Parse XML message returned by the UPS post server.
        $xml = @simplexml_load_string($response);
        $return = '';

        if (!empty($xml)) {
            $status_code = (string) $xml->Response->ResponseStatusCode;

            if ($status_code != '1') {
                $return = (string) $xml->Response->Error->ErrorDescription;
                if (!empty($xml->Response->Error->ErrorDigest)) {
                    $return .= ' (' . (string) $xml->Response->Error->ErrorDigest . ').';
                }

                return $return;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function allowMultithreading()
    {
        return $this->_allow_multithreading;
    }

    /**
     * @inheritdoc
     */
    public function getRequestData()
    {
        $request_data = array(
            'method' => 'post',
            'url' => $this->service_url,
            'data' => $this->getRatingRequest(),
            'headers' => array(
                'Content-type: application/json',
                'Token:' . (empty($this->settings['token']) ? '' : $this->settings['token']),
                'ShopId:' . (empty($this->settings['system_id']) ? '' : $this->settings['system_id'])
            )
        );

        return $request_data;
    }

    /**
     * @inheritdoc
     */
    public function getSimpleRates()
    {
        $data = $this->getRequestData();
        $response = Http::post($data['url'], $data['data'], array('headers' => 'Content-type: text/xml'));

        return $response;
    }

    /**
     * Fill required address fields
     * TODO: Add to \Tygh\Shippings\IService
     *
     * @param array $address Address data
     *
     * @return array Filled address data
     */
    public function prepareAddress($address)
    {
        $default_fields = array(
            'zipcode' => '',
            'state' => '',
            'country' => '',
            'district' => '',
        );

        return array_merge($default_fields, $address);
    }

    /**
     * Returns shipping service information
     * @return array information
     */
    public static function getInfo()
    {
        return array(
            'name' => __('carrier_ghn'),
            'tracking_url' => 'https://ghn.vn/blogs/trang-thai-don-hang'
        );
    }

    /**
     * Provides content of Access Request.
     *
     * @return string Access Request
     */
    private function getAccessRequest()
    {
        return '<?xml version="1.0"?>'
            . fn_array_to_xml(array(
                'AccessRequest@xml:lang=en-US' => array(
                    'AccessLicenseNumber' => empty($this->settings['access_key']) ? '' : $this->settings['access_key'],
                    'UserId' => empty($this->settings['username']) ? '' : $this->settings['username'],
                    'Password' => empty($this->settings['password']) ? '': $this->settings['password'],
                )
            ));
    }

    /**
     * Provides content of Rating Service Selection Request.
     *
     * @return string Rating Service Selection Request
     */
    private function getRatingRequest()
    {
        $from_district_id = fn_get_districtGhn($this->_shipping_info['package_info']['origination']['district']);
        $from_ward_code = fn_get_wardGhn($this->_shipping_info['package_info']['origination']['ward']);
        //$from_ward_code = '21012';
        $to_district_id = fn_get_districtGhn($this->_shipping_info['package_info']['location']['district']);
        //fn_print_die($to_district_id);
        $to_ward_code = fn_get_districtGhn($this->_shipping_info['package_info']['location']['ward']);
        //$to_ward_code = '21012';
        $height = 50;
        $length = 20;
        $width = 20;
        $weight = 200;
        $cod_failed_amount = 2000;
        $request = array(
            'from_district_id' => (int)$from_district_id ,
            'from_ward_code' => $from_ward_code ,
            'service_id' => 53320,
            'service_type_id' => null,
            'to_district_id' => (int)$to_district_id,
            'to_ward_code' => $to_ward_code,
            'height' => $height,
            'length' => $length,
            'weight' => $weight,
            'width' => $width,
            'insurance_value' => 10000,
            'cod_failed_amount' => $cod_failed_amount,
            'coupon' => null
        );
        //fn_print_die($request);
        return json_encode($request);
    }

    /**
     * Prepares shipment service options based on the shipping method settings and delivery type (local/international).
     *
     * @return array Package service options
     */
    private function prepareShipmentOptions()
    {
        $shipment_options = array();

        if ($this->package['origination']['country'] != $this->package['location']['country']
            && !empty($this->settings['delivery_confirmation'])
            && $this->settings['delivery_confirmation'] == 'Y'
            && $this->settings['dcist_type'] > 1
        ) {
            $shipment_options = array(
                'ShipmentServiceOptions' => array(
                    'DeliveryConfirmation' => array(
                        'DCISType' => $this->settings['dcist_type'] - 1
                    ),
                ),
            );
        }

        return $shipment_options;
    }

    /**
     * Prepares package service options based on the shipping method settings and delivery type (local/international).
     *
     * @param array $package Package info to prepare service options for
     *
     * @return array Package service options
     */
    private function preparePackageOptions($package)
    {
        $package_options = array();

        /*
         * Domestic confirmation:          International confirmation:
         * 1 - No Signature                -
         * 2 - Signature Required          1 - Signature Required
         * 3 - Adult Signature required    2 - Adult Signature Required
         */
        if ($this->package['origination']['country'] == $this->package['location']['country']
            && !empty($this->settings['delivery_confirmation'])
            && $this->settings['delivery_confirmation'] == 'Y'
        ) {
            $package_options['DeliveryConfirmation'] = array(
                'DCISType' => $this->settings['dcist_type']
            );
        }


        // ShipperDeclaredValue section is marked as Required for UPS Worldwide Express Freight shipments.
        // However, when using it, the following error occurs:
        // 111160 - The requested accessory option is unavailable with the selected billing option
        /*
        if ($this->_shipping_info['service_code'] == self::WORLDWIDE_EXPRESS_FREIGHT) {
            $package_options['ShipperDeclaredValue'] = array(
                'CurrencyCode' => CART_PRIMARY_CURRENCY,
                'MonetaryValue' => $package['cost'],
            );
        }
        */

        return $package_options ? array('PackageServiceOptions' => $package_options) : array();
    }

    /**
     * Gets meausement units for the specified country.
     *
     * @param string $country Country code
     *
     * @return array Weight unit and length unit
     */
    protected function getMeausementUnits($country = '')
    {
        if (empty($country)) {
            $country = $this->package['origination']['country'];
        }

        if (in_array($country, array('US', 'DO', 'PR'))) {
            $weight_unit = self::WEIGHT_POUNDS;
            $length_unit = self::LENGTH_INCHES;
        } else {
            $weight_unit = self::WEIGHT_KILOGRAMS;
            $length_unit = self::LENGTH_CENTIMETRES;
        }


        return array($weight_unit, $length_unit);
    }

    /**
     * Prepares information about packages in the shipment.
     *
     * @return array Packages
     */
    protected function preparePackages()
    {
        $package_type = empty($this->settings['package_type']) ? '' : $this->settings['package_type'];
        list($weight_unit, $length_unit) = $this->getMeausementUnits();

        $default_length = empty($this->settings['length']) ? 0 : $this->settings['length'];
        $default_width  = empty($this->settings['width'])  ? 0 : $this->settings['width'];
        $default_height = empty($this->settings['height']) ? 0 : $this->settings['height'];
        $default_weight = $this->prepareWeight($this->package['W'], $weight_unit);

        $packages = array();
        if (empty($this->package['packages'])) {
            $packages[] = array(
                'shipping_params' => array(
                    'box_length' => $default_length,
                    'box_width' => $default_width,
                    'box_height' => $default_height,
                ),
                'weight' => $this->package['W'],
                'cost' => $this->package['C'],
            );
        } else {
            $packages = $this->package['packages'];
        }

        $packages_node = array('Package' => array());
        foreach ($packages as $package) {
            $package_node = array(
                'PackagingType' => array(
                    'Code' => $package_type,
                ),
                'Dimensions' => array(
                    'UnitOfMeasurement' => array(
                        'Code' => $length_unit,
                    ),
                    'Length' => empty($package['shipping_params']['box_length']) ? $default_length : $package['shipping_params']['box_length'],
                    'Width' => empty($package['shipping_params']['box_width']) ? $default_width  : $package['shipping_params']['box_width'],
                    'Height' => empty($package['shipping_params']['box_height']) ? $default_height : $package['shipping_params']['box_height'],
                ),
                'PackageWeight' => array(
                    'UnitOfMeasurement' => array(
                        'Code' => $weight_unit,
                    ),
                    'Weight' => empty($package['weight']) ? $default_weight : $this->prepareWeight($package['weight'], $weight_unit),
                ),
            );

            $package_node += $this->preparePackageOptions($package);

            $packages_node['Package'][] = $package_node;
        }

        return $packages_node;
    }

    /**
     * Converts weight to pounds or kilograms depending on the origination country.
     *
     * @TODO: Replace with unified weight formatting method
     *
     * @param float  $weight Weight of the package in the primary weight unit
     * @param string $unit   Weight unit: pounds (self::WEIGHT_POUNDS) or kilograms (self::WEIGHT_KILOGRAMS)
     *
     * @return float Weight in the selected unit
     */
    private function prepareWeight($weight, $unit)
    {
        if ($unit == self::WEIGHT_POUNDS) {
            $weight = fn_convert_weight_to_imperial_units($weight);
            $weight = $weight['full_pounds'];
        } else {
            $weight = $weight / 1000 * Registry::get('settings.General.weight_symbol_grams');
        }

        return $weight;
    }
}
