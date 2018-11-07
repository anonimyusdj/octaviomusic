<?php
require_once "model/config.php";

  class Database{

    private $host="35.231.175.105";
    private $dbname="octaviomusic";
    private $charset="utf8";
    private $user="root";
    private $pass="2016.Deisy";


    public static function conectar(){
      $pdo=new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION,PDO::ERRMODE_WARNING);
      return $pdo;
    }
  }
?>
