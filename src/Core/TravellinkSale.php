<?php

namespace Travellink\Core;

class TravellinkSale extends TravellinkController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_SALE
        ]);
        parent::__construct($config);
    }

}