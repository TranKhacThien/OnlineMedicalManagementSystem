<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          // self::$instance = new PDO('mysql:host=localhost;dbname=onlinemedicalmanagementsys', 'root', '');
        	//self::$instance = new PDO('mysql:host=127.0.0.1:3307;dbname=baitaploncsdl', 'root', '');
          self::$instance = new PDO('mysql:host=37.59.55.185;dbname=ExLqwDN6iL', 'ExLqwDN6iL', 'LNmuNXmkg8');
          
          self::$instance->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}


// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="";
// $dbname="classicmodels";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();