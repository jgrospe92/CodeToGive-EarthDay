<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $this->view('Main/index');
    }
    
    public function gleanerLogin(){
        $this->view('Login/gleanerLogin');
    }

    public function foodBankLogin(){ 
        $this->view('Login/foodBankLogin');
    }

    public function farmerLogin(){ 
        $this->view('Login/farmerLogin');
    }

}