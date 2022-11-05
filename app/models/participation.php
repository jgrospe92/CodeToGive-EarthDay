<?php

namespace app\models;

class participation extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO participation (event_id,groups_id,foodbank_id) VALUES (:event_id,:groups_id,:foodbank_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["groups_id"=>$this->groups_id,"gleaner_id"=>$this->gleaner_id]);
    }
    public function getAllByEvent($id) {
        $SQL = "SELECT * FROM participation WHERE event_id = :event_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["event_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\participation');
        return $STMT->fetchAll();
    }
    public function getAllByGroup($id) {
        $SQL = "SELECT * FROM participation WHERE groups_id = :groups_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["groups_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\participation');
        return $STMT->fetchAll();
    }
    public function getAllByFoodbank($id) {
        $SQL = "SELECT * FROM participation WHERE foodbank_id = :foodbank_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["foodbank_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\participation');
        return $STMT->fetchAll();
    }
}