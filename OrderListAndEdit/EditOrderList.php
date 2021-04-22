<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="BackEndStyle.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
		<title>Edit Order List</title>
		<meta name="description" content="This is the edit order list page">
	</head>

	<header class="header">
	   <a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" width="65px" ></a>
	   <a href="ProductListAndEdit/EditProductList.php" class="logo"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" ></a>
	   <a href="../Shopping-Cart/shoppingcart.php"> <button class="cart"> <img src="../img/shopping-cart.png" alt="shopping-cart" width="50%"> </button> </a>
	   <a href="../signup-and-login/Login.php"> <button class="btn" id = "log"> Login  </button> </a> 
	</header>
	<?php
		if (!$_SESSION['user']=="admin"){
	echo "<script>";
	   
	   echo "document.getElementById('backend').style.display = 'none'";
	   echo "</script>";
 }
		if (isset($_SESSION['user'])){
		   echo "<script>";
		 
		   echo "document.getElementById('log').innerHTML = 'logout'";
		   echo "</script>";
		   
		}
		if ($_SESSION['user']=="admin"){
		   echo "<script>";
			  
			  echo "document.getElementById('backend').style.display = 'inline'";
			  echo "</script>";
		}
		?>	
	<nav class="navbar-2">
		<a href="../index.php"  style="color:#460707b4;"><h3><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="OrderList.php" style = "color:black;"> Order List</h3></a>
	</nav>
		
	<body>
		<!--the order page starts here-->
			<div class = "sidebar">
				<a href="../index.php">Home</a>
				<a href="../ProductListAndEdit/ProductList.php">Product List</a>
				<a href="../User List/userlist.php">User List</a>
				<a href="OrderList.php">Order List</a>
			</div>
		<div class="container">
			<!-- order list information container-->			
					
			<div> 
				<table class = "orders">
					<form action = "ProcessEdit.php" method = "post"> 
						<tr>
							<th colspan = 3>Order Information</th>
						</tr>
						<tr>
							<td>Order Number</td>
							<td>
								<input type = "number" name = "orderNumber" size = "30" value="123456789">
							</td>
						</tr>
					<!-- Order Address -->
						<tr>
							<th colspan = 2>Shipping Information</th>
						</tr>
						
						<!-- Name -->
						<tr>
							<td>Name</td>
							<td> 
								<label for="fname">First name:</label>
								<input type="text" id="fname" name="fname" value="John"><br><br>
								<label for="lname">Last name:</label>
								<input type="text" id="lname" name="lname" value="Doe"><br>
							</td>
							
						</tr>
						<tr>
							<td>Email</td>
							<td> 
								<label for="emial">Email:</label>
								<input type="text" id="emial" name="email" value="JohnDoe@mail.com"><br>
							</td>
							
						</tr>
						<tr>
							<td>Address</td>
							<td> 
								<label for="streetName">Street Address:</label>
								<input type="text" id="streetName" name="streetName" value="123 4th Street East"><br><br>
								<label for="appartment">Appartment, Suite, etc.</label>
								<input type="text" id="appartment" name="appartment" value="1"><br><br>
								<label for="province">Province/State:</label>
								<input type="text" id="province" name="province" value="Quebec"><br><br>
								<label for="city">City:</label>
								<input type="text" id="city" name="city" value="Montreal"><br><br>
								<label for="country">Country:</label>
								<input type="text" id="country" name="country" value="Canada"><br><br>
								<label for="postal">Postal/Zip Code:</label>
								<input type="text" id="postal" name="postal" value="A1B 2C3"><br><br>
								
								<input class="button-save" type="submit" value="Save">
						
							</td>
						</tr>
					</form>	
				</table>
			</div>
		</div>		
	</body>

	<footer>
	   <div class="text-ma">
		  <h4>MAVE: SOEN-287 project </h4>
			  <a href="#team"> chech out our team members</a>
	   </div>
	   
	   <br><br><br>

	   <div class="social-menu">
		  <ul>
		  <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a></li>
		  <li><a href="#instgram"><i class="fab fa-instagram"></i></a></li>
		  <li><a href="#twitter"><i class="fab fa-twitter"></i></a></li>
		  <li><a href="#reddit"><i class="fab fa-reddit-alien"></i></a></li>
		  </ul>
	   </div>

	   <p class="copyright">MAVE GROCERIES © 2021</p>
	   
	</footer>
</html>