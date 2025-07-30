<?php

namespace Travellink\Core;

class TravellinkAir extends TravellinkController{

    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_AIR,
        ]);
        parent::__construct($config);
    }
    
}
