<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../BackEndStyle.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
		<title>Edit Product List</title>
		<meta name="description" content="This is the edit order list page">
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
		<a href="EditProductList.php"><h3>Edit Product List</h3></a>
	</nav>
		
	<body>
		<!--the order page starts here-->
			<div class = "sidebar">
				<a href="../index.php">Home</a>
				<a href="../ProductListAndEdit/ProductList.php">Product List</a>
				<a href="../User List/userlist.php">User List</a>
				<a href="../OrderListAndEdit/OrderList.php">Order List</a>
			</div>
		<div class="container">
			<!-- order list information container-->			
					
			<div> 
				<table class = "orders">
					<form> 
						<tr>
							<th colspan = 3>Product Information</th>
						</tr>
						<tr>
							<td>Product name</td>
							<td> 
								<input type = "text" name = "name" size = "30" value = "chicken legs"/>
							</td>
						</tr>
						<tr>
							<td>Product quantity </td>
							<td>
								<input type = "number" name = "orderNumber" size = "30" value="1">
							</td>
						</tr>
						

						<tr>
							<td>Product sizes </td>
							<td><input type = "text" name = "size1" size = "30" value = "50g"/><br>
							<input type = "text" name = "size2" size = "30" value = "75g"/><br>
							<input type = "text" name = "size3" size = "30" value = "150g"/></td>
							
							</tr>
							<tr>
							<td>Product types </td>
							<td><input type = "text" name = "type1" size = "30" value = "Traditional"/><br>
							<input type = "text" name = "type2" size = "30" value = "Boneless"/><br>
							<input type = "text" name = "type3" size = "30" value = "Premium boneless"/>
							</td>
							
							</tr>
							<tr>
							<td>Product description</td>
							<td><input type = "text" name = "description" size = "30" value = "Finest chicken legs cut"/></td>
							</tr>
							
							<tr>
							<td>Product price</td>
							<td><input type = "text" name = "price" size = "30" value = "3.99$"/></td>
							</tr>
							<tr><td style = "background-color:black;"><a href="#saveProductPage" class="button">Save product page</a></td> 
					</tr>
				</table>
			</div>
		</div>		
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

	   <p class="copyright">MAVE GROCERIES ?? 2021</p>
	   
	</footer>
</html>