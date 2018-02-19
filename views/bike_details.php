

<style type="text/css">

 .bike-details{
 	width: 500px;
 	border:2px solid#999;
 	



 }

	h2 {
		color:blue;
		font-size:30px;
		text-decoration: underline;
	}

	

	h4 {
		font-family: "bold" ;
		font-weight: 500; 
		font-size:20px;
		
	}

	img {
		border: 2px;
		border: dotted;
		background:orange;
		color: violet;

	}

	

</style>	

<section class = bike-details>

<ul>

<h2>Bike_details</h2><br>

<img src = "<?php echo $selectedbike['bikeimg_url']; ?>" width ="300"/>

<h2>Company Name</h2>


<h4><?php echo $selectedbike["name"]?></h4>

<h2>Bike Model</h2>
<h4><?php echo $selectedbike["model"]?></h4>

<h2>Bike Price</h2>

<h4><?php echo $selectedbike["price"]?></h4>


<h2>Specification</h2>
<h4><?php echo "BIKE_CC : ", "<B>" .$selectedbike["cc"] ."</B"?></h4>
<h4><?php echo "Engine : ","<B>" .$selectedbike["engine"]."</B"?></h4>
<h4><?php echo "Topspeed : ","<B>" .$selectedbike["topspeed"]."</B"?></h4>
<h4><?php echo "Mileage : ","<B>" .$selectedbike["mileage"]."</B"?></h4>
<h4><?php echo "No_of_gear : ","<B>" .$selectedbike["no_of_gear"]."</B"?></h4>	
<h4><?php echo "Brake : ","<B>" .$selectedbike["brake"]."</B"?></h4>
<h4><?php echo "FuelCapacity : ","<B>" .$selectedbike["fuelcapacity"]."</B"?></h4>
<h4><?php echo "Groundclearance :" ,"<B>" .$selectedbike["groundclearance"]."</B"?></h4><br>
</ul>

</section>


