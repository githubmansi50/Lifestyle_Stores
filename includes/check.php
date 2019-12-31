<?php
require 'includes/common.php';
function check_if_added_to_cart($item_id)
{
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$user = $_SESSION['id'];
$query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user' and statuus='Added to cart'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
$array = mysqli_fetch_array($res);
if(mysqli_num_rows($res) >= 1)
{
	return 1;
}
else
{
	return 0;
}
}

?>