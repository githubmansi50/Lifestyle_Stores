<?php require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>

<html>
    <head>
        <title>Sign Up</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
       <?php
        include 'includes/header.php';
        ?>
        
        <div class="container" style="align-content: center; padding-top: 50px; margin-top: 50px" id="w">
            <div class="row row_style">
                <div class="col-xs-5 col-xs-offset-3">
  
                    <div class=" panel panel-primary">
                        <div class="panel-heading">
                            <h4>SIGN UP</h4>
                        </div>
                        
                        
                     <div class="panel-body">
                  
                    <form action="signup_script.php" method="POST">
                        
                         <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" name="name" required>
                         </div>
                      
                       <div class="form-group">
                           <label for="email">E-mail</label>
                           <input type="email" class="form-control" name="email" required>
                           
                       </div>
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" class="form-control" name="password" required pattern=".{6,}">
                       </div> 
                             <div class="form-group">
                           <label for="contact">Contact</label>
                           <input type="text" class="form-control" name="contact" required>
                       </div>  
                         <div class="form-group">
                           <label for="city">City</label>
                           <input type="text" class="form-control" name="city" required>
                       </div>
                         <div class="form-group">
                           <label for="address">Address</label>
                           <input type="text" class="form-control" name="address" required>
                       </div>
                            <button type="submit" class="btn btn-md btn-primary btn-md">Submit</button>
                        
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
       <?php include 'includes/footer.php';?>
    </body>
</html>
