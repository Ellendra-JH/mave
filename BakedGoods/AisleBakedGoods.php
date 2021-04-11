<?php
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AISLE DESIGN</title>
		<link rel="stylesheet" type="text/css" href="../css/aisleDesign.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script>
		<meta name="description" content="Aisle for a given product type.">
	</head>
	<body>
	
						<!-- HEADER -->
		
						<header class="header">
							<a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" width="65px" ></a>
							<a href="../ProductListAndEdit/EditProductList.php" class="logo"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" ></a>
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
					 
		
						
		
		<div id="container">
		
		<div id="productlist">
			<div id="aisleName">
				<img src="../img/backed.png" class="section" alt="Aisle_Baked_Goods" height = "600px">		<!-- change image src to aisle section img  -->
			</div>
						<!-- NAV BAR -->
						
			<nav class="nav">
			<a href="../index.php"  style="color:#460707b4;"><h3 style="color:black;"><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp;  Baked Goods section</h3>
		</nav>
			
						<!-- PRODUCTS (MODIFY FROM HERE) -->
						
						<!-- First row of products -->
						
			<div class="gallery">
				<div class="content">
				
        <a href="cookie.php"> <img src="../img/cookie.png" width="200px" height = "200px" alt = "cookie"> </a>			<!-- Product Image -->
        <h3>Cookie</h3>	<!-- Name -->
        <p>Ultimate Chocolate Chip Cookie</p>	<!-- Desc -->
        <h6>From 0.99$</h6>	<!-- Price -->
        <a href="cookie.php"><button class="buy">Add to cart</button></a>
		
      </div>
      <div class="content">
	  
        <a href="whitebread.php"> <img src="../img/whitebread.png" alt = "whitebread" width = "200px" height = "200px"> </a>
        <h3>White Bread</h3>
        <p>Traditional White Bread</p>
        <h6>From 4.99$</h6>
        <a href="whitebread.php"><button class="buy">Add to cart</button></a>
		
      </div>
      <div class="content">
	  
        <a href="donut.php"> <img src="../img/donut.png" width = "200px" height = "200px"> </a>
        <h3>Donut</h3>
        <p>Homemade Chocolate Dip Donut</p>
        <h6>From 1.99$</h6>
        <a href="donut.php"><button class="buy">Add to cart</button></a>

		
      </div>
	  	
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
		
	
	</body>

</html>