<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Owner Dashboard signin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Minified CSS -->
	  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!--jQuery library--> 
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!--Minified JS-->
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Stylesheets -->
	  <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <style>
		.container1{
		   width: 600px;
		}
		button{
    font-size: 15px;
    color: #FFFFFF;
    background-color: #B01517;
    border: 1px solid red;
}
		
	</style>

</head>

<body class="bg9" style="margin: 0px;">
  <!-- Navigation Bar -->
  <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> LOGO</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <p class="navbar-text">Own/Manage a home?</p>
      <button class="btn btn-danger navbar-btn" style="font-size: 15px; color: #FFFFFF; background-color: dimgrey; border: 1px solid #FFF9F9;"><a href="new-register.php" style="color: aliceblue; text-decoration: none">REGISTER HERE</a></button>
    </ul>
  </div>
  </nav>

  <div class="container1 text-center bg10">
 <div class="row">

  <div class=""><br><br>
  <form action="signin_submit.php" method="post">
    <h4><span class="glyphicon glyphicon-log-in lg"></span>  LOG IN</h4><br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email" required="true">
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="true">
    </div>
    <center><h3>Forgot Password? <a href="forgotpassword.php">Reset Now!</a></h3></center>
    <br>
    <div class="form-group">
		<center><button type="submit" name="submit"><h4>Log In</h4></button></center>
        </div><br>
</form>
 </div>

  

 </div>
 </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

 <!-- Footer --> 
     <?php include 'includes/footer.php'; ?>

 </body>
 </html>