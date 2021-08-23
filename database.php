<?php

include_once 'config.php';

 class Database{
 
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

  public function __construct(){
         $this->host = constant('HOST');
         $this->db = constant('DB');
         $this->user = constant('USER');
         $this->password = constant('PASSWORD');
         $this->charset = constant('CHARSET');
   }

   function connect(){
       try{
           $conn = new PDO("mysql:host=$this->host;dbname=$this->db;",$this->user,$this->password);
           return $conn;
       }
       catch(PDOEXCEPTION $e){
            print_r("se ha producido un error: ".$e->getmessage());
            return false;
       }
   }

 }


?>