<?php

class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $query;
    private $conn;
    private $stmt;
    private $params;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=m307", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }

    public function execQuery()
    {
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute($this->params);
    }

    public function all()
    {
        return $this->stmt->fetchAll();
    }

    public function one()
    {
        return $this->stmt->fetch();
    }
    
}
