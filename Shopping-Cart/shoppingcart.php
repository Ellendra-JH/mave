<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
		<title>Shopping Cart Mave Groceries</title> 
       <link rel="stylesheet" type="text/css" href="shoppingcart.css">
	   <script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
       <meta charset="UTF-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<header class="header">

   <a href="../index.php" class="logo"><img src="logo.png" alt="logo" width="65px" ></a>
   <a href="ProductListAndEdit/EditProductList.php" class="logo"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" ></a>
   <a href="shoppingcart.php"> <button class="cart"> <img src="shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
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
  <a><h2> <a href="../index.php" class="sec"> <u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="../index.php" class="sec"> <u> Shopping Cart</u></h2></a>
</nav>

<body> 
	
 <!-- Title -->
	<div class="title"> 
	 <span class="text"> Shopping Cart </span> 
	</div> 
	<div style="overflow-x:auto;">
	<!-- Creating Table -->
   <div class="cart-page">
      <table>
	     <tr>
    <!-- First row -->
		   <th>Product</th>
			<th>Quantity</th>
			<th>Price</th>
		 </tr>
		 <tr>
		  <td>
			 <!-- Second Row-->
			 <div class="cart-info">
			   <img src="clorax.png"> 
				 <div>
				  <p>Clorox Disinfecting Wipes</p> <!--Product Name -->
				  <medium> Product Price: $5.49</medium><br><br> <!--Product Price -->
				   <button class="btnED">Delete</button> <!--Delete Button -->
				 </div>
			 </div>
	      </td>
		 <td> <!-- Quantity -->
		    <div class="quantity">
			   <button class="btn3" type="button">-</button> <!--btn3 minus -->
			   <input type="text" id="quantity" value="1"> 
			   <button class="btn4" type="button">+</button> <!--btn4 addition --> 
			</div>
		 </td> 
		<td>
			<p class="total-price">
				<p>$
				<span id="price" data-value = "5.49">5.49</span>
                </p> 				
			</p>
		
		</td><!--Final Price of Produce -->
			
		 </tr>

	  </table>
	</div>
	  <!-- New table for Total Price including taxes -->
	  <div class="total-price"> 
	    <table> 
		  <tr>
		    <td><h2>Order Summary</h2></td>
		  </tr> 	
		  <tr>
		    <td>Number of Items: </td>
			<td>
			<class="total-quantity">
				<span id="totalQuantity"></span>
			</td>
		  </tr> 		  
		  <tr>
		    <td>Total before tax:</td>
			<td>
				<class="total-price"> $
				<span id="beforeTax"></span>
			</td>
		  </tr> 
	      <tr>
		    <td>Estimated GST:</td> 
			<td> 
			<class="total-price"> $
				<span id="GST"></span>
			</td>
		  </tr> 
		   <tr>
		    <td>Estimated QST:</td>
			<td>
			<class="total-price">$
				<span id="QST"></span>
			</td>
		  </tr>
		  <tr>
		    <td><h3>Order Total:<h3></td> <!--Final Price-->
			<td><h3>
			<class="total-price">$
				<span id="finalPrice"></span>
			</h3></td>
		  </tr>
	     </table>
	  </div>
    <!-- Buttons for Continue shopping and Pay now)-->
	<div class="container">
     <button class="btn1">Continue Shopping</button> <br>
	 <button class="btn1">Pay Now</button>
    </div>
   </div>
 <script src="shoppingcart.js"></script>
</body>

<!--Footer -->
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