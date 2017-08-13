<?php
require("includes/common.php");
session_start();

/* For Login Users only Page
====Session Variable ====
if (!isset($_SESSION['email'])) 
{header('location: index.php');
}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
</head>
<body class="imagination">
     <br>
     <div class="container bg3">
     <br>
        <div class="col-sm-2">
     	<ul class="list-group">
     	  <li class="list-group-item active">Dashboard</a></li>
          <li class="list-group-item"><a href="myflat.php">My Flats</a></li>
          <li class="list-group-item"><a href="upload.php">Upload New</a></li>
          <li class="list-group-item"><a href="manage.php">Manage</a></li>
          <li class="list-group-item"><a href="edit.php">Edit</a></li>
          <li class="list-group-item"><a href="logout.php">Logout</a></li>
        </ul>
        </div>

        <div class="col-sm-10">
        <h3><?php echo "Hello ". $_SESSION['firstname'] ." ". $_SESSION['lastname']."!"?> 
       <br>Welcome</h3>
        <br>

          <div class="container">
          <div class="row text-center slideanim">
          <div class="col-sm-2">
            <div class="thumbnail">
           
              <p><strong>Total visits/clicks</strong></p>
              
              <p><strong>18</strong></p>
            </div>
          </div>
          
          <div class="col-sm-2">
            <div class="thumbnail">
           
              <p><strong>Total Revenue</strong></p>
              
              <p><strong>2000</strong></p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="thumbnail">
           
              <p><strong>Interested</strong></p>
              
              <p><strong>18</strong></p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="thumbnail">
           
              <p><strong>Not interested</strong></p>
              
              <p><strong>2</strong></p>
            </div>
          </div>
        	
        </div>
        	
        </div>


     </div>

</body>
</html>