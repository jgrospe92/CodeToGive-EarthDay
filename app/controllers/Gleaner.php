<?php
namespace app\controllers;

class Gleaner extends \app\core\Controller {
    
    // routes the right views
    public function gleaner_feed(){
        $this->view('Gleaner/gleaner_feed');
    }

     public function gleaner_profile(){
        $this->view('Gleaner/gleaner_profile');
    }
}