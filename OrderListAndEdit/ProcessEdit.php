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
		
		<?php
		$myfile = fopen("Orders.txt", "w") or die("Unable to open file!");
		$orderNumber .= "\n";
		fwrite($myfile, $orderNumber);
		$fname .= "\n";
		fwrite($myfile, $fname);
		$lname .= "\n";
		fwrite($myfile, $lname);
		$email .= "\n";
		fwrite($myfile, $email);
		$streetName .= "\n";
		fwrite($myfile, $streetName);
		$appartment .= "\n";
		fwrite($myfile, $appartment);
		$province .= "\n";
		fwrite($myfile, $province);
		$city .= "\n";
		fwrite($myfile, $city);
		$country .= "\n";
		fwrite($myfile, $country);
		$postal .= "\n";
		fwrite($myfile, $postal);
		fclose($myfile);
		?>
    
  </body>
</html>