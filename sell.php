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
    <html lang="en">

    <head>
        <title>Sell</title>
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
        <br>
        <div class="container text-center bg3">
            <div class="row">
                <h3><?php echo "Welcome ". $_SESSION['firstname'] ." ". $_SESSION['lastname']."!"?></h3>
                <br>
                <a href="#profile1"><button><h4>Complete your profile </h4></button></a>
                <br>
                <br>
            </div>
        </div>
        <br>
        <br>

        <div class="container text-center bg3">
            <div class="row">
                <div class="col-sm-4">
                    <div id="about"></div>
                    <br>
                    <div id="profile1"></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <svg width="100" height="100">
            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="2" fill="#F7BE81"/>
            <text fill="#000" font-size="20" font-family="Oswald" x="40" y="56">0%</text>
         </svg></li>
                        <li class="list-group-item active"><span class="glyphicon glyphicon-list-alt"> About</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-map-marker"> Location</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-object-align-bottom"> Details</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-usd"> Pricing</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-gift"> Features</span></li>
                    </ul>
                </div>
                <br>
                
                <div class="col-sm-8">
                    <form class="form-horizontal" action="sell_script.php" method="post" enctype="multipart/form-data">
                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="form-group"><br>
                                <label for="Type">List property for:</label>
                                <select class="form-control" id="Type" name="list_type" required>
                              <option> </option>
                              <option> Rent </option>
                              <option> Lease </option>
                              <option> Paying Guest </option>
                            </select>
                            <i>(Select an option)</i>
                            </div>
                        </div>

                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="form-group"><br>
                                <label for="propertyType">Property Type:</label>
                                <select class="form-control" id="propertyType" name="flat_type" required>
                            <optgroup label="Residential">
                              <option> </option>
                              <option> Residential Apartment </option>
                              <option> Residential Land </option>
                              <option> Independent House/Villa </option>
                              <option> Independent Builder Floor </option>
                              <option> Farm House </option>
                              <option> Studio Apartment </option>
                              <option> Other</option>
                            </optgroup>
                            <optgroup label="Commercial">
                                <option> Commercial Office/Space</option>
                                <option> Commercial Shops</option>
                                <option> Commercial Land/Inst. Land</option>
                                <option> Commercial Showrooms</option>
                                <option> Agricultural/Farm Land</option>
                                <option> Industrial Lands/Plots</option>
                                <option> Factory</option>
                                <option> Ware House</option>
                                <option> Office IT Park</option>
                                <option> Hotel/Resorts</option>
                                <option> Guest-House/Banquet-Halls</option>
                                <option> Space in Retail Mall</option>
                                <option> Manufacturing</option>
                                <option> Business center</option>
                                <option> Time Share</option>
                                <option> Other</option>
                            </optgroup>
                            </select>
                            <i>(Select an option)</i>
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
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <form class="form-horizontal">
                        <div class="col-sm-12 form-group">
                            <button type="submit" name="submit">Next &raquo;</button>
                        </div>
                    </form>
                    </form>
                </div>
                
            </div>
        </div>

    </body>

    </html>