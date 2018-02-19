
<link href="../theme.css" rel="stylesheet">

<?php 

require_once "../db.php";
require_once "../bike_model.php";

$editbike=["name"=>"","model"=>"","bikeimg"=>"","price"=>"","cc"=>"","engine"=>"","topspeed"=>"","mileage"=>"","no_of_gear"=>"","brake"=>"","fuelcapacity"=>"","groundclearance"=> ""];

if(isset($_GET["editid"])){
	$id = $_GET["editid"];

	$editbike = $bikeAPI->getbike($id);

}



?>
<?php if (isset($_GET["editid"])) {?>
   
    <h1 style="color:#2275f9;">Edit Bike</h1>

 <?php }else{ ?>

  	<h1 style="color:#2275f9;">Add Bike</h1>


 <?php } ?> 


<body>

<form action = "../index.php" method="post" enctype="multipart/form-data">

<?php if(isset($_GET["editid"])) { ?>

<input type="hidden" name ="index" value ="<?php echo $_GET["editid"]; ?>">
<?php } ?>
	

Bikename : <br><input type ="text" name="name" value ="<?php echo $editbike["name"];?>"><br>
Bikemodel: <br><input type ="text" name="model" value ="<?php echo $editbike["model"];?>"><br>
Img url : <br><input type ="file" name="bikeimg" value ="<?php echo $editbike["bikeimg"];?>"><br>
Price : <br><input type ="text" name="price" value ="<?php echo $editbike["price"];?>"><br>
BIKE_CC: <br><input type ="text" name="cc" value ="<?php echo $editbike["cc"];?>"><br>
Engine :<br><input type ="text" name="engine" value ="<?php echo $editbike["engine"];?>"><br>
Topspeed :<br><input type ="text" name="topspeed"value ="<?php echo $editbike["topspeed"];?>"><br>
Mileage : <br><input type ="text" name="mileage" value ="<?php echo $editbike["mileage"];?>"><br>
No_of_gear :<br><input type ="text" name="no_of_gear" value ="<?php echo $editbike["no_of_gear"];?>"><br>
Brake : <br><input type ="text" name="brake" value ="<?php echo $editbike["brake"];?>"><br>
FuelCapacity : <br><input type ="text" name="fuelcapacity" value ="<?php echo $editbike["fuelcapacity"];?>"><br>
Groundclearance : <br><input type ="text" name= "groundclearance" value ="<?php echo $editbike["groundclearance"];?>"><br>
<br>
<div class="button">
<?php if (isset($_GET["editid"])){?>

<button  type ="submit" name="editbike" >Save bike</button>

<?php } else { ?>
<button  type ="submit" name="addbike" >Add bike</button>

<?php } ?>
</div>

</form>
</body>


