<?php
namespace app\filters;

#[\Attribute]
class Login extends \app\core\AccessFilter{
    public function execute(){
        if(!isset($_SESSION['account_id'])){
            header('location:/Login/gleanerLogin?error=You must be logged in to access this page');
            return true;
        }
        return false;
    }

}

