<?php

namespace app\models;

class review extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO review (reviewer_id,reviewee_id,body,datetime) VALUES (:reviewer_id,:reviewee_id,:body,:datetime)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["reviewer_id"=>$this->reviewer_id,"reviewee_id"=>$this->reviewee_id,"body"=>$this->body,"datetime"=>$this->datetime]);
    }
}