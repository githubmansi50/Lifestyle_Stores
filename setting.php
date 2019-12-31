<?php 
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
?>

<html>
    <head>
        <title>Settings</title>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Lifestyle Store</a>
                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Cart</a></li>
                        <li><a href="stting.php"><span class="glyphicon glyphicon-cog"></span>&nbsp; Settings</a></li>
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <div class="container" style="align-content: center" id="w">
            <div class="row row_style">
                <div class="col-xs-5 col-xs-offset-3">
  
                    <div class=" panel panel-primary">
                        <div class="panel-heading">
                            <h4>Change Password</h4>
                        </div>
                        
                        
                     <div class="panel-body">
                    <form action="setting_script.php" method="POST">
                        
                         <div class="form-group">
                           <label for="op">Old Password</label>
                           <input type="password" class="form-control" name="op" required>
                       </div>
                        <div class="form-group">
                           <label for="np">New Password</label>
                           <input type="password" class="form-control" name="np" required>
                       </div> 
                            <div class="form-group">
                           <label for="rp">Re-type New Password</label>
                           <input type="password" class="form-control" name="rp" required>
                       </div> 
                            <button type="submit" class="btn btn-md btn-primary btn-md">Change</button>
                        
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
         <?php include 'includes/footer.php';?>
    </body>
</html>
