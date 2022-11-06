<?php
namespace app\controllers;

class Register extends \app\core\Controller {

    public function account(){
        $this->view('Register/account2');
    }
    
    public function farmer(){
        $this->view('Register/farmer');
    }
   
}