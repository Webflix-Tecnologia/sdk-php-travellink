<?php

namespace Travellink\Core;

class TravellinkCar extends TravellinkController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_CAR
        ]);
        parent::__construct($config);
    }
}