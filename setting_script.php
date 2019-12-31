<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$password=$_POST['op'];
$e=$_SESSION['email'];
if(!$_SESSION['email'])
{
	header("Location: index.php");
}
$query = "select passwd from users where email='$e'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
$array = mysqli_fetch_array($res);
if($password == $array['passwd'])
{
	$np = $_POST['np'];
	$rp = $_POST['rp'];
	if($np == $rp)
	{
	$q = "UPDATE `users` SET `passwd` = '$np' WHERE `users`.`email` = '$e'";
$res = mysqli_query($con,$q)  or die("failed ".mysqli_error($con));
header("Location: update.php");
	}
	else
	{
		echo "<br><br><br><br><h1>The new passwords don't match !</h1>";
	}
}
else
{
	//header("Location: setting.php");
	echo "<br><br><br><br><h1>Old Password incorrect !</h1>";
}
?>