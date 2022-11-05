<?php

namespace app\models;

class groups extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO groups (name,info,link,rating,status,gleaner_id,region,municipality,province,maxDistance,availability_start,availability_end) VALUES (:name,:info,:link,:rating,:status,:gleaner_id,:region,:municipality,:province,:maxDistance,:availability_start,:availability_end)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["name"=>$this->name,"info"=>$this->info,"link"=>$this->link,"rating"=>$this->rating,"status"=>$this->status,"gleaner_id"=>$this->gleaner_id,"region"=>$this->region,"municipality"=>$this->municipality,"province"=>$this->province,"maxDistance"=>$this->maxDistance,"availability_start"=>$this->availability_start,"availability_end"=>$this->availability_end]);
    }
}