<?php
namespace app\controllers;

class Farmer extends \app\core\Controller {
    
    // routes the right views
    public function farmer_dashboard(){
        $this->view('Farmer/farmer_dashboard');
    }
       public function farmer_profile(){
        $this->view('Farmer/farmer_profile');
    }

    public function create_event(){
        $this->view('Events/createEvents');
    }

    public function edit_event(){
        $this->view('Events/editEvents');
    }
}