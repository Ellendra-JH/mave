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
		<script src = "ProductListJS.js"> </script>
		<title>Product List</title>
		<meta name="description" content="This is the product list page">
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
		<a href="../index.php"><h3>Product List</h3></a>
	</nav>
		
	<body>
		<!-- Start of the order list page-->
		<div class = "sidebar">
			<a href="../index.php">Home</a>
			<a href="../OrderListAndEdit/OrderList.php">Order List</a>
			<a href="../User List/userlist.php">User List</a>
		</div>
			
		<div class="container">
			<!-- order list container-->					
			<div> 
				<table class = "orders" id = "tabl">
					<tr >
						<th colspan = 3>Products</th>
					</tr>
					<tr>
						<th>Product and aisle name</th>
						<th>Quantity available</th>
						<th>Size and types</th>
					</tr>
					<tr  id = "samplerow">
						<td>1. Meat => Cold cuts</td>
						<td> 6 in stock</td>
						<td> 
							Sizes: 10 slices/50 slices/150 slices <br> Types: Ham/Salami/Smoked turkey 
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
					<tr>
						<td>2. Meat => Chicken legs</td>
						<td> 12 in stock</td>
						<td> 
							Sizes: 50g/75g/100g <br> Types: Traditional/Boneless/Premium boneless 
						</td>
						<td style = "background-color:white; max-width:1px;"><a input type = "button" href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);" href="#delete" class="button";>Delete</a></td>
					</tr>
         
					<tr>
						<td>3. Meat => Raw beef</td>
						<td> 8 in stock</td>
						<td> 
							Sizes: 50g/100g/150g <br> Types: Traditional/Premium/Premium seasoned
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a>
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
					<tr>
						<td>4. Vegetables => Broccoli</td>
						<td> 30 in stock</td>
						<td> 
							Sizes: 50g/100g/150g <br> Types: Whole/Chopped
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a> </td>
					</tr>
					<tr>
						<td>5. Vegetables => Carrots</td>
						<td> 25 in stock</td>
						<td> 
							Sizes: Small/Medium/Large <br> Types: Whole/Baby/Shredded
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button"; id = "del">Delete</a></td>
					</tr>
					<tr>
						<td>6. Vegetables => Celery</td>
						<td> 27 in stock</td>
						<td> 
							Sizes: 25g/50g/100g <br> Types: Whole/Celery sticks
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a>
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
					<tr>
						<td>7. Fruits => Apple</td>
						<td> 53 in stock</td>
						<td> 
							 <br> Types: Honeycrisp/Grannysmith/Golden delicious
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
					<tr>
						<td>8. Fruits => Banana</td>
						<td> 32 in stock</td>
						<td> 
							- <br> -
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
					<tr>
						<td>9. Fruits => Strawberries</td>
						<td> 23 in stock</td>
						<td> 
							- <br>  -
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a></td>
					</tr>
						<td>10. Cleaning supplies => Fabreeze</td>
						<td> 25 in stock</td>
						<td> 
							- <br> -
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
					<tr></td>
					</tr>
					<tr>
						<td>11. Cleaning supplies => Bounty paper towels</td>
						<td> 30 in stock</td>
						<td> 
							- <br> -
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a>
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
					<tr></td>
					</tr>
					<tr>
						<td>12. Cleaning supplies => Clorox wipes</td>
						<td> 50 in stock</td>
						<td> 
							- <br> Types: -
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a>
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
					<tr></td>
					</tr>
					<tr>
						<td>13. Meat => Cold cuts</td>
						<td> 6 in stock</td>
						<td> 
							Sizes: 10 slices/50 slices/150 slices <br> Types: Ham/Salami/Smoked turkey 
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
					<tr></td>
					</tr>
					<tr>
						<td>14. Meat => Cold cuts</td>
						<td> 6 in stock</td>
						<td> 
							Sizes: 10 slices/50 slices/150 slices <br> Types: Ham/Salami/Smoked turkey 
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a> 
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
					<tr></td>
					</tr>
					<tr>
						<td>15. Meat => Cold cuts</td>
						<td> 6 in stock</td>
						<td> 
							Sizes: 10 slices/50 slices/150 slices <br> Types: Ham/Salami/Smoked turkey 
						</td>
						<td style = "background-color:white; max-width:1px;"><a href="EditProductList.php" class="button">Edit</a>
							<a onclick="toDelete(this);"  href="#delete" class="button";>Delete</a>
					<tr></td>
					</tr>
					<tr>
						<td>16. Meat => Cold cuts</td>
						<td> 6 in stock</td>
						<td> 
							Sizes: 10 slices/50 slices/150 slices <br> Types: Ham/Salami/Smoked turkey 
						</td>
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

	   <p class="copyright">MAVE GROCERIES ?? 2021</p>
	   
	</footer>
</html>