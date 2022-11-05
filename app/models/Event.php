<?php

namespace app\models;

class event extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO event (name,info,urgency,farmer_id) VALUES (:name,:info,:urgency,:farmer_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["name"=>$this->name,"info"=>$this->info,"urgency"=>$this->urgency,"farmer_id"=>$this->farmer_id]);
    }
}