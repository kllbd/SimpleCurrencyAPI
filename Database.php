<?php
require_once('confidentia-info.php');
class Database{
  
  private $host = "localhost";
  private $db_name = $dbName;
  private $username = $dbUser;
  private $password = $dbPass;
  

  // get the database connection
  public function getConnection(){

      $this->conn = null;

      try{
          $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
          $this->conn->exec("set names utf8");
      }catch(PDOException $exception){
          //log error details here
      }

      return $this->conn;
  }
}
?>