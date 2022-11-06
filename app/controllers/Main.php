<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $this->view('Main/index');
    }
    public function farmer(){
        $this->view('Register/farmer');
    }

}