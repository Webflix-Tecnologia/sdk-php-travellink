<?php

namespace Travellink\Core;

class TravellinkInsurance extends TravellinkController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_INSURANCE
        ]);
        parent::__construct($config);
    }
}