<?php
require_once("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
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
<body class="imagination text-center"><br><br><br><br>
    <div class="container bg3"><br>
    <h2>Forgot Password</h2>

     <form>
        <div class="form-group">
          <label class="control-label col-sm-2" for="fp"></label>
          <div class="col-sm-offset-2 col-sm-4">
          <input type="text" id="fp" class="form-control" name="Email" placeholder="Enter Email ID">
          <h4>(Or submit an e-mail with a link to create a password will be sent)</h4>
          <br>
          <br>
          <button><a href="">Retrive Password</a></button><br><br>

          </div>
          </div>
     </form>
    </div>

</body>
</html>