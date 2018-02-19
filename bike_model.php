<?php

class bikeAPI{

   private $dbconnection;
   private $tbl_name;



		public function __construct($dbconn,$tableName){
         
         $this->dbconnection = $dbconn;
         $this->tbl_name = $tableName;      

		}

		public function getbikes(){
            
            $query = "SELECT * FROM " .$this->tbl_name; 
            $stmt =  $this->dbconnection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $result; 
		}

       public function getbike($id){

          $query = "SELECT * FROM " . $this->tbl_name . " WHERE id=".$id;
          $stmt = $this->dbconnection->prepare($query);
          $stmt->execute();
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
         
          return $result;

       }

   public function addbike($bike){
      $filepath = "img/" . basename($_FILES["bikeimg"]["name"]);


     $file_tmp = $_FILES["bikeimg"]["tmp_name"];
    
      if (move_uploaded_file($file_tmp, $filepath)) {

            $query = "INSERT INTO " .$this->tbl_name . "(name,model,bikeimg_url,price,cc,engine,topspeed,mileage,no_of_gear,brake,fuelcapacity,groundclearance) VALUES (:bikename,:bikemodel,:bikeimg_url,:bikeprice,:bikecc,:bikeengine,:biketopspeed,:bikemileage,:bikeno_of_gear,:bikebrake,:bikefuelcapacity,:bikegroundclearance)"; 
            $stmt =  $this->dbconnection->prepare($query);
            $stmt->bindParam(":bikename",$bike["name"]);
            $stmt->bindParam(":bikemodel",$bike["model"]);
            $stmt->bindParam(":bikeimg_url",$filepath);

           
            $stmt->bindParam(":bikeprice",$bike["price"]);
            $stmt->bindParam(":bikecc",$bike["cc"]);
            $stmt->bindParam(":bikeengine",$bike["engine"]);
            $stmt->bindParam(":biketopspeed",$bike["topspeed"]);
            $stmt->bindParam(":bikemileage",$bike["mileage"]);
            $stmt->bindParam(":bikeno_of_gear",$bike["no_of_gear"]);
            $stmt->bindParam(":bikebrake",$bike["brake"]);
            $stmt->bindParam(":bikefuelcapacity",$bike["fuelcapacity"]);
            $stmt->bindParam(":bikegroundclearance",$bike["groundclearance"]);
            
            $stmt->execute();
            }
            
      
   }

  public function delete($id){

    
   $query = "DELETE FROM " . $this->tbl_name . " WHERE id = ".$id;
   $stmt = $this->dbconnection->prepare($query);
   $stmt->execute();

  }

  public function editbike($bike){
   echo var_dump($bike["index"]);
    

    $filepath = "img/ " . basename($_FILES["bikeimg"]["name"]);


   $file_tmp = $_FILES["bikeimg"]["tmp_name"];
    
     move_uploaded_file($file_tmp, $filepath);
 
  
      $query = "UPDATE ". $this->tbl_name . " SET name = :bikename,model = :bikemodel,bikeimg_url = :bikeimg_url,price = :bikeprice,cc = :bikecc,engine = :bikeengine,topspeed =:biketopspeed,mileage = :bikemileage,no_of_gear = :bikeno_of_gear,brake = :bikebrake,fuelcapacity =:bikefuelcapacity,groundclearance= :bikegroundclearance  WHERE id = " . $bike["index"];

      $stmt =  $this->dbconnection->prepare($query);
          $stmt->bindParam(":bikename",$bike["name"]);
            $stmt->bindParam(":bikemodel",$bike["model"]);
            $stmt->bindParam(":bikeimg_url",$filepath);
            $stmt->bindParam(":bikeprice",$bike["price"]);
            $stmt->bindParam(":bikecc",$bike["cc"]);
            $stmt->bindParam(":bikeengine",$bike["engine"]);
            $stmt->bindParam(":biketopspeed",$bike["topspeed"]);
            $stmt->bindParam(":bikemileage",$bike["mileage"]);
            $stmt->bindParam(":bikeno_of_gear",$bike["no_of_gear"]);
            $stmt->bindParam(":bikebrake",$bike["brake"]);
            $stmt->bindParam(":bikefuelcapacity",$bike["fuelcapacity"]);
            $stmt->bindParam(":bikegroundclearance",$bike["groundclearance"]);
            
            $stmt->execute();
          
            
  }
 



}

$bikeAPI = new bikeAPI($db->getconnection(),"bike");





?>







