<?php

namespace app\models;

class membership extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO membership (groups_id,gleaner_id) VALUES (:groups_id,:gleaner_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["groups_id"=>$this->groups_id,"gleaner_id"=>$this->gleaner_id]);
    }
    public function get($id) {}
    public function getAllByGroup($id) {
        $SQL = "SELECT * FROM membership WHERE groups_id = :groups_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["groups_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\membership');
        return $STMT->fetchAll();
    }
    public function getAllByGleaner($id) {
        $SQL = "SELECT * FROM membership WHERE gleaner_id = :gleaner_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["gleaner_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\membership');
        return $STMT->fetchAll();
    }
    public function getMembership($groups_id,$gleaner_id) {
        $SQL = "SELECT * FROM membership WHERE groups_id = :groups_id AND gleaner_id = :gleaner_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["groups_id"=>$groups_id,"gleaner_id"=>$gleaner_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\membership');
        return $STMT->fetch();
    }
}