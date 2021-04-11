<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
	<link rel="stylesheet" href="ProductDesign.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/445988e632.js" crossorigin="anonymous"></script> 
    <title> Mave | Product Bounty Paper Towels</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--change product name above-->
   </head>
   
   <header class="header">
		<a href="../index.php" class="logo"><img src="../img/logo.png" alt="logo" class = "logo" width="65px" style = "display:inline;"></a>
		<a href="../ProductListAndEdit/EditProductList.php" class="logo"style = "display:inline;"><img src="../img/backend.png" alt="logo" width="65px" id = "backend" style = "display: inline; width:5%;" ></a>
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
	



<nav class="navbar-2">
  <a><h3> <a href="../index.html" class="sec"> <u>Home</u> &nbsp;&nbsp;  / </a> &nbsp;&nbsp; <a href="Aisle Cleaning Supplies.html" class="sec"> <u> Cleaning Supplies Section </u>&nbsp;&nbsp; / </a>&nbsp;&nbsp; Bounty Paper Towels</h3></a>
</nav>
     

   <body class = "page-contains">
<div class = "wrapping">

      <table>
         <tr >
            <td rowspan = "2" class = "pic" > <img src="bounty.png" alt = "Bounty Paper Towel" id = "center" /></td>
           <!--product image above-->
            <td class = "aisl"> The<br><a href= "Aisle Cleaning Supplies.html">
              <span style = "background-color:white ;color:black;"> Cleaning Supplies Section </span></a>
              <!--links to aisle above-->
            
    <br>

              <div class = "prodname">
               Bounty Paper Towels 
                <!--product name above-->
              </div>
              <div class = "prodquantity"><select name = "size" id = "size">
                <option value = "1">  1 pack-</option>
               <option value = "2">  2 packs-</option>
               <option value = "3">  3 packs-</option>
              </select>
                <div style="line-height:55%;">
    <br>
</div>

                <div style="line-height:55%;">
    <br>             
                <div class = "price"><div style="line-height:75%;">
</div>
<div id = "prices" data-value = "4.99">    4.99$</div><span class = "perqty"></span>
                  
                  <!--price above-->
                </div>
               <div style="line-height:45%;">
    <br>
</div> <br>
                <h6>"The Quicker Picker Upper!"</h6><br>
                <!--description above-->
                <label for="desc"></label>
                <br>
  <input type="button" class = "button" id="desc" name="desc" value = "More description">
  <a id = "moredesc" style = "display:none; position:absolute;"> Best products</a>
                 <div style="line-height:75%;">
    <br>
                </div>  
            
              </div>
            
              
         </tr>
        <td class = "last">
    
          <table class = "auxiliarytable">
            <tr>
              <td class = "quantitydesired">Quantity desired
                <label for="qty"></label>
                <input class="quantity" id="qty" min="1" max = "30" name="qty" value="1" type="number">
                  <!--change max above-->
                <div class = "stock"> 30 in stock;</div>
                <!--quantity in stock above-->
                </td>
        
              <td> 
                <label for="crt"></label>
              
            
<a href = "../Shopping-Cart/shoppingcart.html">  <input type="button" class = "cartbt" id="crt" name="crt" value = "Add to cart"  > </a></td>
    
  </tr>
          </table>
  </td>
          
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
  
<script src="../Javascript/ProductPageJS.js"></script> 
   </body>
  
</html>