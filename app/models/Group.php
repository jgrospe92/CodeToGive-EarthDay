<?php

namespace app\models;

class Group extends \app\core\Model
{
    public function get($id) {
        $SQL = "SELECT * FROM group WHERE group_id = :group_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["group_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Group");
        return $STMT->fetch();
    }
    public function getAll() {
        $SQL = "SELECT * FROM group";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"\app\models\Group");
        return $STMT->fetchAll();
    }
}