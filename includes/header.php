<div class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index.php" style=" font-family: 'Montserrat', sans-serif;">Lifestyle Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email'])) {
 ?>
 <li><a href = "user.php" style=" font-family: 'Montserrat', sans-serif;"><span class = "glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'] ?> </a></li>
 <li><a href = "cart.php" style=" font-family: 'Montserrat', sans-serif;"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href = "setting.php" style=" font-family: 'Montserrat', sans-serif;"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>
 <li><a href = "logout.php" style=" font-family: 'Montserrat', sans-serif;"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
 ?>
 <?php } else {
 ?>
 <li><a href="signup.php" style=" font-family: 'Montserrat', sans-serif;"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
 <li><a href="login.php" style=" font-family: 'Montserrat', sans-serif;"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</div>
