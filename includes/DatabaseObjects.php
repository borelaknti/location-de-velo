<?php

include_once realpath(dirname(__FILE__)).'/MySQLDatabase.php';

class DatabaseObjects{

    //common database methods
    /**
     * @return array|null
     */
    public static function findAll(): ?array
    {
        return static::findBySql("SELECT * FROM ".static::$tableName." ");
    }


    //common database methods
    /**
     * @return array|null
     */
    public static function findFacture(): ?array
    {
        return static::findBySql("SELECT * FROM ".static::$tableNames." WHERE rentals.velo_id = velots.id AND rentals.client_id = clients.id ORDER BY rentals.id DESC LIMIT 1 ");
    }
   

    /**
     * @param string $sql
     * @return array|null
     */
    public static function findBySql(string $sql = ""): ?array
    {
        global $database;
        $resultSet = $database->openConnection()->prepare($sql);
        $resultSet->execute();
        $resultSet->setFetchMode(PDO::FETCH_OBJ);
        $results = null;

        while ($row = $resultSet->fetchAll()){
            $results = $row;
            //die(var_dump($row));
        }

        return $results;
    }

    /**
     * @param $name
     * @param $adress
     * @param $phone
     * @param $cart
     * @return array
     */
    public function createClientArray($name,$adress,$phone,$cart): ?array
    {
        return ['name' => $name,'addresse' => $adress,'phone' => $phone,'credit_card' => $cart]; 
    }

    /**
     * @param $clientsArray
     * @return array
     */
    public function createClient($clientsArray): ?array
    {
        $sql = "INSERT INTO clients(name,addresse,phone,credit_card) VALUES (?,?,?,?)";
        return $this->createItem($clientsArray,$sql); 
    }

    /**
    * @param $clientsArray
    * @param $sql
    * @return array
    */
    public function createItem($clientsArray,$sql)
    {
        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        return $req->execute(array($clientsArray["name"],$clientsArray["addresse"],$clientsArray["phone"],$clientsArray["credit_card"]));
        //die(var_dump($req));

    }



}