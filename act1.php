<?php
 
abstract class Database
{
    public $conn;
    public $servername ="abstract";
    public $username = "root";
    public $password =""
    public $dbname = "ner";

    public function __construct($conn)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this-> password);
        $create = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        var_dump($this->conn);
    }
    abstract public function insert() : string;
}
abstract class Model extends Database
{
    abstract class Model
    {
        public $name;
        public function __construct($name){
            $this->$name = $name;
        }
    }
    abstract public function intro() : string;
}
   =

?>