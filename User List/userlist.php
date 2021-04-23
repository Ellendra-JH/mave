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
   <a href="../ProductListAndEdit/EditProductList.php" class="logo"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" ></a>
   <a href="../Shopping-Cart/shoppingcart.php"> <button class="cart"> <img src="shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
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
		   <th>Password</th>
		   <th>Email</th>
		   <th>Address</th> 
		   <th>ID</th> 
		   <th><a href = "EditUserList.php" ><button class="btnA">Add New</button> </a></th>
	    </tr>

<?php 
	 

	$servername = "sql308.epizy.com";
$username = "epiz_28361315";
$email = "";
$password = "j7UShEwhNjIPSXA";
$db = "epiz_28361315_data";
	
	 $con = mysqli_connect($servername, $username, $password,$db);
	 $sql="SELECT * from login"; 
	 $result=$con->query($sql);  


	 while ($row=$result->fetch_assoc()):$ref = "EditUserList.php?a=" . $row['User']; ?> 
	 <tr>
	    <td><?php echo $row['User'];?></td> 
		<td><?php echo $row['Password'];?></td> 
		<td><?php echo $row['email'];?></td> 
	    <td><?php echo $row['Address'];?></td> 
		<td><?php echo $row['ID'];?></td> 
		<td>
		   <a href = " <?php echo "EditUserList.php?a=". $row['User'];?>"> <button class="btnED">Edit</button></a>
		   <input type="button" button class="btnED" onClick="deleteme(<?php echo $row['ID'];?>)" name="Delete" value="Delete">
		</td>
	 </tr>
	 
	 <script language="javascript"> 
	         function deleteme(delid){ 
			    if(confirm("Do you want to delete?")){
					window.location.href='delete.php?del_id=' + delid+'';
					return true; 
				}		 
			 } 
	 </script>	 
	 
<?php endwhile; ?> 

</table>
</div>

	 
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