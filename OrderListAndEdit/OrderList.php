<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="BackEndStyle.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
		<title>Order List</title>
		<meta name="description" content="This is the order list page">
	</head>

	<header class="header">
		<a href="../index.php" class="logo"> <img src="../img/logo.png" alt="logo" width="65px" > </a>
		<a href="ProductListAndEdit/EditProductList.php" class="logo"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" ></a>
		<a href="../Shopping-Cart/shoppingcart.php"> 
			<button class="cart"> <img src="../img/shopping-cart.png" alt="shopping-cart" width="50%"> </button> 
		</a>
	   <a href="../signup-and-login/Login.php"> <button class="btn" id = "log"> Login </button> </a> 
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
		<a href="../index.php"  style="color:#460707b4;"><h3><u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="OrderList.php" style = "color:black;"> Order List</h3></a>
	</nav>
		
	<body>
		<!-- Start of the order list page-->
		<div class = "sidebar">
			<a href="../index.php">Home</a>
			<a href="../ProductListAndEdit/ProductList.php">Product List</a>
			<a href="../User List/userlist.php">User List</a>
		</div>
			
		<div class="container">
			<!-- order list container-->					
			<div> 
				<table id = "myTable" class = "orders">
					<tr>
						<th colspan = 3>Orders</th>
					</tr>
					<tr>
						<th>Order Number</th>
						<th>Contact Information</th>
						<th>Devilery Address</th>
					</tr>
					<tr id = "rowToClone">
						<td></td>
						<td></td>
						<td> 
							<a href="EditOrderList.php" class="button">Edit</a>
							<a onclick="myFun(this)" class="button">Delete</a>
							<a onclick="addRow()" class="button">Add</a>
						</td>
					</tr>
					<tr id = "rowToClone">
						<td></td>
						<td></td>
						<td> 
							<a href="EditOrderList.php" class="button">Edit</a>
							<a onclick="myFun(this)" class="button">Delete</a>
							<a onclick="addRow()" class="button">Add</a>
						</td>
					</tr>
					<tr id = "rowToClone">
						<td></td>
						<td></td>
						<td> 
							<a href="EditOrderList.php" class="button">Edit</a>
							<a onclick="myFun(this)" class="button">Delete</a>
							<a onclick="addRow()" class="button">Add</a>
						</td>
					</tr>
					
				</table>
			</div>
		</div>		
	</body>
	
	<script>
		function addNew() 
		{
			var row = document.getElementById("rowToClone"); // find row to copy
			var table = document.getElementById("myTable"); // find table to append to
			var clone = row.cloneNode(true); // copy children too
			clone.id = "newID"; // change id or other attributes/contents
			table.appendChild(clone); // add new row to end of table
		}
	
		function remove(r) 
		{
			var i = r.parentNode.parentNode.rowIndex;
			document.getElementById("myTable").deleteRow(i);
		}
</script>

	<footer>
	   <div class="text-ma">
		  <h4>MAVE: SOEN-287 project </h4>
			  <a href="#team"> chech out our team members</a>
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
</html>