<?php
namespace app\controllers;

class Register extends \app\core\Controller {

    public function farmer_account(){
        $this->view('Register/farmer_account');
    }
    
    public function farmer(){
        $this->view('Register/farmer');
    }
   
}