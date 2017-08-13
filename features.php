<?php
require("includes/common.php");
/* For Login Users only Page
====Session Variable ====
if (!isset($_SESSION['email'])) 
{header('location: index.php');
}*/

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Features</title>
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
            <text fill="#000" font-size="20" font-family="Oswald" x="35" y="56">68%</text>
        </svg></li>
                        <li class="list-group-item"><a href="sell.php"><span class="glyphicon glyphicon-list-alt"> About</span></a></li>
                        <li class="list-group-item"><a href="location.php"><span class="glyphicon glyphicon-map-marker"> Location</span></a></li>
                        <li class="list-group-item"><a href="details.php"><span class="glyphicon glyphicon-object-align-bottom"> Details</span></a></li>
                        <li class="list-group-item"><a href="pricing.php"><span class="glyphicon glyphicon-usd"> Pricing</span></a></li>
                        <li class="list-group-item active"><span class="glyphicon glyphicon-gift"> Features</span></li>
                    </ul>
                </div>
                <br>
                <div class="col-sm-8">
                <br>
                <br>
                <form class="form-inline" action="features_script.php" method="post" enctype="multipart/form-data">
                    <h4>Amenities:</h4><br>
                    
                        <div class="form-group">
                            <h4>Additional Facilities:</h4>
                            <div class="checkbox" required="true">
                                <label><input type="hidden" name="lift" value="no">
                                       <input type="checkbox" name="lift" value="yes"> 
                                Lift</label>
                                <label><input type="hidden" name="pbackup" value="no"> 
                                       <input type="checkbox" name="pbackup" value="yes">
                                Power Back-up</label>
                                <label><input type="hidden" name="park" value="no"> 
                                       <input type="checkbox" name="park" value="yes">
                                Park</label>
                                <label><input type="hidden" name="maintain_staff" value="no"> 
                                       <input type="checkbox" name="maintain_staff" value="yes">
                                Maintenance staff</label>
                                <label><input type="hidden" name="visit_parking" value="no"> 
                                       <input type="checkbox" name="visit_parking" value="yes">
                                Visitor Parking</label>
                                <label><input type="hidden" name="water_store" value="no"> 
                                       <input type="checkbox" name="water_store" value="yes"> 
                                Water storage</label>
                                <label><input type="hidden" name="interim_facility" value="no"> 
                                       <input type="checkbox" name="interim_facility" value="yes">
                                Interim Facility</label>
                                <label><input type="hidden" name="alarm" value="no"> 
                                       <input type="checkbox" name="alarm" value="yes">
                                Security/fire alarm</label>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <h4>Building Features:</h4>
                            <div class="checkbox" required="true">
                                <label><input type="hidden" name="swim_pool" value="no"> 
                                       <input type="checkbox" name="swim_pool" value="yes"> 
                                Swimming Pool</label>
                                <label><input type="hidden" name="gym" value="no"> 
                                       <input type="checkbox" name="gym" value="yes">
                                Gym/Fitness Centre</label>
                                <label><input type="hidden" name="clubhouse" value="no"> 
                                       <input type="checkbox" name="clubhouse" value="yes"> 
                                Clubhouse/ community centre</label>
                                <label><input type="hidden" name="security" value="no"> 
                                       <input type="checkbox" name="security" value="yes">
                                Security personnel</label>
                                <label><input type="hidden" name="shopping_hub" value="no"> 
                                       <input type="checkbox" name="shopping_hub" value="yes">
                                Shopping Centre</label>
                                <label><input type="hidden" name="water_disposal" value="no"> 
                                       <input type="checkbox" name="water_disposal" value="yes"> 
                                Waste disposal</label>
                            </div>



                            <br><br>
                            <h4>Additional description</h4>
                            
                            <textarea name="description" rows="5" cols="80" placeholder= "Write something about your property" required></textarea>

                            <div class="col-sm-12 form-group"><br>
                                <button type="submit" name="submit">Submit</a></button>
                            </div>

                    </form>
                    </div>
                </div>
            </div>
            <br>



    </body>

    </html>
