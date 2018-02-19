
<body style="background-image: url('img/images.jpeg');background-repeat:no-repeat;background-size:cover">
<?php
require_once "db.php";
require_once "bike_model.php";
require_once "bike_ctrl.php";



?>

<a  href = "views/addbike.php"><h3>+addbike</h3></a><br>

<hr>

<?php

 if(isset($_POST["addbike"])){
 
    $bikectrl->addbike($_POST);
   }


 if(isset($_GET["deleteid"])){

 	$bikectrl->deletebike($_GET["deleteid"]);

 }  


 if(isset($_POST["editbike"])){

 	$bikectrl->editbike($_POST);

 } ?>




 

	<h2>BIKELIST</h2>
	
	<?php echo $bikectrl->renderbikes();?>
     


<?php

if(isset($_GET["id"])){
   
   $bikectrl->renderselectedbike($_GET["id"]); 


}	
?>

</body>



