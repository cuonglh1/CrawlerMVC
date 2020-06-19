<?php
use App\Model\Model;

class showDataController {

    public function showData() {
        $model = new Model(); 
        $result = $model->showData();  
        include_once "app/views/show-data.php";
        
    }
}
