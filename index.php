<?php
include_once "app/controllers/storeDataController.php";
include_once "app/controllers/showDataController.php";
include_once "app/config/config.php";
include_once "app/curl/Curl.php";
include_once "app/model/model.php";
include_once "app/crawler/CrawlerInterface.php";
include_once "app/crawler/Crawler.php";
include_once "app/crawler/DomainPage.php";
include_once "app/crawler/VnexpressCrawler.php";
include_once "app/crawler/DantriCrawler.php";
include_once "app/crawler/VietnamnetCrawler.php";

if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
} elseif (isset($_POST["controller"])) {
    $controller = $_POST["controller"];
} else {
    $controller = "index";
}

switch ($controller) {
    case "showdata":
        $c = new showDataController();
        $c->showData();
        break;
    default:
        $c = new storeDataController();
        $c->index();
}
