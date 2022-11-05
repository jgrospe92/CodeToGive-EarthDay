<?php

namespace app\models;

class Farmer extends \app\core\Model
{
    public function get($id) {
        $SQL = "SELECT * FROM farmer WHERE farmer_id = :farmer_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["farmer_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Farmer");
        return $STMT->fetch();
    }
    public function getAll() {
        $SQL = "SELECT * FROM farmer";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Farmer");
        return $STMT->fetchAll();
    }
}