<?php
session_start();
?>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Aisle Vegetables</title>
		<link rel="stylesheet" type="text/css" href="../css/aisleDesign.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script>
		<meta name="description" content="Aisle for vegetables">
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
		<div id="container">
			<div id="productlist">
				<div id="aisleName">
					<img src="../img/v.png" class="section" alt="Aisle_Vegetables" height = "600px">
				</div>
						<!-- NAV BAR -->
						
				<nav class="nav">
					<a href="../index.php"  style="color:#460707b4;"><h3><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="AisleVegetables.php" style = "color:black;">  Vegetables Section</h3></a>
				</nav>
				
			<!-- First row of products -->	
				<div class="gallery">
					<div class="content">
						<!-- Product Image -->
						<a href="ProductBroccoli.php"> <img src="../img/broccoli.png" width="200px" height = "200px" alt = "broccoli"> </a>			
						<!-- Name -->
						<h3>Broccoli</h3>	
						<!-- Desc -->
						<p>Freshly harvested</p>
						<!-- Price -->
						<p>From 4.52$</p>
						<a href="ProductBroccoli.php"><button class="buy">Add to cart</button> </a>
					</div>
					
					<div class="content">
						<!-- Product Image -->
						<a href="ProductCelery.php"> <img src="../img/celery.png" width="200px" height = "200px" alt = "celery"> </a>			
						<!-- Name -->
						<h3>Celery</h3>	
						<!-- Desc -->
						<p>The freshest celery</p>
						<!-- Price -->
						<p>From 2.56$</p>
						<a href="ProductCelery.php"><button class="buy">Add to cart</button> </a>
					</div>
					
					<div class="content">
						<!-- Product Image -->
						<a href="ProductCarrots.php"> <img src="../img/carrot.png" width="200px" height = "200px" alt = "carrots"> </a>			
						<!-- Name -->
						<h3>Carrots</h3>	
						<!-- Desc -->
						<p>Removed from the ground yesterday</p>
						<!-- Price -->
						<p>From 3.97$</p>
						<a href="ProductCarrots.php"><button class="buy">Add to cart</button> </a>
					</div>
				</div>
	  
				<!-- Second row of products -->
				
					
					
				</div>
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