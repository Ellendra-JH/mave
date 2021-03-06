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
				<img src="../img/meat.png" class="section" alt="Aisle_Fruit" height = "600px">		<!-- change image src to aisle section img  -->
			</div>
						<!-- NAV BAR -->
						
			<nav class="nav">
			<a href="../index.php"  style="color:#460707b4;"><h3><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="AisleMeats.php" style = "color:black;">  Meat section</h3></a>
		</nav>
			
						<!-- PRODUCTS (MODIFY FROM HERE) -->
						
						<!-- First row of products -->
						
			<div class="gallery">
				<div class="content">
				
        <a href="coldcuts.php"> <img src="../img/coldcuts.png" width="200px" height = "200px" alt = "coldcuts"> </a>			<!-- Product Image -->
        <h3>Cold cuts</h3>	<!-- Name -->
        <p>Fresh cuts delicately seasoned</p>	<!-- Desc -->
        <h6>From 5.99$</h6>	<!-- Price -->
        <a href="coldcuts.php"><button class="buy">Add to cart</button></a>

		
      </div>
      <div class="content">
	  
        <a href="chickenlegs.php"> <img src="../img/chickenlegs.jpg" alt = "chickenlegs" width = "200px" height = "200px"> </a>
        <h3>Chicken legs</h3>
        <p>Finest chicken legs cut</p>
        <h6>From 3.99$</h6>
        <a href="chickenlegs.php"><button class="buy">Add to cart</button></a>
		
      </div>
      <div class="content">
	  
        <a href="beef.php"> <img src="../img/beef.jpg" width = "200px" height = "200px"> </a>
        <h3>Raw beef</h3>
        <p>Delicious beef to be cooked</p>
        <h6>From 4.99$</h6>
		<a href="beef.php"><button class="buy">Add to cart</button></a>
		
      </div>
	  
	  </div>
	  
					<!-- Second row of products -->
	 
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