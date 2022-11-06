<?php

namespace app\models;

class farmer extends \app\core\Model
{
    public function insert() {
        $SQL = "INSERT INTO farmer (account_id,name,phone,profilePic,info,link,rating,region,municipality,address,city,province,postal_code,availabilities_start,availabilities_end) VALUES (:account_id,:name,:phone,:profilePic,:info,:link,:rating,:region,:municipality,:address,:city,:province,:postal_code,:availabilities_start,:availabilities_end)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["account_id"=>$this->account_id,"name"=>$this->name,"phone"=>$this->phone,"profilePic"=>$this->profilePic,"info"=>$this->info,"link"=>$this->link,"rating"=>$this->rating,"region"=>$this->region,"municipality"=>$this->municipality,"address"=>$this->address,"city"=>$this->city,"province"=>$this->province,"postal_code"=>$this->postal_code,"availabilities_start"=>$this->availabilities_start,"availabilities_end"=>$this->availabilities_end]);
    }
    public function getCapacity($produce_id) {
        $SQL = "SELECT capacity FROM farmer_capacity WHERE farmer_id = :farmer_id AND produce_id = :produce_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["farmer_id"=>$this->farmer_id,"produce_id"=>$produce_id]);
        return $STMT->fetchAll();
    }
    public function getAllCapacities() {
        $SQL = "SELECT * FROM farmer_capacity WHERE farmer_id = :farmer_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["farmer_id"=>$this->farmer_id]);
        return $STMT->fetchAll();
    }
}