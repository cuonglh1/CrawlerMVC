<?php

namespace App\Crawler;

class VnexpressCrawler extends Crawler {

    public $regexTitle = '/<h1 class.*>(.*?)<\/h1>/m';
    public $regexDate = '/<span class="date">(.*?)<\/span>/m';
    public $regexArticle = '/<p class="description">(.*)<\/article>/ms';
}
