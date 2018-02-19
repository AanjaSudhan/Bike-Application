

<ul>
	
<?php foreach ($bikelist as $index => $bike) { ?>
<?php echo "<li>" ?>
<a class="link" href= "index.php?id=<?php echo $bike["id"]?>"><?php echo $bike["name"];?></a>
<a href= "index.php?deleteid=<?php echo $bike["id"]?>"> &#128465</a>
<a href= "views/addbike.php?editid=<?php echo $bike["id"]?>"> &#9997</a><br>
<?php echo "</li>" ?>

<?php  } ?>


</ul>







<style>

a{

	text-decoration: none;
	text-transform: uppercase;
	margin-left: 10px;
	color:rgb(142, 255, 170);
	

}

.link{
	background:rgb(162, 63, 255);
	color:rgb(2, 239, 112);
	font-style:italic;
	padding: 2px;
	padding-left: 2px;
	border-radius: 5px;

}
.link:hover{
	background:rgb(242, 75, 91);
	color:black;

}

li{
	list-style-type: none;
}
</style>