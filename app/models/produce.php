<?php

namespace app\models;

class produce extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO produce (name) VALUES (:name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["name"=>$this->name]);
    }
}