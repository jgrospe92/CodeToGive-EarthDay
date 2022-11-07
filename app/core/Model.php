<?php
namespace app\core;

class Model {
    protected static $_connection;

    public function __construct() {
        $server = 'localhost';
        $dbname = 'earthday';
        $username = 'root';
        $password = '';

        try {
            self::$_connection = new \PDO("mysql:host=$server;dbname=$dbname",$username,$password);
            self::$_connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        } catch(\Exception $e) {
            echo "Failed connecting to the database";
            exit(0);
        }
    }
    protected function isValid() {
        $reflection = new \ReflectionObject($this);

        $classProperties = $reflection->getProperties();

        foreach($classProperties as $property) {
            $propertyAttributes = $property->getAttributes();

            foreach($propertyAttributes as $attribute) {
                $tmp = $attribute->newInstance();

                if(!$tmp->isValidData($property->getValue($this))) {
                    return false;
                }
            }
        }
        return true;
    }
    public function __call($method, $arguments) {
		if($this->isValid())
			call_user_func_array([$this,$method],$arguments);
	}
    public function get($id) {
        $classCalled = basename(get_called_class());
        $SQL = "SELECT * FROM $classCalled WHERE " . $classCalled . "_id = :object_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["object_id"=>$id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\\'.$classCalled);
        return $STMT->fetch();
    }
    public function getAll() {
        $classCalled = basename(get_called_class());
        $SQL = "SELECT * FROM $classCalled";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\\'.$classCalled);
        return $STMT->fetchAll();
    }
}