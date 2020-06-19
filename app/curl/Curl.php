<?php

namespace App\Curl;

Class Curl
{
    public $uri;

    public function __construct($uri) {
        $this->uri = $uri;
    }

    public function getWebContent() {
        // Initialize CURL
        $curl = curl_init($this->uri);
        // Set return
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);
        // Disconnect CURL, free
        curl_close($curl);

        return $result;
    }
}
