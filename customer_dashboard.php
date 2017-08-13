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
        <title>Dashboard</title>
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
                    <li class="list-group-item active">Interests</a></li>
			<li class="list-group-item"><a href="">Messages</a></li>
                    <li class="list-group-item"><a href="">Purchase</a></li>
                    <li class="list-group-item"><a href="">Reviews</a></li>
                    <li class="list-group-item"><a href="">Disputes</a></li>
                </ul>
            </div>
            
            <div class="col-sm-10">
            <h3><?php echo "Hello ". $_SESSION['name'] ."!"?> 	
            </div>
		
	</body>
</html>