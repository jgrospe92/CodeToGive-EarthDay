<?php

namespace app\models;

class groups_review extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO groups_review (account_id,body,datetime) VALUES (:account_id,:body,:datetime)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["account_id"=>$this->account_id,"body"=>$this->body,"datetime"=>$this->datetime]);
    }
}