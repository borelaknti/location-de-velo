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
        //global $database;
        //$req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        //return $req->execute(array($clientsArray["name"],$clientsArray["addresse"],$clientsArray["phone"],$clientsArray["credit_card"]));
        //die(var_dump($req));

        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        $result = $req->execute(array($clientsArray["name"],$clientsArray["addresse"],$clientsArray["phone"],$clientsArray["credit_card"]));
        if ($result){
            if ($database->lastInsertId() > 0){
                return ['success'=>true, 'id'=>$database->lastInsertId()];
            }
        }
        else{
            return ['success'=>false];
        }

    }

    /**
     * @param $hauteur
     * @param $type
     * @param $prix
     * @return array
     */
    public function createVeloArray($hauteur,$type,$prix): ?array
    {
        $var = 0;
        return ['hauteur' => $hauteur,'type' => $type,'prix' => $prix,'available'=> $var]; 
    }

    /**
     * @param $velosArray
     * @return array
     */
    public function createVelo($velosArray): ?array
    {
        $sql = "INSERT INTO velots(hauteur,type,prix,available) VALUES (?,?,?,?)";
        return $this->createItemVelo($velosArray,$sql); 
    }

    /**
    * @param $velosArray
    * @param $sql
    * @return array
    */
    public function createItemVelo($velosArray,$sql)
    {
       

        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        $result = $req->execute(array($velosArray["hauteur"],$velosArray["type"],$velosArray["prix"],$velosArray["available"]));
        if ($result){
            if ($database->lastInsertId() > 0){
                return ['success'=>true, 'id'=>$database->lastInsertId()];
            }
        }
        else{
            return ['success'=>false];
        }

    }

     /**
     * @param $guest
     * @param $bike
     * @return array
     */
    public function createRentalArray($guest,$bike): ?array
    {
        return ['bike' => $bike,'guest' => $guest]; 
    }
    /**
     * @param $rentalsArray
     * @return array
     */
    public function createRentals($rentalsArray): ?array
    {
        $sql = "INSERT INTO rentals(velo_id,client_id) VALUES (?,?)";
        return $this->createItemRentals($rentalsArray,$sql); 
    }

    /**
    * @param $rentalsArray
    * @param $sql
    * @return array
    */
    public function createItemRentals($rentalsArray,$sql)
    {
       

        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        $result = $req->execute(array($rentalsArray["bike"],$rentalsArray["guest"]));
        if ($result){
            if ($database->lastInsertId() > 0){
                return ['success'=>true, 'id'=>$database->lastInsertId()];
            }
        }
        else{
            return ['success'=>false];
        }

    }

    /**
    * @param $velo
    * @return array
    */
    public function updateVelo($velo)
    {
       
        $sql = "UPDATE velots SET available='1' WHERE velots.id = $velo";
        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        $result = $req->execute();
        if ($result){
            return ['success'=>true];
        }
        else{
            return ['success'=>false];
        }

    }

    /**
    * @param $id
    * @return array
    */
    public function deleteClient($id) : ?array
    {
       
        $sql = " DELETE  FROM clients  WHERE clients.id = $id ";
        //die(var_dump($sql));
        global $database;
        $req = $database->openConnection()->prepare($sql);
        
        $result = $req->execute();
        if ($result){
            return ['success'=>true];
        }
        else{
            return ['success'=>false];
        }

    }

    /**
    * @param $id
    * @return array
    */
    public function deleteRental($id)
    {
       
        $sql = "DELETE  FROM rentals  WHERE rentals.client_id = $id";
        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        $result = $req->execute();
        if ($result){
            return ['success'=>true];
        }
        else{
            return ['success'=>false];
        }

    }

    /**
    * @param $id
    * @return array
    */
    public function deleteRentalVelo($id)
    {
       
        $sql = "DELETE  FROM rentals  WHERE rentals.velo_id = $id";
        global $database;
        $req = $database->openConnection()->prepare($sql);
        //die(var_dump($clientsArray));
        $result = $req->execute();
        if ($result){
            return ['success'=>true];
        }
        else{
            return ['success'=>false];
        }

    }

     /**
    * @param $id
    * @return array
    */
    public function deleteVelo($id) : ?array
    {
       
        $sql = " DELETE  FROM velots  WHERE velots.id = $id ";
        //die(var_dump($sql));
        global $database;
        $req = $database->openConnection()->prepare($sql);
        
        $result = $req->execute();
        if ($result){
            return ['success'=>true];
        }
        else{
            return ['success'=>false];
        }

    }

}