<?php

namespace Travellink\Core;

class TravellinkHotel extends TravellinkController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_HOTEL,
        ]);
        parent::__construct($config);
    }
}