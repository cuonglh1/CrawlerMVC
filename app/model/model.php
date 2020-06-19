<?php
namespace App\Model;

class Model {

    public function showData() {
        global $conn;
        $sql = "SELECT *FROM crawler";
        return $conn->query($sql);
    }
    public function storeData($title, $article, $datetime) {
        global $conn;
        
        if (empty($title) || empty($article) || empty($datetime)) {
            return false;
        }
        $title = addslashes($title);
        $article = addslashes($article);
        $datetime = addslashes($datetime);

        $sql = "INSERT INTO crawler (title, article, datetime) VALUES ('$title','$article','$datetime')";
        if ($conn->query($sql)) {
            return true;
        }
        return false;
    }
}
