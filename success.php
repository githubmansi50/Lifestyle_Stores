<?php 
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));

if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
$id = $_SESSION['id'];
$query = "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.pid and user_id='$id'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
 while($array = mysqli_fetch_array($res)) { 
 $a = $array['item_id'];
 $q1 = "UPDATE `users_items` SET `statuus` = 'confirmed' WHERE `users_items`.`item_id` = '$a' and `users_items`.`user_id` = '$id' ;";
 $r = mysqli_query($con,$q1)  or die("failed ".mysqli_error($con));
 $card = $_POST['card_details'];
$q = "UPDATE `users_items` SET `card_details` = '$card' WHERE `users_items`.`item_id` = '$a' and `users_items`.`user_id` = '$id' ;";
$res = mysqli_query($con,$q)  or die("failed ".mysqli_error($con));
}

?>

<html>
    <head>
        <title>Success!</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
       <?php
        include 'includes/header.php';
        ?>
        
        <div class="container" style="align-content: center; padding-top: 100px; margin-top: 100px" id="w">
            <h2> Thank you for shopping with us.<a href="products.php">Click here</a> to purchase any other item.</h2>
        </div>
     
    
    </body>
</html>
