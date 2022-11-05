<?php

namespace app\models;

class account extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO account (email,password_hash) VALUES (:email,:password_hash)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["email"=>$this->email,"password_hash"=>$this->password_hash]);
    }
}