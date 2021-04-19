<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../BackEndStyle.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
		<script src = "OrderList.js"> </script>
		<title>Order List</title>
		<meta name="description" content="This is the order list page">
	</head>

	<header class="header">
		<a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" width="65px" ></a>
		<a href="ProductListAndEdit/EditProductList.php" class="logo"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" ></a>
		<a href="../Shopping-Cart/shoppingcart.php"> <button class="cart"> <img src="../img/shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
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
		<a href="../index.php"><h3>Order List</h3></a>
	</nav>
		
	<body>
		<!-- Start of the order list page-->
		<div class = "sidebar">
			<a href="../index.php">Home</a>
			<a href="../ProductListAndEdit/ProductList.php">Product List</a>
			<a href="../User List/userlist.php">User List</a>
		</div>
			
		<div class="container">
			<!-- order list container-->					
			<div> 
				<table class = "orders" id = "tabl">
					<tr >
						<th colspan = 3>Orders</th>
					</tr>
					<tr>
						<th>Order Number</th>
						<th>Contact Information</th>
						<th>Delivery Address</th>
					</tr>
					<tr  id = "samplerow">
						<td></td>
						<td></td>
						<td> </td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td style = "background-color:white; max-width:1px;"><a input type = "button" href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);" href="#delete" class="button";>Delete</a></td>
					</tr>
         
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a>
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
				
					<tr>
						<td></td>
						<td> </td>
						<td></td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
				
				</table>

			</div>

		</div>		

 <a onclick = "toAdd()" href="#addProductPage" class="button" style = "left:1050px; bottom: 150px;">Add</a>
	</body>

	<footer>
	   <div class="text-ma">
		  <h4>MAVE: SOEN-287 project </h4>
			  <a href="#team"> check out our team members</a>

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