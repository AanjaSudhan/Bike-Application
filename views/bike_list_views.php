
<link href="../theme.css" rel="stylesheet">

<ul>
	
<?php foreach ($bikelist as $index => $bike) { ?>
<?php echo "<li>" ?>
<a  href= "index.php?id=<?php echo $bike["id"]?>"><?php echo $bike["name"];?></a>
<a href= "index.php?deleteid=<?php echo $bike["id"]?>"> &#128465</a>
<a href= "views/addbike.php?editid=<?php echo $bike["id"]?>"> &#9997</a><br>
<?php echo "</li>" ?>

<?php  } ?>


</ul>