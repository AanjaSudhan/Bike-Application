<?php

class bikeApp {

     private $bikeAPI;


     public function __construct($bkeAPI){

     	$this->bikeAPI = $bkeAPI;

     }
      public function renderbikes(){
     	$bikelist = $this->bikeAPI->getbikes();
      
     	require_once "views/bike_list_views.php";
     	
       
      }

      public function renderselectedbike($id){
         $selectedbike = $this->bikeAPI->getbike($id);
         
        require_once "views/bike_details.php";  

      }
      public function addbike($bike){
          $this->bikeAPI->addbike($bike);

      }
      public function deletebike($id){
         $this->bikeAPI->delete($id);
       }

      public function editbike($bike){
         $this->bikeAPI->editbike($bike);

      } 


}


$bikectrl = new bikeApp($bikeAPI);


?>