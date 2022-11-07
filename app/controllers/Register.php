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

    
    public function register_farmer() {
        $_account = $_POST["account"];
        $_farmer = $_POST["farmer"];

        $account = new \app\models\account();
        $account->email = $_account["email"];
        $account->password_hash = password_hash($_account["password"],PASSWORD_DEFAULT);
        $account->insert();

        $account = $account->getByEmail();

        $farmer = new \app\models\farmer();
        $farmer->account_id = $account->account_id;
        $farmer->name = $_farmer["name"];
        $farmer->phone = $_farmer["phone"];
        $farmer->info = $_farmer["info"];
        $farmer->link = $_farmer["link"];
        $farmer->region = $_farmer["region"];
        $farmer->municipality = $_farmer["municipality"];
        $farmer->address = $_farmer["address"];
        $farmer->city = $_farmer["city"];
        $farmer->province = $_farmer["province"];
        $farmer->postal_code = $_farmer["postal_code"];
        $farmer->availabilities_start = $_farmer["availabilities_start"];
        $farmer->availabilities_end = $_farmer["availabilities_end"];
        $farmer->insert();
    }
    public function register_gleaner() {
        $_account = $_POST["account"];
        $_gleaner = $_POST["gleaner"];

        $account = new \app\models\account();
        $account->email = $_account["email"];
        $account->password_hash = password_hash($_account["password"],PASSWORD_DEFAULT);
        $account->insert();

        $account = $account->getByEmail();

        $gleaner = new \app\models\gleaner();
        $gleaner->account_id = $account->account_id;
        $gleaner->name = $_gleaner["name"];
        $gleaner->username = $_gleaner["username"];
        $gleaner->bio = $_gleaner["bio"];
        $gleaner->insert();
    }
    public function register_foodbank() {
        $_account = $_POST["account"];
        $_foodbank = $_POST["foodbank"];

        $account = new \app\models\account();
        $account->email = $_account["email"];
        $account->password_hash = password_hash($_account["password"],PASSWORD_DEFAULT);
        $account->insert();

        $account = $account->getByEmail();

        $foodbank = new \app\models\foodbank();
        $foodbank->account_id = $account->account_id;
        $foodbank->name = $_foodbank["name"];
        $foodbank->phone = $_foodbank["phone"];
        $foodbank->info = $_foodbank["info"];
        $foodbank->link = $_foodbank["link"];
        $foodbank->region = $_foodbank["region"];
        $foodbank->municipality = $_foodbank["municipality"];
        $foodbank->address = $_foodbank["address"];
        $foodbank->city = $_foodbank["city"];
        $foodbank->province = $_foodbank["province"];
        $foodbank->max_distance = $_foodbank["max_distance"];
        $foodbank->availabilities_start = $_foodbank["availability_start"];
        $foodbank->availabilities_end = $_foodbank["availability_end"];
        $foodbank->insert();
    }
}