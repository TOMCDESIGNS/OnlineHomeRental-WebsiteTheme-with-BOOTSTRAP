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
        <title>Details</title>
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
            <text fill="#000" font-size="20" font-family="Oswald" x="35" y="56">28%</text>
        </svg></li>
                        <li class="list-group-item"><a href="sell.php"><span class="glyphicon glyphicon-list-alt"> About</span></a></li>
                        <li class="list-group-item"><a href="location.php"><span class="glyphicon glyphicon-map-marker"> Location</span></a></li>
                        <li class="list-group-item active"><span class="glyphicon glyphicon-object-align-bottom"> Details</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-usd"> Pricing</span></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-gift"> Features</span></li>
                    </ul>
                </div>
                <br>

                <div class="col-sm-8">
                  <div class="row">
                    <!-- Horizontal Form -->
                       
                        <h4>Give Us some information about your property</h4><br><br>

                    <form class="form-horizontal" action="details_script.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="bhk">BHK Type</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="bhk" name="bhk" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="area">Built up area</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="area" name="buildup_area" type="number" required="true">
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" id="area" name="buildup_area_unit" type="number" required>
          <option> Area Unit </option>
          <option> Sq.Ft. </option>
          <option> Sq. Yards </option>
          <option> Sq. Meter </option>
          <option> Acres </option>
          <option> Marla </option>
          <option> Cents </option>
          <option> Bigha </option>
          <option> Kottha </option>
          <option> Kanal </option>
          <option> Grounds </option>        
          <option> Ares </option>
          <option> Biswa </option>
          <option> Guntha </option>
          <option> Aankadam </option>
          <option> Hectares </option>
          <option> Rood </option>
          <option> Chataks </option>
          <option> Perch </option>
          </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="carea">Carpet area</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="carea" name="carpet_area" type="number" required="true">
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" id="carea" name="carpet_area_unit" type="number" required>
          <option> Area Unit </option>
          <option> Sq.Ft. </option>
          <option> Sq. Yards </option>
          <option> Sq. Meter </option>
          <option> Acres </option>
          <option> Marla </option>
          <option> Cents </option>
          <option> Bigha </option>
          <option> Kottha </option>
          <option> Kanal </option>
          <option> Grounds </option>        
          <option> Ares </option>
          <option> Biswa </option>
          <option> Guntha </option>
          <option> Aankadam </option>
          <option> Hectares </option>
          <option> Rood </option>
          <option> Chataks </option>
          <option> Perch </option>
          </select>
                            </div>
                        </div>
                    
                    

                    
                        <div class="form-group">
                            
                                <label class="control-label col-sm-2" for="broom">No. of bedroom</label>
                                <div class="col-sm-8">
                                <select class="form-control" id="broom" name="bedroom" required>
          <option>  </option>
          <option> 1 </option>
          <option> 2 </option>
          <option> 3 </option>
          <option> 4 </option>
          <option> 5 </option>
          <option> 6 </option>
          <option> 7 </option>
          <option> 8 </option>
          <option> 9 </option>
          <option> 9+ </option>
        </select></div>
                            
                        </div>
                        <div class="form-group">
                            
                                <label class="control-label col-sm-2" for="bathroom">No. of bathroom</label>
                                <div class="col-sm-8">
                                <select class="form-control" id="bathroom" name="bathroom" required>
                                
          <option>  </option>
          <option> 1 </option>
          <option> 2 </option>
          <option> 3 </option>
        </select></div>
                            
                        </div>
                        <div class="form-group">
                            
                                <label class="control-label col-sm-2" for="bal">No. of balconies</label>
                                <div class="col-sm-8">
                                <select class="form-control" id="bal" name="balconies" required>
          <option> 0 </option>
          <option> 1 </option>
          <option> 2 </option>
          <option> 3 </option>
          <option> More than 3</option>
        </select></div>
                            
                        </div>
                    
                    <br>
                    
                        <div class="form-group">

                            <h4>Other Portions</h4>
                            <div class="checkbox" required="true">
                                <label><input type="hidden" name="hall" value="no"> 
                                       <input type="checkbox" name="hall" value="yes"> 
                                Hall</label>
                                <label><input type="hidden" name="puja_room" value="no"> 
                                       <input type="checkbox" name="puja_room" value="yes">
                                Puja Room</label>
                                <label><input type="hidden" name="study_room" value="no"> 
                                       <input type="checkbox" name="study_room" value="yes">
                                Study Room</label>
                                <label><input type="hidden" name="servant_room" value="no"> 
                                       <input type="checkbox" name="servant_room" value="yes">
                                Servent Room</label>
                                <label><input type="hidden" name="others" value="no"> 
                                       <input type="checkbox" name="others" value="yes">
                                Others</label>
                            </div>
                        </div>
                    
                    <br>
                    
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <label for="avl">Availability</label>
                                <select class="form-control" id="avl" name="availability" required>
          <option> </option>
          <option> Ready to move </option>
          <option> Under Construction </option>
        
        </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <label for="floor">Floor</label>
                                <select class="form-control" id="floor" name="floor" required>
          <option> </option>
          <option> 1 </option>
          <option> 2 </option>
          <option> 3 </option>
          <option> 4 </option>
          <option> 5 </option>
          <option> 6 </option>
          <option> 7 </option>
          <option> 8 </option>
          <option> 9 </option>
          <option> 10 </option>
          <option> 10+</option></select>
                            </div>
                        </div>
                    <br>

                    
                        <div class="col-sm-12 form-group">
                            <button type="submit" name="submit">Next &raquo;</button>
                        </div>
                    </form>
</div>

                </div>
            </div>
        </div>
        </div>
    </body>

    </html>
