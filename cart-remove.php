<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$id=$_GET['id'];
$uid=$_SESSION['id'];
$query = "delete from users_items where item_id='$id' and user_id='$uid'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
header("Location: cart.php");
?>