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
        <title>Location</title>
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
                <div class="col-sm-4">
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item">
                        <svg width="100" height="100">
          <circle cx="50" cy="50" r="40" stroke="black" stroke-width="2" fill="#F7BE81"/>
            <text fill="#000" font-size="20" font-family="Oswald" x="40" y="56">8%</text>
         </svg></li>
                        <li class="list-group-item"><a href="sell.php"><span class="glyphicon glyphicon-list-alt"> About</span></a></li>
                        <li class="list-group-item active"><span class="glyphicon glyphicon-map-marker"> Location</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-object-align-bottom"> Details</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-usd"> Pricing</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-gift"> Features</span></li>
                    </ul>
                </div>

                <br>
                <div class="col-sm-offset-1 col-sm-7">
                    <div class="row">
                     
                      <form class="form-horizontal" action="location_script.php" method="post" enctype="multipart/form-data">
                        <div class="col-sm-6 form-group">
                           
                            <h4>Where is the property located?</h4>
                            <input class="form-control" id="address" name="address" placeholder="Enter Your Address" type="text" required="true"><br>
                            <input class="form-control" id="city" name="city" placeholder="Type City Name" type="text" required="true"><br>
                            <input class="form-control" id="state" name="state" placeholder="Type State Name" type="text" required="true"><br>
                            <input class="form-control" id="zip" name="zip" placeholder="Zip Code" type="text" required="true"><br>
                            <input class="form-control" id="landmark1" name="landmark" placeholder="Landmark1" type="text" required="true"><br>
                            <input class="form-control" id="landmark2" name="landmark2" placeholder="landmark2" type="text"><br>

                            <div class="col-sm-12 form-group">
                                <button type="submit" name="submit">Next &raquo;</a></button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
          </div>

    </body>

    </html>
