<?php
require 'includes/common.php';
?>

<html>
    <head>
        <title>Products</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check.php';
        ?>
        
        <div class="container" id="w">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p><b>We have the best cameras, watches and shirts for you all in one place.</b></p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/canon.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Canon EOS</h3>
                        Price: Rs 36,000.00 <br><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(1)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>             </div>
                    </div>
                </div>  
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/sony.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        Price: Rs 40,000.00 <br><br>
                         <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(2)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div> 
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/olympus.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        Price: Rs 50,000.00 <br><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(3)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/gopro.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>GoPro</h3>
                        Price: Rs 32,000.00 <br><br>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(4)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
            </div>
              <div class="row text-center">
                <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/Model 301.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        Price: Rs 13,000.00 <br><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(5)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/model201.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        Price: Rs 3,000.00 <br><br>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(6)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div> 
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/milan.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>HMT MILAN</h3>
                        Price: Rs 8,000.00 <br><br>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(7)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/faberlua.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        Price: Rs 18,000.00 <br><br>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(8)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
            </div>
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/H&W.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>H & W</h3>
                        Price: Rs 800.00 <br><br>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(9)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/LuisPhil.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        Price: Rs 1,000.00 <br><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(10)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div> 
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/John.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>John Zok</h3>
                        Price: Rs 1,500.00 <br><br>
                      <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(11)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
                  <div class="col-md-3 col-sm-6">                     
                    <div class="thumbnail">                       
                        <img src="images/Jhalsani.jpg" class="img-responsive " >
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        Price: Rs 1,300.00 <br><br>
                   <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 if (check_if_added_to_cart(12)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>  
                    </div>
                    </div>
                </div>  
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>
