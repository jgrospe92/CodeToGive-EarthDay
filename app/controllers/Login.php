<?php

namespace app\controllers;

class Login extends \app\core\Controller
{
    public function gleaner() {
        $this->view('Login/gleanerLogin');
    }
    public function farmer() {
        $this->view('Login/farmerLogin');
    }
    public function foodbank() {
        $this->view('Login/foodbankLogin');
    }

    
}