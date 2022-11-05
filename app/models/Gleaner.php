<?php

namespace app\models;

class Gleaner extends \app\core\Model
{
    public function get($id) {
        $SQL = "SELECT * FROM gleaner WHERE gleaner_id = :gleaner_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["gleaner_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Gleaner");
        return $STMT->fetch();
    }
    public function getAll() {
        $SQL = "SELECT * FROM gleaner";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Gleaner");
        return $STMT->fetchAll();
    }
}