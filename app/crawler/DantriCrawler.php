<?php
namespace App\Crawler;

class DantriCrawler extends Crawler {

    public $regexTitle = '/<h1 class="fon31 mgb15">(.*?)<\/h1>/ms';
    public $regexDate = '/<span class="fr fon7 mr2 tt-capitalize">(.*?)<\/span>/ms';
    public $regexArticle = '/<div id="divNewsContent".*?>(.*?)<\/div>/ms';
}