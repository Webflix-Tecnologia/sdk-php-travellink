<?php

namespace Travellink\Core;

use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\PublicKeyLoader;

class TravellinkController extends TravellinkHttp {
    protected $developerToken;
    protected $developerPublicKey;
    protected $developerAccesCode;
    protected $binaryData;

    public function __construct(array $config = []) {        
        parent::__construct($config);
    }
    
    public function getDeveloperToken() {
        return $this->developerToken;
    }

    public function getDeveloperAccesCode() {
        return $this->developerAccesCode;
    }

    public function setDeveloperToken($developerToken) {
        $this->developerToken = $developerToken;
        return $this;
    }

    public function generateDeveloperAccesCode() {
        
        $publicKey = PublicKeyLoader::load($this->developerPublicKey)
            ->withPadding(RSA::ENCRYPTION_PKCS1);
        
        $encrypted = $publicKey->encrypt($this->binaryData);
        
        $this->developerAccesCode = base64_encode($encrypted);
        
        return $this;
    }
    
    public function setDeveloperPublicKey($developerPublicKey) {
        $this->developerPublicKey = $developerPublicKey;
        return $this;
    }

    public function getBinaryData() {
        return $this->binaryData;
    }

    public function setBinaryData($binaryData) {
        $this->binaryData = "{$binaryData}|".date("d/m/Y");
        return $this;
    }


}
