<?php
require 'includes/common.php';
?>

<html>
    <head>
        <title>Cart</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <div class="container" style=" padding-top: 100px; margin-top: 100px"id="w">
            <center>
           <?php
           include 'includes/header.php';
        $id = $_SESSION['id'];
           
$query = "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.pid and user_id='$id' where statuus='confirmed'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
if(mysqli_num_rows($res) == 0)
{
    echo"<br><br><br>"."<h1>Add items to your Cart First!</h1>";
}
 else {
    

?>
            </center>
        </div>
        <div class="container" style=" padding-top: 10px; margin-top: 10px" id="w">
            <center><h2><b>Here is your purchase history!</b></h2></center><br>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Item Number</th>
                   
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php 
                $sum = 0;
                while($array = mysqli_fetch_array($res)) { 
                    $sum = $sum + $array['price'];
                ?>
                 <tr>
                    <td>
                        <?php
                                echo $array['item_id'];
                        ?>
                    </td>
                    <td>
                      <?php
                                echo $array['pname'];
                        ?>  
                    </td>
                    <td>
                        <?php
                                echo "Rs. ".$array['price']."/-";
                        ?>
                    </td>
                    
                    <td><a href="products.php">View all products </a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            
        </div>
 <?php } ?>
       
    </body>
</html>
