<?php
namespace app\controllers;

class Gleaner extends \app\core\Controller {
    
    // routes the right views
    public function gleaner_feed(){
        $gleaner = new \app\models\gleaner();
        $gleaner = $gleaner->get($_SESSION['gleaner_id']);
        $events = new \app\models\event();
        $events = $events->getAll();
        $events_farms = [];
        $farm = new \app\models\farmer();

        foreach($events as $event) {
            $farm = $farm->get($event->farmer_id);
            $events_farms[] = ["farm" => $farm, "event" => $event];
        }
        $this->view('Gleaner/gleaner_feed',["gleaner"=>$gleaner,"events"=>$events_farms]);
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

    public function gleaner_leaderboard(){
        $this->view('Gleaner/gleaner_leaderboard');
    }
}