<?php

class Database
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "sales_oop";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}