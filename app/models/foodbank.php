<?php

namespace app\models;

class foodbank extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO foodbank (account_id,name,phone,profilePic,info,link,rating,region,municipality,address,city,province,max_distance,availabilities_start,availabilities_end) VALUES (:account_id,:name,:phone,:profilePic,:info,:link,:rating,:region,:municipality,:address,:city,:province,:postal_code,:availabilities_start,:availabilities_end)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["account_id"=>$this->account_id,"name"=>$this->name,"phone"=>$this->phone,"profilePic"=>$this->profilePic,"info"=>$this->info,"link"=>$this->link,"rating"=>$this->rating,"region"=>$this->region,"municipality"=>$this->municipality,"address"=>$this->address,"city"=>$this->city,"province"=>$this->province,"max_distance"=>$this->max_distance,"availabilities_start"=>$this->availabilities_start,"availabilities_end"=>$this->availabilities_end]);
    }
    public function getCapacity($produce_id) {
        $SQL = "SELECT capacity FROM foodbank_capacity WHERE foodbank_id = :foodbank_id AND produce_id = :produce_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["foodbank_id"=>$this->foodbank_id,"produce_id"=>$produce_id]);
        return $STMT->fetchAll();
    }
    public function getAllCapacities() {
        $SQL = "SELECT * FROM foodbank_capacity WHERE foodbank_id = :foodbank_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["foodbank_id"=>$this->foodbank_id]);
        return $STMT->fetchAll();
    }
}