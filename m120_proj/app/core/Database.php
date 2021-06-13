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
            $this->conn = new PDO("mysql:host=$this->servername", $this->username, $this->password);
            $this->conn = new PDO("mysql:host=$this->servername;dbname=m120", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function createDatabase(){
        $sql = "CREATE DATABASE IF NOT EXISTS m120";
        $this->conn -> exec($sql);
    }

    public function createTable(){
        $use = "USE m120;";
        $this->conn->exec($use);
        $sql = "CREATE TABLE IF NOT EXISTS ortschaft(
            ID INTEGER NOT NULL AUTO_INCREMENT,
            Ort VARCHAR(255),
            PRIMARY KEY (ID));";
        $this->conn->exec($sql); 
    }

    public function createTableActive(){
        $use = "USE m120;";
        $this->conn->exec($use);
        $sql = "CREATE TABLE IF NOT EXISTS Eingaben(
            ID INTEGER NOT NULL AUTO_INCREMENT,
            vonwo VARCHAR(255),
            wohin VARCHAR(255),
            klasse INTEGER(2),
            weg VARCHAR(255),
            kinder INTEGER(32),
            erwachsene INTEGER(32),
            PRIMARY KEY (ID));";
        $this->conn->exec($sql); 
    }

    public function createTableActive(){
        $use = "USE m120;";
        $this->conn->exec($use);
        $sql = "CREATE TABLE IF NOT EXISTS Eingaben(
            ID INTEGER NOT NULL AUTO_INCREMENT,
            vonwo VARCHAR(255),
            wohin VARCHAR(255),
            klasse INTEGER(),
            weg VARCHAR(255),
            anzahlbilletekinder INTEGER(),
            anzahlbilleteerwachsene INTEGER(),
            PRIMARY KEY (ID));";
        $this->conn->exec($sql); 
    }

    public function insertValues(){
        $use = "USE m120;";
        $this->conn->exec($use);
        $sql = "INSERT INTO ortschaft (Ort) VALUES ('test');";
        $this->conn->exec($sql);
    }

    public function insertValuesActive(){
        $use = "USE m120;";
        $this->conn->exec($use);
<<<<<<< HEAD
        $sql = "INSERT INTO Eingaben (vonwo, wohin, klasse, weg, kinder, erwachsene) VALUES ('vonwo', 'wohin', 1, 'weg', 2, 3);";
=======
        $sql = "INSERT INTO Eingaben (vonwo, wohin, klasse, weg, anzahlbilletekinder, anzahlbilleteerwachsene) VALUES ('vonwo', 'wohin', 1, 'weg', 2, 3);";
>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc
        $this->conn->exec($sql);
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }

    public function execQuery($query, $params = null)
    {
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
        $this->stmt->execute($params);
    }

    public function all()
    {
        $query = "SELECT * FROM ortschaft ORDER BY ID DESC";
        $this->execQuery($query);
        return $this->stmt->fetchAll();
    }

    public function allActive()
    {
<<<<<<< HEAD
        $query = "SELECT * FROM eingaben ORDER BY ID DESC";
=======
        $query = "SELECT * FROM Eingaben ORDER BY ID DESC";
>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc
        $this->execQuery($query);
        return $this->stmt->fetchAll();
    }

    public function one()
    {
        return $this->stmt->fetch();
    }

    public function updatevowo($vonwo, $wohin){
        $use = "USE m120;";
        $this->conn->exec($use);
            $sql = "UPDATE Eingaben SET vonwo = '$vonwo', wohin= '$wohin' WHERE ID = 1;"; 
        $this->conn->exec($sql);
    }

    public function updateklasse($klasse){
        $use = "USE m120;";
        $this->conn->exec($use);
            $sql = "UPDATE Eingaben SET klasse = '$klasse' WHERE ID = 1;"; 
        $this->conn->exec($sql);
    }

    public function updatebillete($kinder, $erwachsene){
        $use = "USE m120;";
        $this->conn->exec($use);
            $sql = "UPDATE Eingaben SET kinder = '$kinder', erwachsene= '$erwachsene' WHERE ID = 1;"; 
        $this->conn->exec($sql);
    }

    public function updateweg($weg) {
        $use = "USE m120;";
        $this->conn->exec($use);
            $sql = "UPDATE Eingaben SET weg = '$weg' WHERE ID = 1;"; 
        $this->conn->exec($sql);
    }

    
    
}
