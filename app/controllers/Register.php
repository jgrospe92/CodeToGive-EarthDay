<?php
namespace app\controllers;

class Register extends \app\core\Controller {

    public function farmer_account(){
        $this->view('Register/farmer_account');
    }
    public function gleaner(){
        $this->view('Register/gleanerRegister');
    }
    public function foodbank(){
        $this->view('Register/foodbankRegister');
    }
   
}