<?php
/**
 * Created by PhpStorm.
 * User: Ishmael
 * Date: 7/31/2016
 * Time: 1:49 PM
 */

class pdo_engine {
    public $connection;
    public $lastError;
    private $statement;
    public function __construct($servername, $database, $user, $password){
        $this->connection = new PDO("mysql:host=$servername;dbname=$database", $user, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->statement = "";
    }
    public function prepareStatement($sql){
        $this->statement = $sql;
    }
    public function executeStatement($params, $query = ""){
        $query = empty($query) ? $this->statement : $query;
    }
}