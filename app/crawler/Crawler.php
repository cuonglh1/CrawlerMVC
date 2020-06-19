<?php
namespace App\Crawler;
use App\Curl\Curl;

class Crawler implements CrawlerInterface { 
    public $uri;
    public $regexTitle ;
    public $regexDate ;
    public $regexArticle ;

    public function __construct($uri) {
        $this->uri = $uri;
    }
    public function getTitle() {

        return $this->getData($this->regexTitle,$this->uri);

    }
    public function getArticle() {
        
        return $this->getData($this->regexArticle,$this->uri);

    }
    public function getDate() {
        
        return $this->getData($this->regexDate,$this->uri);

    }

    public function getData($regex, $uri) {
        $curl = new Curl($uri); //call object Curl;
        preg_match_all($regex, $curl->getWebContent(), $matches); //compare get Data;
        return !empty($matches[1]) ? $matches[1] : FALSE;

    }
    
}


