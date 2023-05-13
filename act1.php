<?php
 
abstract class Database
{
    public $conn;
    public $servername ="abstract";
    public $username = "root";
    public $password =""
    public $dbname = "ner"

    public function __construct($conn)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this-> password);
        $create = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        var_dump($$this->conn);
    }
    abstract public function insert() : string;

}
class Employee extends Database
{
    public function dbname() : string;
    {
        return $this->conn;
    }
}
?>