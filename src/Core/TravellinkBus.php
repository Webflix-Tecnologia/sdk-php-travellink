<?php

namespace Travellink\Core;

class TravellinkBus extends TravellinkController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_BUS
        ]);
        parent::__construct($config);
    }
}