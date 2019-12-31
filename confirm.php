<?php
require 'includes/common.php';

?>

<html>
    <head>
        <title>Make Payment</title>
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
                            <h4>Confirm Your Order</h4>
                        </div>
                        
                        
                     <div class="panel-body">
                       <b style="font-size: 16px" class="text-warning">Make your Payment</b> 
                         <br><br>
                         <form action="success.php" method="POST">
                        
                         <div class="form-group">
                           <label for="card_details">Enter your Card Details</label>
                           <input type="text" class="form-control" name="card_details" required pattern=".{1,12}">
                           
                       </div>
                        <div class="form-group">
                           <label>Enter the CVV of your card</label>
                           <input type="password" class="form-control" required required pattern=".{1,3}">
                       </div> 
                           
                           
                            <button type="submit" class="btn btn-md btn-primary btn-md">Pay Securely</button>
                        
                    </form>
                    
                    </div>
                        
                       
                </div>
            </div>
        </div>
        </div>
     
      <?php include 'includes/footer.php';?>
    </body>
</html>