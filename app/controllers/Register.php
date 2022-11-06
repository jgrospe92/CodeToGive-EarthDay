<?php
namespace app\controllers;

class Register extends \app\core\Controller {

    public function account(){
        $this->view('Register/account');
    }
    
    public function farmer(){
        $this->view('Register/farmerRegister');
    }
    public function gleaner(){
        $this->view('Register/gleanerRegister');
    }
    public function foodbank(){
        $this->view('Register/foodbankRegister');
    }
   
}