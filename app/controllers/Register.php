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

        echo $farmer->account_id;
        echo $farmer->availabilities_start;
        echo $farmer->availabilities_end;
    }
    public function register_gleaner() {}
    public function register_foodbank() {}
}