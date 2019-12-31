<?php require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>

<html>
        <head>
        <title>Lifestyle Store</title>
         <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <!--<div class="navbar navbar-inverse" id="w">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
            <div class="container" id="w">
                <div id="banner-content" style="padding-left: 50px">
                    <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                             <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
      <?php include 'includes/footer.php';?>
    </body>
</html>