<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
if(!$_SESSION['email'])
{
header("Location: index.php");
}
session_destroy();
header("Location: index.php");
?>