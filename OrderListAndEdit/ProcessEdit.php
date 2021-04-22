<!DOCTYPE html>

<html lang="en">
	<head>
		<title> Process Edit form </title>
	</head>
	<body>
    <?php
		$orderNumber = $_POST["orderNumber"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$streetName = $_POST["streetName"];
		$appartment = $_POST["appartment"];
		$province = $_POST["province"];
		$city = $_POST["city"];
		$country = $_POST["country"];
		$postal = $_POST["postal"];
	?>
	
    <h4> Customer: </h4>
	
    <?php
		print ("$orderNumber<br/>");
		print ("$fname<br/>");
		print ("$lname<br/>");
		print ("$email<br/>");
		print ("$streetName<br/>");
		print ("$appartment<br/>");
		print ("$province<br/>");
		print ("$city<br/>");
		print ("$country<br/>");
		print ("$postal<br/>");
    ?>
  </body>
</html>