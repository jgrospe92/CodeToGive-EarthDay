<?php
namespace app\controllers;

class Foodbank extends \app\core\Controller {
    
    // routes the right views
    public function foodbank_dashboard(){
        $this->view('Foodbank/foodbank_dashboard');
    }

}