<html>
    <head>
        <title>Admin</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        
        <div class="navbar navbar-inverse" id="w">
            <div class="container">
                <div class="navbar-header">
                    
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                    
                </div>
                
            </div>
        </div>
        
        <div class="container" style=" padding-top: 30px; margin-top: 30px"id="w">
            <center>
           <?php
           //include 'includes/header.php';
       // $id = $_SESSION['id'];
           $con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
$query = "SELECT *
FROM users_items ui
INNER JOIN items i ON ui.item_id = i.pid
INNER JOIN users u ON ui.user_id = u.id and statuus='Added to cart'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
if(mysqli_num_rows($res) == 0)
{
    echo"<br><br><br>"."<h1>No Customer has anything  added to cart!</h1>";
}
 else {
    

?>
            </center>
        </div>
        <div class="container" style=" padding-top: 10px; margin-top: 10px" id="w">
            <center><h2><b>Items added to CART by Customers</b></h2></center><br>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Customer Contact</th>
                    <th>Product Name</th>
                </tr>
                <?php 
                $sum = 0;
                while($array = mysqli_fetch_array($res) ) { 
                   
                ?>
                 <tr>
                    <td>
                        <?php
                                echo $array['item_id'];
                        ?>
                    </td>
                    <td>
                      <?php
                                echo $array['name'];
                        ?>  
                    </td>
                    <td>
                        <?php
                                echo $array['contact'];
                        ?>
                    </td>
                     <td>
                        <?php
                                echo $array['pname'];
                        ?>
                    </td>
                    
                </tr>
                <?php
                }
                
                ?>
                
                
                
            </table>
        </div>
 <?php } ?>
       
        
         <div class="container"id="w">
            <center>
           <?php
           //include 'includes/header.php';
       // $id = $_SESSION['id'];
           
$q = "SELECT *
FROM users_items ui
INNER JOIN items i ON ui.item_id = i.pid
INNER JOIN users u ON ui.user_id = u.id and statuus='confirmed'";
$r = mysqli_query($con,$q)  or die("failed ".mysqli_error($con));

if(mysqli_num_rows($r) == 0)
{
    echo"<br><br><br>"."<h1>No Customer has bought anything !</h1>";
}
 else {
    

?>
            </center>
        </div>
        <div class="container" style=" padding-top: 10px; margin-top: 10px" id="w">
            <center><h2><b>Items bought by Customers</b></h2></center><br>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Customer Contact</th>
                    <th>Product Name</th>
                </tr>
                <?php 
                $sum = 0;
                while($array = mysqli_fetch_array($r) ) { 
                   
                ?>
                 <tr>
                    <td>
                        <?php
                                echo $array['item_id'];
                        ?>
                    </td>
                    <td>
                      <?php
                                echo $array['name'];
                        ?>  
                    </td>
                    <td>
                        <?php
                                echo $array['contact'];
                        ?>
                    </td>
                     <td>
                        <?php
                                echo $array['pname'];
                        ?>
                    </td>
                    
                </tr>
                <?php
                }
                
                ?>
                
                
                
            </table>
        </div>
 <?php } ?>
        
        
    </body>
</html>

