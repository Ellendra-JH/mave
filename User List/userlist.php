<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  
   	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	<link rel="stylesheet" type="text/css" href="userlist.css" /> 
	<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script>   
	<title>User List Mave Groceries</title>
 </head>

<header class="header">
   <a href="../index.php" class="logo"><img src="logo.png" alt="logo" width="65px" ></a>
   <a href="ProductListAndEdit/EditProductList.php" class="logo"><img src="img/backend.png" alt="logo" width="65px" id = "backend" ></a>
   <a href="../Shopping-Cart/shoppingcart.php"> <button class="cart"> <img src="shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
   <a href="../signup-and-login/Login.php"> <button class="btn"> Login  </button> </a> 
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
  <a><h2> <a href="../index.php" class="sec"> <u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="userlist.php" class="sec"> <u>List of Users</u></h2></a>
</nav>  
  
  <body style = "background-color:black;">
    <div class = "sidebar" style = "font-size:200%;">
		
		<a href="../index.php">Home</a>
		<a href="../ProductListAndEdit/ProductList.php">Product List</a>
		<a href="../User List/userlist.php">User List</a>
		<a href="../OrderListAndEdit/OrderList.php">Order List</a>
		
	</div>
	 <h1>List of Users</h1>
	 
	 
	 <table class="center">
	    <tr>
		   <th>Username</th>
		   <th>First Name</th>
		   <th>Last Name</th>
		   <th>Email</th> 
		   <th><button class="btnA">Add New</button></th>
	    </tr>
		
		<tr>
		   <td>elon21</td>
		   <td>Elon</td>
		   <td>Musk</td>
		   <td>emusk01@hotmail.com</td>
		   <td> <a href = "EditUserList.php"> <button class="btnED" >Edit</button> </a>
		       <button class="btnED">Delete</button>
		   </td>
		</tr>
		
		<tr>
		   <td>billg55</td>
		   <td>Bill</td>
		   <td>Gates</td>
		   <td>billgates12@gmail.com</td>
		   <td> <a href = "EditUserList.php"> <button class="btnED" >Edit</button> </a>
		       <button class="btnED">Delete</button>
		   </td>
		</tr>
		<tr>
		   <td>jbezos01</td>
		   <td>Jeff</td>
		   <td>Bezos</td>
		   <td>jeffbezos99@hotmail.com</td>
		   <td> <a href = "EditUserList.php"> <button class="btnED" >Edit</button> </a>
		       <button class="btnED">Delete</button>
		   </td>
		</tr>
		<tr>
		   <td>markzuckfb</td>
		   <td>Mark</td>
		   <td>Zuckerberg</td>
		   <td>fbcreator@hotmail.com</td>
		   <td> <a href = "EditUserList.php"> <button class="btnED" >Edit</button> </a>
		       <button class="btnED">Delete</button>
		   </td>
		</tr>
		<tr>
		   <td>steve51</td>
		   <td>Steve</td>
		   <td>Jobs</td>
		   <td>applejobs@gmail.com</td>
		   <td> <a href = "EditUserList.php"> <button class="btnED" >Edit</button> </a>
		       <button class="btnED">Delete</button>
		   </td>
		</tr>

	 </table> 
	 
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