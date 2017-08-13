<?php
require("includes/common.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Individual Dashboard signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!--jQuery library-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!--Minified JS-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Stylesheets -->
    <script type="text/javascript" src="sort.js"></script>
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
                <p class="navbar-text">Already Registered?</p>
                <button class="btn btn-danger navbar-btn" style="font-size: 15px; color: #FFFFFF; background-color: dimgrey; border: 1px solid #FFF9F9;"><a href="new-signin.php" style="color: aliceblue; text-decoration: none">Login</a></button>
            </ul>
        </div>
    </nav>
    <div class="container1 text-center bg10">
        <br>
                   
                   <form class="form-horizontal" action="register_script.php" method="post" enctype="multipart/form-data">
                    <h3><span class="glyphicon glyphicon-user lg"></span><br>Register and rent your home for free</h3>
                    <br>
                    <div class="form-group"><br>
                                <label for="Type">You are a:</label>
                                <select class="form-control" id="Type" name="persontype" required>
                                   <option> </option>
                                   <option> Owner </option>
                                   <option> Dealer </option>
                                   <option> Builder </option>
                                </select>
                                <i>Select an option*</i>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="true" maxlength="10" size="10"></div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                    </div>
                    <div class="form-group">
                        <select class="form-control" required id="state" name="state" required="true"></select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" required id="city" name="city" placeholder="Enter City"></select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="location" placeholder="Location" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="zip" placeholder="Zip" required="true">
                    </div>
                    
                    

                    <button type="submit" name="register"><h4>Register</h4></button><br><br><br>
            </form>
		</div><br><br>
	
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        populateStates("state", "city");

    </script>
</body>
</html>








 