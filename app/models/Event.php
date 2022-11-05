<?php

namespace app\models;

class Event extends \app\core\Model
{
    public function get($id) {
        $SQL = "SELECT * FROM event WHERE event_id = :event_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["event_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Event");
        return $STMT->fetch();
    }
    public function getAll() {
        $SQL = "SELECT * FROM event";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Event");
        return $STMT->fetchAll();
    }
}