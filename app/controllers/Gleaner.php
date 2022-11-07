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

     public function gleaner_profile_edit(){
        $this->view('Gleaner/gleaner_profile_edit');
    }

    public function createGroup(){
        $this->view('Groups/createGroup');
    }

    public function editGroup(){
        $this->view('Groups/editGroup');
    }
}