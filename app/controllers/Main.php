<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $this->view('Main/index');
    }



    public function gleaner_Profile(){
        $this->view('Gleaner/gleaner_Profile');
    }

    public function farmer_Profile(){ 
        $this->view('Farmer/farmer_Profile');
    }

    public function gleanerLogin(){ 
        $this->view('Login/gleanerLogin');
    }

    public function foodBank_Profile(){ 
        $this->view('FoodBank/foodBank_Profile');
    }

}