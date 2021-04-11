<?php
session_start();
$host = "sql308.epizy.com";
$user = "epiz_28361315";
$email = "";
$password = "j7UShEwhNjIPSXA";



$error = "";
$db = "epiz_28361315_data";
$success = "";
$con = mysqli_connect($host,$user,$password,$email);
mysqli_select_db($con, $db);
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password']) || $_POST['username'] == "admin") {
		$error = "You must fill everything and no 'admin' name";
		}
		else{
			$name = $_POST['username'];
			$pass = $_POST['password'];
			$mail = $_POST['email'];
			$sql = "INSERT INTO login (User, Password, email) VALUES ('$name', '$pass', '$mail') ";
			$success = "You can now go to the login page to login";
			mysqli_query($con,$sql);
		}
}
?>
<html lang="en">
	
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/SignUp.css" />
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script>
		<meta name="description" content="Sign up interface.">
	</head>
	<body>
	
							<!-- HEADER -->
							
		<div class="header">
			   <a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" width="65px" ></a>
			   <a href="../Shopping-Cart/shoppingcart.php"> <button class="cart"> <img src="img/shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
			   <a href="Login.php"> <button class="btn"> Login  </button> </a> 
		</div>
							<!-- NAV BAR -->
							
		<nav class="nav">
			<a href="../index.php"><h3>Return to Homepage</h3></a>
		</nav>
							<!-- SIGN UP -->
		<div class="container" style = "height:600px;">
		<img src="img/avatar.png" class="icon">
			<h1>Sign Up</h1>
			<span style = "color:red;"><?php echo $error; ?></span>
			<form method = "POST" action = "">
				<p>Full Name</p>
				<input type="text" name="username" style = "color:black;" placeholder="Enter Full Name" >
				<p>Email Address</p>
				<input type="email" name="email" style = "color:black;" placeholder="Enter Email Address">
				<p>Password</p>
				<input type="password" name="password" style = "color:black;" placeholder="Enter Password">
			
				<input type="submit" name="submit" value="Sign Up">
				<h6>Already have an account? <a href="Login.php"><u>Sign in</u></a><br></h6>
				<span style = "color:green;"><?php echo $success; ?></span>
			</form>
		</div>
		
					<!-- BG -->
		<div class="photo">
			<img src="img/grocerysignup.jpg" class="side">
		</div>
		
		
					<!-- FOOTER -->
		<footer>
   

   <div class="cprMessage">
      <h4>MAVE: SOEN-287 project </h4>
          <a href="#team"> Check out our team members!</a>
   </div>
   
   <br><br><br>

   <div class="socials">
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