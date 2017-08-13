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
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
    <!--jQuery library-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!--Minified JS-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Stylesheets -->
    <script type="text/javascript" src="sort.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <style>
        /* Center the loader */
        
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #585858;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }
        
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
        
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        /* Add animation to "page content" */
        
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }
        
        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0px;
                opacity: 1
            }
        }
        
        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }
        
        #myDiv {
            display: none;
            text-align: center;
        }
		
		.affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

    </style>

</head>
<!--Header Ends!-->

<!-- Body -->

<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>


    <!-- Loader Script -->
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }

    </script>


    <div style="display:none;" id="myDiv" class="animate-bottom">

        <!-- Navigation Bar -->
        <?php include 'includes/header.php'; ?>

        <!-- Banner -->
       
        <div class="container-fluid text-center">
          <div class="row">
          <div id="background">
           <div class="text">
                    <h1>FIND YOUR DESTINATION</h1>
           </div>
		  </div>
          </div>
		</div>
        
                   <!--
                    <div class="col-sm-offset-3 col-sm-6">

                    <form class="form-inline">
                        <div class="form-group">
                            <select class="form-control" required id="state" name="state"></select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" required id="city" name="city"></select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="location" placeholder="Location" required="true">
                        </div>
                        <div class="form-group">
                           <button type="submit"><span class="glyphicon glyphicon-search"> Search</span></button>
                        </div>
                    </form>
                    <script language="javascript">
            populateStates("state", "city");
		</script>
         </div>
         -->
        


        <!-- About Us Section -->
        <div class="container-fluid bg1">
            <div class="row">
                <h2><span class="glyphicon glyphicon-hand-down"></span><br>
                    <b>ABOUT US</b>
                </h2>
                
                <div class="container">
                    <h3>We are a growing community from Assam providing you the best home rentals throughout the state. Stay anywhere in Assam with the best housing and pricing with exclusive deals within.<br><br>Make the perfect deal with us!</h3><br><br>
                </div>
            </div>
        </div>



        <!-- Places for Rent Section -->
        <div class="container-fluid text-center bg2"><br>
            <h2><b>CHOOSE YOUR LOCATION</h2></b><br>
                <br>
                <div class="row text-center slideanim">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/01.jpg" alt="" width="400" height="300">
                            <p><strong>GUWAHATI</strong></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/02.jpg" alt="" width="400" height="300">
                            <p><strong>SHILLONG</strong></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/03.jpg" alt="" width="400" height="300">
                            <p><strong>MEGHALAYA</strong></p>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row text-center slideanim">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/04.jpg" alt="" width="400" height="300">
                            <p><strong>TRIPURA</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/05.jpg" alt="" width="400" height="300">
                            <p><strong>MIZORAM</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/06.jpg" alt="" width="400" height="300">
                            <p><strong>NAGALAND</strong></p>
                        </div>
                    </div>
                </div>
        </div>


        <!-- Contact Us Section-->
        <div class="container-fluid text-center bg7">
            <h3 style="font-size: 40px">Contact Us</h3>
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-3">
                            <h4>Contact us and we'll get back to you within 24 hours.</h4>
                            <h4><span class="glyphicon glyphicon-map-marker"></span> Guwahati, ASSAM</h4>
                            <h4><span class="glyphicon glyphicon-phone"></span> +91 9999999999 </h4>
                            <h4><span class="glyphicon glyphicon-envelope"></span> demo@bcompany.com</h4>
                        </div><br>
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-default pull-right" type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>




        <!-- Login Modal -->

        <div id="myLogin" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" style="color:black">&times;</span>
                    <center>
                        <h4 style="font-family:Oswald"><b><span class="glyphicon glyphicon-user lg"></span> Login</b></h4>
                    </center><br>
                    <ul class="nav nav-tabs">
    <li class="active" style="width: 50%"><a data-toggle="tab" href="#owner" >As Owner</a></li>
    <li style="width: 50%"><a data-toggle="tab" href="#individual">As Individual</a></li>
					</ul>

                </div>
                <div class="modal-body"><br>
                   <div class="tab-content">
                       <div id="owner" class="tab-pane fade in active">
                      <h4 style="font-family:Oswald;">Owner Account Details</h4>

                    <form action="login_submit.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email ID" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="true">
                        </div>
                        <div class="form-group">
                            <center><button type="submit" name="submit" style="background-color:#222020; color: white; padding: 10px; border: 2px solid #FFFFFF; font-family:Oswald;">Submit</a></button></center>

                        </div>
                        <center>
                            <h4 style="font-family:Oswald;">Forgot Password? <a href="forgotpassword.php">Reset Now!</a></h4>
                        </center>
                    </form>
    </div>
    <div id="individual" class="tab-pane fade">
      <h4 style="font-family:Oswald;">Individual Account Details</h4>

                    <form action="isign_submit.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email ID" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="true">
                        </div>
                        <div class="form-group">
                            <center><button type="submit" name="submit" style="background-color:#222020; color: white; padding: 10px; border: 2px solid #FFFFFF; font-family:Oswald;">Submit</a></button></center>

                        </div>
                        <center>
                            <h4 style="font-family:Oswald;">Forgot Password? <a href="forgotpassword.php">Reset Now!</a></h4>
                        </center>
                    </form>
    </div>
                    
                    <br>
                </div>
				</div>
                
            </div>
        </div>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
    </div>
</body>


<script>
    // Login modal
    // Get the modal
    var modal = document.getElementById('myLogin');

    // Get the button that opens the modal
    var btn = document.getElementById("Login");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

  

</html>
