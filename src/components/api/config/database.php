<?php
class Database {

    // your php admin bd login
    private $host = "localhost";
    private $db_name = "user2617_shopBD";
    private $username = "user2617_admin";
    private $password = "Kalastajankuja1";
    public $conn;

    // got connection to DB
    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>