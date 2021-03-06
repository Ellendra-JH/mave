<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
    <title>MAVE GROCERIES</title>
    <meta name="description" content="This is our grocery store, we only sell overpriced 
    groceries for Scandinavian DJs. It's like if Ikea, wholefoods and Gucci had a baby.">

</head>


<header class="header">

   <a href="index.php" class="logo"><img src="img/logo.png" alt="logo" width="65px" ></a>
   <a href="ProductListAndEdit/EditProductList.php" class="logo"><img src="img/backend.png" alt="logo" width="65px" id = "backend" ></a>
   <a href="Shopping-Cart/shoppingcart.php"> <button class="cart"><img src="img/shopping-cart.png" alt="shopping-cart" width="50%">  </button> </a>
   <a href="signup-and-login/Login.php"> <button class="btn"  id = "log"> Login  </button> </a> 
</header>
<?php
if (isset($_SESSION['user'])){
   echo "<script>";

   echo "document.getElementById('log').innerHTML = 'logout'";
   echo "</script>";
   

if ($_SESSION['user']=="admin"){
   echo "<script>";
      
      echo "document.getElementById('backend').style.display = 'inline'";
      echo "</script>";
}
}
?>


<nav>
 <div> <img src="img/bogafinale4.png" alt="intro" class="responsive"> </div>

</nav>
    

<nav class="navbar-2">
  <a href="index.php"><h3>Home</h3></a>
</nav>



<body style = "background-color:black;">


   

    <!--the home page starts here-->    
    <div class="container">

      
      

      <!-- Vegetables container-->
      <a href="Vegetables/AisleVegetables.php">
          <div class="categories"> <img src="img/v.png" alt="Vegetables" class="item-image"> 
            <div class="out-the-box"><p>Vegetables</p><h4>Fresh Veggies Hand Picked Especially For You</h4></div>
         </div>
         

       </a>

       
       <!--Fruits container-->
        <a href="Aisle Fruit/Fruit Aisle.php">
       <div class="categories"> <img src="img/f.png" alt="Fruits" class="item-image"> 
         <div class="out-the-box"><p>Fruits</p><h4>Picked From around the world to your hands</h4></div>
      </div>

       </a>

       <!--Meats container-->
        <a href="AisleMeat/AisleMeats.php">
         <div class="categories"> <img src="img/meat.png" alt="Meats" class="item-image">
            <div class="out-the-box"><p>Meats</p><h4>Handling your meat with precision and care.</h4></div>
          </div>
       </a>

       
      
      
       
      <!--Baked Goods container-->
      <a href="BakedGoods/AisleBakedGoods.php">
         <div class="categories"> <img src="img/backed.png" alt="Baked Goods" class="item-image"> 
            <div class="out-the-box"><p>Baked Goods</p><h4>Endless discovery of delicious bakery</h4></div>
         </div>
      </a>

      <!--Cleaning products container-->
      <a href="Aisle Cleaning Supplies/Aisle Cleaning Supplies.php">
         <div class="categories"> <img src="img/cs.png" alt="Cleaning products " class="item-image">
            <div class="out-the-box"><p>Cleaning products</p><h4>Everything you need for cleaning </h4></div>
          </div>
      </a>

      <!--Cooked Goods container-->
      <a href="Aisle Cooked Cuisines/Aislecookedgds.php">
         <div class="categories"> <img src="img/CC.png" alt="Cooked Goods" class="item-image"> 
            <div class="out-the-box"><p>Cooked Goods</p><h4>The pleasure of variety on your plate </h4></div>
         </div>
      </a>

     
      

    </div>



    <!--the home page ends here-->
    
    
</body>

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

</html>

