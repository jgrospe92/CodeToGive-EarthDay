<?php

namespace app\models;

class Foodbank extends \app\core\Model
{
    public function get($id) {
        $SQL = "SELECT * FROM foodbank WHERE foodbank_id = :foodbank_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["foodbank_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Foodbank");
        return $STMT->fetch();
    }
    public function getAll() {
        $SQL = "SELECT * FROM foodbank";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Foodbank");
        return $STMT->fetchAll();
    }
}