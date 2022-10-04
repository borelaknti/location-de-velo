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

}