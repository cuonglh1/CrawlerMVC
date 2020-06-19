<?php

namespace App\Crawler;

use App\Crawler\VnexpressCrawler;
use App\Crawler\VietnamnetCrawler;
use App\Crawler\DantriCrawler;
use Exception;
class DomainPage
{
    public $uri;

    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function checkDomain()
    {
        $domain = substr($this->uri, 0, 22);
        if ($domain == "https://vnexpress.net/") {

            return new VnexpressCrawler($this->uri);

        } elseif ($domain == "https://dantri.com.vn/") {

            return new DantriCrawler($this->uri);

        } elseif ($domain == "https://vietnamnet.vn/") {

            return new VietnamnetCrawler($this->uri);
        }
        else throw new  Exception('Invalid URI: ' .$this->uri);
           
        
       
    }
}
