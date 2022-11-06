<?php
namespace app\controllers;

class Farmer extends \app\core\Controller {
    
    // routes the right views
    public function farmer_dashboard(){
        $this->view('Farmer/farmer_dashboard');
    }

}