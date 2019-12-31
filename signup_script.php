<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$name=$_POST['name'];
$email=$_POST['email'];
$password =$_POST['password'];
$password = ($password);
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$query = "select * from users where email='$email'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
$array = mysqli_fetch_array($res);
if($email == $array['email'])
{
	echo "<h3>User already exists! Try another username.</h3>";
}
else
{
	$insert = "insert into users (name, email, passwd, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address')";
	$r = mysqli_query($con,$insert)  or die("failed ".mysqli_error($con));
	session_start();
	$id =  mysqli_insert_id($con);
	$_SESSION['email'] = $email;
	$_SESSION['id'] = $id;
	header("Location: products.php");
}
?>