<?php

class Database{


  private $host;
  private $db;
  private $uname;
  private $pword;

  private $connection;

   public function __construct($hostName,$dbName,$userName,$password){

  	$this->host=$hostName;
  	$this->db=$dbName;
  	$this->uname=$userName;
  	$this->pword=$password;

   }
  	public function getconnection(){

  		 $this->connection = null;

        try{
             $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->uname,$this->pword); 
             $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $error){
        	die("Filed to connect mysql database". $error->getmessage());
         } 

         return $this->connection;


  	} 

}

$db = new Database("localhost","bike_explorer","root","root");







?>







