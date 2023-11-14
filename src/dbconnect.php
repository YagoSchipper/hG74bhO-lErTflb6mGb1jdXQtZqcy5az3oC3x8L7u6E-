<?php
class database{
    public $servername = 'localhost';
    public $username = "root";
    public $password = "";

    public function connect() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=nulmetingPHP", $this->username, $this->password);
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e){
            echo "connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}
?>