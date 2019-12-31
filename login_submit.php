<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$email=$_POST['email'];

$password= ($_POST['password']);


$admin_email =  'admin@gmail.com';
$admin_passwd = 'lifestyle';
$query = "select * from users where email='$email' and passwd='$password'";
$result = mysqli_query($con,$query) or die("failed ".mysqli_error($con));
$row = mysqli_fetch_array($result);
if($password ==$admin_passwd and $email ==$admin_email)
{
	header("Location: admin.php");
}
else if($row['email'] == $email && $row['passwd'] == $password)
{
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['id'] = $row['id'];
	header("Location: products.php");
}
else
{
	echo $row['email'];
}
?>
