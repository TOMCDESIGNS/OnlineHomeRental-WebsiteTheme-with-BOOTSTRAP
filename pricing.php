<?php
require("includes/common.php");
;
/* For Login Users only Page
====Session Variable ====
if (!isset($_SESSION['email'])) 
{header('location: index.php');
}*/

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Pricing</title>
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
                        <li class="list-group-item"><svg width="100" height="100">
          <circle cx="50" cy="50" r="40" stroke="black" stroke-width="2" fill="#F7BE81"/>
            <text fill="#000" font-size="20" font-family="Oswald" x="35" y="56">57%</text>
        </svg></li>
                        <li class="list-group-item"><a href="sell.php"><span class="glyphicon glyphicon-list-alt"> About</span></a></li>
                        <li class="list-group-item"><a href="location.php"><span class="glyphicon glyphicon-map-marker"> Location</span></a></li>
                        <li class="list-group-item"><a href="details.php"><span class="glyphicon glyphicon-object-align-bottom"> Details</span></a></li>
                        <li class="list-group-item active"><span class="glyphicon glyphicon-usd"> Pricing</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-gift"> Features</span></li>
                    </ul>
                </div>
                <br>

                <div class="col-sm-8">
                
                    <h4>Pricing Details:</h4>
                    <br>
                      <form class="form-horizontal" action="pricing_script.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="price">Price(Rs.)</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="price" name="price" required="true" placeholder="Rs.">
                            
                          <div class="checkbox">
                                <label><input type="checkbox"> All Inclusive Price </label>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="perprice">Price(per sq.ft.)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="perprice" name="price_per_sq_ft" required="true" placeholder="Rs.">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="maintain">Maintenance(Rs.)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="maintain" name="maintenance" required="true" placeholder="Rs.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="mrent">Minimum Rental(Rs.)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="mrent" name="min_rental" required="true" placeholder="Rs.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="bokamt">Booking Amount(Rs.)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="bokamt" name="booking_amount" required="true" placeholder="Rs.">
                            </div>
                        </div>

                        <div class="col-sm-12 form-group">
                            <button type="submit" name="submit">Next &raquo;</a></button>
                        </div>

                  
                    </form>
                </div>
            </div>
        </div>

    </body>

    </html>
