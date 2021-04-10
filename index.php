<?php
session_start();

$host = "sql308.epizy.com";
$user = "epiz_28361315";
$email = "";
$password = "j7UShEwhNjIPSXA";

$db = "epiz_28361315_data";

$con = mysqli_connect($host,$user,$password,$email);
mysqli_select_db($con, $db);

if(isset($_SESSION['user'])){
	$_SESSION['user'] = $username;
	header("location: ../index.php");
}
$error = "";	
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else{
		$con = mysqli_connect($host,$user,$password,$email);
mysqli_select_db($con, $db);

if(isset($_POST['username'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sql="select * from login where User = '".$name."' AND Password = '".$pass."' limit 1";




    $result = mysqli_query($con, $sql);


	if (mysqli_num_rows($result) == 1){
		$_SESSION['user'] = $name;
		header("location: ../index.php");
	}
    else{
		$error = "Username or Password is invalid";
		
    
    }

	}
}
}




?><html lang="en">
	<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script>
		<meta name="description" content="Login interface.">
	</head>
	<body>

					<!-- HEADER -->

		<div class="header">
			   <a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" width="65px" ></a>
			   <a href="../Shopping-Cart/shoppingcart.html"> <button class="cart"> <img src="img/shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
		</div>
							
					<!-- NAV BAR -->
							
		<nav class="nav">
			<a href="../index.php"><h3>Return to Homepage</h3></a>
		</nav>
					
					<!-- LOG IN -->
					
		<div class="container" style = "height:450px;">
		<img src="img/avatar.png"  class="icon">
			<h1>Login</h1>
			
			<form method = "POST" action = "">
				<p>Email Address</p>
				<input type="text" name="username" placeholder="Enter Email" style = "color:black;">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password" style = "color:black;">
				<input type="submit" name="submit" value="Login">
				
				<a href="#"><u>Forgot your password?</u></a><br>
				<a href="P6 - Sign Up Page.html"><u>Don't have an account?</u></a><br>
				<span style = "color:red;"><?php echo $error; ?></span>
				
			</form>
		</div>
		
					<!-- BG -->
		
		<div class="photo">
			<img src="img/grocerylogin.jpg" class="side">
		</div>
		
					<!--FOOTER -->
	
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