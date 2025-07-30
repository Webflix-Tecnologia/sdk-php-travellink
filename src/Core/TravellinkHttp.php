<?php

namespace Travellink\Core;

use GuzzleHttp\Client;

class TravellinkHttp {
    protected Client $http;
    protected $config;
    const SANDBOX_AIR = "https://wooba-sandbox.travellink.com.br/wcftravellinkjson/AereoNoSession.svc/";
    const PRODUCTION_AIR = "";

    const SANDBOX_HOTEL = "https://wooba-sandbox.travellink.com.br/TravellinkWebApi/api/";
    const PRODUCTION_HOTEl = "";

    const SANDBOX_CAR = self::SANDBOX_HOTEL."v1/car/";
    const PRODUCTION_CAR = "";
           
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
