<?php

$servername = "sql308.epizy.com";
$username = "epiz_28361315";
$email = "";
$password = "j7UShEwhNjIPSXA";
$db = "epiz_28361315_data";
	 $con = mysqli_connect($servername, $username, $password,$db); 
	 
	 $select="DELETE from login where id='".$_GET['del_id']."'"; 
	 $query= mysqli_query($con,$select) or die($select); 
	 header("Location: userlist.php");
?>