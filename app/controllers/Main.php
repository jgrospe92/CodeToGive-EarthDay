<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $this->view('Main/index');
    }

    public function eventList(){
        $this->view('Main/eventList');
    }

    public function about_us(){
        $this->view('Main/about');
    }

    public function contact_us(){
        $this->view('Main/contact');
      
    }

    // saq's test functions to load pages
    public function gleaner_Profile_edit(){
        $this->view('Gleaner/gleaner_Profile_edit');
    }

    public function farmer_Profile_edit(){ 
        $this->view('Farmer/farmer_Profile_edit');
    }
    public function farmer_Profile(){ 
        $this->view('Farmer/farmer_Profile');
    }
    
    public function foodBank_Profile_edit(){
        $this->view('FoodBank/foodBank_Profile_edit');
    }
    public function foodBank_Profile(){
        $this->view('FoodBank/foodBank_Profile');
    }

    public function farmerLogin(){ 
        $this->view('Login/farmerLogin');
    }
    public function foodBankLogin(){ 
        $this->view('Login/foodBankLogin');
    }
    public function gleanerLogin(){ 
        $this->view('Login/gleanerLogin');
    }

    public function createEvents(){ 
        $this->view('Events/createEvents');
    }

    public function gleanerRegister(){ 
        $this->view('Register/gleanerRegister');
    }
}