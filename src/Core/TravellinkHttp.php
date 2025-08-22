<?php

namespace Travellink\Core;

use GuzzleHttp\Client;
use phpDocumentor\Reflection\Types\Self_;

class TravellinkHttp {
    protected Client $http;
    protected $config;
    const SANDBOX_AIR = "https://wooba-sandbox.travellink.com.br/wcftravellinkjson/AereoNoSession.svc/";
    const PRODUCTION_AIR = "";

    const BASE_SANDBOX = "https://wooba-sandbox.travellink.com.br/TravellinkWebApi/api/";
    const BASE_PRODUCTIOn = '';

    const SANDBOX_HOTEL = self::BASE_SANDBOX."hotels/";
    const PRODUCTION_HOTEl = "";

    const SANDBOX_CAR = self::BASE_SANDBOX."v1/car/";
    const PRODUCTION_CAR = "";
    const SANDBOX_BUS = self::BASE_SANDBOX.'v1/bus/';
    const PRODUCTION_BUS = '';
    const SANDBOX_SALE = self::BASE_SANDBOX.'v1/sales/';
    const PRODUCTION_SALE = '';
    const SANDBOX_INSURANCE = self::BASE_SANDBOX.'v1/insurance/';
    const PRODUCTION_INSURANCE = '';
           
    public function __construct(array $config = []) {   
        $defaultConfig = array(
            'base_uri' => '',
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json',
            )
        );
        $this->config = array_replace_recursive($defaultConfig, $config);
        $this->http = new Client($this->config);
    }
}
