<?php
session_start();
?><!DOCTYPE html>
<html>
   <head>
		<link rel="stylesheet" href="../css/products.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
		<title> Mave | Product Carrots </title>
   </head>
   
   <header class="header">
		<a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" class = "logo" width="65px" style = "display:inline;"></a>
		<a href="../ProductListAndEdit/EditProductList.php" class="logo"style = "display:inline;"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" style = "display: inline; width:5%;" ></a>
		<a href="../Shopping-Cart/shoppingcart.php"> <button class="cart"> <img src="../img/shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
		<a href="../signup-and-login/Login.php"> <button class="btn" id = "log"> Login  </button> </a> 
		
	</header>
	<?php
		if ($_SESSION['user']!="admin"){
			echo "<script>";
	   
			echo "document.getElementById('backend').style.display = 'none';";
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
		<a><h3> <a href="../index.php" class="sec"> <u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="AisleVegetables.php" class="sec"> <u> Vegetable section</u>&nbsp;&nbsp; / </a>&nbsp;&nbsp; Celery </h3></a>
	</nav>  
		 
	<body class = "page-contains">
		<div class = "wrapping">
			<table>
				<tr>
					<!--product image -->
					<td rowspan = "2" class = "pic" > 
						<img src="../img/celery.png" alt = "celery" id = "center" />
					</td>
					
					<td class = "aisle"> <br><br>
						<!--product name -->
						<div class = "prodname">
							Celery
						</div>
						
						<div class = "prodquantity">
							<!--product size -->
							Size
							<div style="line-height:55%;"><br></div>
							<select name = "size" id = "size">
								<option value = "1">25g</option>
								<option value = "2">50g</option>
								<option value = "4">100g</option>		
							</select>
							<div style="line-height:55%;"><br>
							</div>
							<!--product type -->
							Type
							<div style="line-height:55%;"><br></div>
							<select name = "type" id = "typ">
								<option value = "wcelery"> Whole celery  </option>
							   <option value = "scelery">  Celery sticks (+1.00$)</option>	
							</select>
							
							<!--product price -->				
							<div class = "price">
								<div style="line-height:75%;"><br></div>
								<div id = "prices" data-value = "2.77">2.77$</div>
							</div>
							
							<!--product description-->
							<div style="line-height:45%;"><br></div>
								The freshest celery 
								<label for="desc"></label>
								<br>
								<input type="button" class = "button" id="desc" name="desc" value = "More description">
								<a id = "moredesc" style = "display:none; position:absolute;"> Cerftified by the best nutritionists</a>
							<div style="line-height:75%;"><br></div>  
						</div>
					</td>
				</tr>
				
				<td class = "last">
					<table class = "auxiliarytable">
						<tr>
							<td class = "quantitydesired">
								Quantity desired
								<label for="qty"></label>
								<input class="quantity" id="qty" min="1" max = "27" name="qty" value="1" type="number">
								 
								<!--quantity in stock-->
								<div class = "stock">27 in stock;</div>
							</td>
					
							<td> 
								<label for="crt"></label>
								<a href = "../Shopping-Cart/shoppingcart.php">  <input type="button" class = "cartbt" id="crt" name="crt" value = "Add to cart"  > </a>
							</td>
						</tr>
					</table>
				</td>
			</table>
		</div>
	   
		<!-- FOOTER -->
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
		<script src="../Javascript/ProductPageJS.js"></script> 
	</body>
</html>