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
		$province = $_POST["province"];
		$city = $_POST["city"];
		$country = $_POST["country"];
		$postal = $_POST["postal"];
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