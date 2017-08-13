<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Rent Online</title>
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
		a .title{
			font-size: 200px;
		}
	</style>
</head>

<body style="margin: 0px;">
    <!-- Navigation Bar -->
    <?php include 'includes/header.php'; ?>

    <!-- Banner -->
    <div class="container-fluid text-center background">
        <div class="row">
            <div class="text">
                <h1 class="text-uppercase" style="color: white; font-size: 50px">FIND YOUR DESTINATION</h1>
            </div>
            
        </div>
    </div>
    
    <script language="javascript">
        populateStates("state", "city");

    </script>

    <div class="container-fluid text-center bg11">
        <div class="row">
            <br>
            <br>
            <h1>EXPLORE REAL ESTATE</h1>
            <br>
            <div class="checkbox" required="true">
                <div class="col-sm-offset-2 col-sm-1">
                    <label><input type="hidden" name="Assam" value="no">
                                       <input type="checkbox" name="Assam" value="yes"> 
                                Assam</label></div>
                <div class="col-sm-1">
                    <label><input type="hidden" name="Shillong" value="no">
                                       <input type="checkbox" name="Shillong" value="yes"> 
									Shillong</label></div>
                <div class="col-sm-1">
                    <label><input type="hidden" name="Meghalaya" value="no">
                                       <input type="checkbox" name="Meghalaya" value="yes"> 
									Meghalaya</label></div>
                <div class="col-sm-1">
                    <label><input type="hidden" name="Tripura" value="no">
                                       <input type="checkbox" name="Tripura" value="yes"> 
                                Tripura</label></div>
                <div class="col-sm-1">
                    <label><input type="hidden" name="Mizoram" value="no">
                                       <input type="checkbox" name="Mizoram" value="yes"> 
									Mizoram</label></div>
                <div class="col-sm-1">
                    <label><input type="hidden" name="Nagaland" value="no">
                                       <input type="checkbox" name="Nagaland" value="yes"> 
									Nagaland</label></div>
                <div class="col-sm-2">
                    <label><input type="hidden" name="Arunachal Pradesh" value="no">
                                       <input type="checkbox" name="Arunachal Pradesh" value="yes"> 
									Arunachal Pradesh</label></div><br><br>

                <div class="col-sm-offset-4 col-sm-4">
                    <div class="form-group">
                        <label for="property">Property Type:</label>
                        <select class="form-control" id="property">
                            <optgroup label="Residential">
                              
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
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4">
                                <label for="avl">Status</label>
                                <select class="form-control" id="avl" name="availability" required>
          <option> New Launch</option>
          <option> Ready to move </option>
          <option> Under Construction </option>
        
        </select>
                            </div>
                        </div>
			</div>
		</div><br><br>
	</div>
	
	<div class="container-fluid text-center"><br><br>
	<div class="col-sm-9">
		<h2 style="text-align: left">Featured Projects</h2>
		
		<div class="row text-center slideanim">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            
                            <a href="#" title="Assam Guwahati, Chandmari" data-toggle="popover" data-trigger="hover" data-content="Guwahati, Chandmari. Price:Rs.18000"><img src="img/01.jpg" alt="" width="400" height="300"></a>
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:Chandmari</p>
                            <p style="color: #B0ACAC">Price:Rs. 18000</p>
						</div></div>
                        <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="img/02.jpg" alt="" width="400" height="300">
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:Narengi</p>
                            <p style="color: #B0ACAC">Price:Rs. 16000</p>
							</div></div>
                        <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="img/03.jpg" alt="" width="400" height="300">
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:Panbazar</p>
                            <p style="color: #B0ACAC">Price:Rs. 15000</p>
                        </div></div>
                        <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="img/04.jpg" alt="" width="400" height="300">
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:GS Road</p>
                            <p style="color: #B0ACAC">Price:Rs. 15000</p>
                        </div></div><br>
                        <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="img/05.jpg" alt="" width="400" height="300">
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:Bhangaghar</p>
                            <p style="color: #B0ACAC">Price:Rs. 15000</p>
                        </div></div>
                      
                        
		</div></div>
		<div class="col-sm-3">
		<h4 style="color: #5786D8">Sponsored Projects</h4>
			
                        <div class="thumbnail">
                            <img src="img/06.jpg" alt="" width="400" height="300">
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:Ganeshguri</p>
                            <p style="color: #B0ACAC">Price:Rs. 25000</p>
                        </div>
                        <div class="thumbnail">
                            <img src="img/f1.jpg" alt="" width="400" height="300">
                            <h4>GUWAHATI</h4>
                            <p style="color: #B0ACAC">Location:Ganeshguri</p>
                            <p style="color: #B0ACAC">Price:Rs. 20000</p>
                        </div>
		</div>
		
		</div>


</body>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</html>