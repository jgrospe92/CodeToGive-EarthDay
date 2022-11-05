<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $farmer = new \app\models\farmer();
        $farmers = $farmer->getAll();
        $this->view('Main/test',$farmers);
    }
}