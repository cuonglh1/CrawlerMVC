<?php
namespace App\Crawler;

interface CrawlerInterface {
    
    public function getTitle();

    public function getArticle();

    public function getDate();
}
