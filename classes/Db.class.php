<?php

class Db {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "chat";
  private $conn;

  public function getConnection() {
    try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    return $this->conn;
    // echo "connected";
  }
}