<?php
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Fruit Aisle</title>
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
				<img src="img/fruitsection.png" class="section" alt="Aisle_Fruit">		<!-- change image src to aisle section img  -->
			</div>
						<!-- NAV BAR -->
						
			<nav class="nav">
			<a href="../index.php"  style="color:#460707b4;"><h3><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="../Aisle Fruit/Fruit Aisle.php" style = "color:black;">  Fruit section</h3></a>
		</nav>
			
						<!-- PRODUCTS (MODIFY FROM HERE) -->
						
						<!-- First row of products -->
						
			<div class="gallery">
				<div class="content">
				
        <a href="Apple.php"> <img src="img/apple.png"> </a>			<!-- Product Image -->
        <h3>Apple</h3>	<!-- Name -->
        <p>Sweet and organic apples.    <br>  (Sold individually)</p>	<!-- Desc -->
        <h6>1,40$/each</h6>	<!-- Price -->
        <a href="Apple.php"><button class="buy">Add to cart</button> </a>
		
      </div>
      <div class="content">
	  
        <a href="Strawberries.php"> <img src="img/strawberries.png"> </a>
        <h3>Strawberries</h3>
        <p>Handpicked, sweet strawberries. </br> (Sold in boxes)</p>
        <h6>4,99$/box</h6>
        <a href="Strawberries.php"><button class="buy">Add to cart</button> </a>
		
      </div>
      <div class="content">
	  
        <a href="Banana.php"> <img src="img/banana.png"> </a>
        <h3>Banana</h3>
        <p>Fiber-filled bananas. </br>(Sold individually)</p>
        <h6>0,62$/each</h6>
        <a href="Banana.php"><button class="buy">Add to cart</button> </a>
		
      </div>
	  
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