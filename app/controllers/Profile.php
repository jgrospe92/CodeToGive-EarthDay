<?php
namespace app\controllers;

class Profile extends \app\core\Controller {
   
    public function gleaner_profile(){
        $this->view('Gleaner/gleaner_profile');
    }

    public function farmer_profile(){
        $this->view('Farmer/farmer_profile');
    }

    public function foodbank_profile(){
        $this->view('FoodBank/foodBank_Profile');
    }


}