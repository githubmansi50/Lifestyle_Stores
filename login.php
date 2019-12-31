<?php require 'includes/common.php';?>


<html>
    <head>
        <title>Login</title>
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
                            <h4>Login</h4>
                        </div>
                        
                        
                     <div class="panel-body">
                       <b style="font-size: 16px" class="text-warning">Login to make a purchase</b> 
                         <br><br>
                    <form action="login_submit.php" method="POST">
                        
                         <div class="form-group">
                          <label for="email">E-mail</label>
                           <input type="email" class="form-control" name="email" required>
                           
                       </div>
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" class="form-control" name="password" required pattern=".{6,}">
                          
                       </div> 
                           
                            <button type="submit" class="btn btn-md btn-primary btn-md">Login</button>
                        
                    </form>
                    
                    </div>
                        
                        <div class="panel-footer">
                            <b>
                            Don't have an account? <a href="signup.php">Sign Up</a>
                            </b>
                        </div>
                </div>
            </div>
        </div>
        </div>
     
      <?php include 'includes/footer.php';?>
    </body>
</html>
