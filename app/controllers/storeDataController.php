<?php

use App\Model\Model;
use App\Crawler\DomainPage;
use Exception;

class storeDataController
{
    public function index()
    {

        if (isset($_POST) && !empty($_POST)) {
            $model = new Model;
            $uri = $_POST['url'];
            $domainPage = new DomainPage($uri);
            try {
                $crawler = $domainPage->checkDomain();
                $title = $crawler->getTitle()[0];
                $article = $crawler->getArticle()[0];
                $datetime = $crawler->getDate()[0];
                $status = $model->storeData($title, $article, $datetime);
                if ($status) {
                    echo '<h4> insert successful </h4>';
                } else {
                    echo '<h4> insert unsuccessful</h4>';
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        include_once "app/views/index.php";
    }
}
