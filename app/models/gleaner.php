<?php

namespace app\models;

class gleaner extends \app\core\Model
{
    private $rating = null;
    private $profilePic = null;

    public function insert() {
        $SQL = "INSERT INTO gleaner (account_id,username,name,profilePic,bio,rating) VALUES (:account_id,:username,:name,:profilePic,:bio,:rating)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["account_id"=>$this->account_id,"username"=>$this->username,"name"=>$this->name,"profilePic"=>$this->profilePic,"bio"=>$this->bio,"rating"=>$this->rating]);
    }
    public function getByAccount($id){
        $SQL = "SELECT * FROM gleaner WHERE account_id = :account_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["account_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\gleaner');
        return $STMT->fetch();
    }
}