<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
		<link rel="stylesheet" href="products.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
		<title> Mave | Product Somtam  </title>
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
		<a><h3> <a href="../index.php" class="sec"> <u>Home</u> &nbsp;&nbsp;  / </a>
			&nbsp;&nbsp; <a href="../Aisle Cooked Cuisines/Aislecookedgds.php" class="sec"> <u> Cooked Cuisines</u>&nbsp;&nbsp;
				 / </a>&nbsp;&nbsp; Som Tam  </h3></a>
	</nav>  
		 
	<body class = "page-contains">
		<div class = "wrapping">
			<table>
				<tr>
					<!--product image -->
					<td rowspan = "2" class = "pic" > 
						<img src="img/Som tam.png" alt = "carrot" id = "center" />
					</td>
					
					<td class = "aisle"> <br><br>
						<!--product name -->
						<div class = "prodname">
							Som Tam 
						</div>
						
						<div class = "prodquantity">
							<!--product size -->
							Size
							<div style="line-height:55%;"><br></div>
							<select name = "size" id = "size">
								<option value = "1">Small</option>
								<option value = "2">Medium</option>
								<option value = "3">Large</option>		
							</select>
							<div style="line-height:55%;"><br>
							</div>
							<!--product type -->
							Type
							<div style="line-height:55%;"><br></div>
							<select name = "type" id = "typ">
								<option value = "extra-sc"> Extra sauce  </option>
							   <option value = "no-sc">  No Sauce </option>
							   
									
							</select>
							
							<!--product price -->				
							<div class = "price">
								<div style="line-height:75%;"><br></div>
								<div id = "prices" data-value = "4.99"> 4.99$ </div>
							</div>
							
							<!--product description-->
							<div style="line-height:45%;"><br></div> 
								<h3>a Thai dish of sliced sour fruits and vegetables.</h3>
								<label for="desc"></label>
								
								<input type="button" class = "button" id="desc"  value = "More description">
								<a id = "moredesc" style = "display:none; position:absolute;"> Our most popular cooked dish</a>
							<div style="line-height:75%;"><br></div>  
						</div>
					</td>
				</tr>
				
				<td class = "last">
					<table class = "auxiliarytable">
						<tr>
							<td class = "quantitydesired">
								<h3>Quantity desired</h3>
								<label for="qty"></label>
								<input class="quantity" id="qty" min="1" max = "10" name="qty" value="1" type="number">
								 
								<!--quantity in stock-->
								
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
		   <p class="copyright">MAVE GROCERIES ?? 2021</p>
		</footer>
		<script src="../Javascript/ProductPageJS.js"></script> 
	</body>
</html>