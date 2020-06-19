<?php
namespace App\Crawler;

class VietnamnetCrawler extends Crawler {

    public $regexTitle = '/<h1 class="title f-22 c-3e">(.*?)<\/h1>/ms';
    public $regexDate = '/<span class="ArticleDate  right">(.*?)<\/span>/ms';
    public $regexArticle = '/<div id="ArticleContent" class="ArticleContent">(.*?)<div class="inner-article">/ms';
}