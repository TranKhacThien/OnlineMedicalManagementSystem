<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          // self::$instance = new PDO('mysql:host=localhost;dbname=onlinemedicalmanagementsys', 'root', '');
          self::$instance = new PDO('mysql:host=37.59.55.185;dbname=ExLqwDN6iL', 'ExLqwDN6iL', 'u2f77AIWiN');
          
          self::$instance->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}

