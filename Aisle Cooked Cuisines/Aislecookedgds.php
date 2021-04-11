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
				<img src="../img/CC.png" class="section" id="top" alt="Aisle_cooked_Cuisines" >		<!-- change image src to aisle section img  -->
			</div>


						<!-- NAV BAR -->
						
			<nav class="nav">
			<a href="../index.php"  style="color:#460707b4;"><h3><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="Aislecookedgds.php" style = "color:black;">  Cooked Cuisines</h3></a>
		</nav>
			
						<!-- PRODUCTS (MODIFY FROM HERE) -->
						
						<!-- First row of products -->
		

	     <div class="gallery">
	     <div class="content">
				
        <a href="..\product pages for cooked cuisines\Productpoutine.php"> <img src="img/Poutine.png"  alt = "Poutine" width="200" height="200"> </a>			<!-- Product Image -->
        <h3>Poutine</h3>	<!-- Name -->
        <p>A dish of french fries and cheese curds 
          <br>topped with a brown gravy</p>	<!-- Desc -->
        <h6>From 2.99$</h6>	<!-- Price -->
        <a href="../product pages for cooked cuisines/.php"><button class="buy">Add to cart</button> </a>
		
      </div>
      <div class="content">
	  
        <a href="..\product pages for cooked cuisines\ProductChickenrice.php"> <img src="img/Chicken rice.png" alt = "chicken&rice" width="200" height="200" > </a>
        <h3>chicken & Rice</h3>
        <p>a succulent steamed white chicken and fragrant rice 
          with some light soy sauce</p>
        <h6>From 4.99$</h6>
        <button class="buy">Add to Cart</button>
		
      </div>
      <div class="content">
	  
        <a href="..\product pages for cooked cuisines\ProductSomtam.php"> <img src="img/Som tam.png" alt = "Som-tam" width="200" height="200" > </a>
        <h3>Som tam</h3>
        <p> a spicy salad made from <br> shredded unripe papaya </p>
        <h6>From 4.99$</h6>
        <button class="buy">Add to Cart</button>
		
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