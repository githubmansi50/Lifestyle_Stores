<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];
$query = "INSERT INTO users_items(user_id, item_id, statuus) VALUES('$user_id', '$item_id', 'Added to cart')";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
$array = mysqli_fetch_array($res);
header("Location: products.php");
?>