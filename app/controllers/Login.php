<?php

namespace app\controllers;

class Login extends \app\core\Controller
{

    public function gleaner() {
        if(isset($_POST['login'])) {
            $email = $_POST['email_input'];
            $password = $_POST['password_input'];

            $account = new \app\models\account();
            $account->email = $email;
            $account = $account->getByEmail();

            if(password_verify($password,$account->password_hash)){
                $gleaner = new \app\models\gleaner();
                $gleaner = $gleaner->getByAccount($account->account_id);
                $_SESSION['gleaner_id'] = $gleaner->gleaner_id;
                $_SESSION['account_id'] = $account->account_id;

                header('location:/Gleaner/gleaner_feed');
            } else {
                header('location:/Login/gleaner?error=Incorrect password');
            }
        } else $this->view('Login/gleanerLogin');
    }
    public function farmer() {
        if(isset($_POST['login'])) {
            $email = $_POST['email_input'];
            $password = $_POST['password_input'];

            $account = new \app\models\account();
            $account->email = $email;
            $account = $account->getByEmail();

            if(password_verify($password,$account->password_hash)){
                $farmer = new \app\models\gleaner();
                $farmer = $farmer->getByAccount($account->account_id);
                $_SESSION['farmer_id'] = $farmer->farmer_id;
                $_SESSION['account_id'] = $account->account_id;
                header('location:/Farmer/farmer_dashboard');
            } else {
                header('location:/Login/farmer?error=Incorrect password');
            }
        } else $this->view('Login/farmerLogin');
    }
    public function foodbank() {
        if(isset($_POST['login'])) {
            $email = $_POST['email_input'];
            $password = $_POST['password_input'];

            $account = new \app\models\account();
            $account->email = $email;
            $account = $account->getByEmail();

            if(password_verify($password,$account->password_hash)){
                $foodbank = new \app\models\gleaner();
                $foodbank = $foodbank->getByAccount($account->account_id);
                $_SESSION['foodbank_id'] = $foodbank->foodbank_id;
                $_SESSION['account_id'] = $account->account_id;

                header('location:/FoodBank/foodbank_dashboard');
            } else {
                header('location:/Login/foodbank?error=Incorrect password');
            }
        } else $this->view('Login/foodBankLogin');
    }

    
    public function logout() {
        session_destroy();
        header('location:/Main/index');
    }
    
}