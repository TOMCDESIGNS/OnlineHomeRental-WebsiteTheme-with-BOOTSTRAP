<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Deals</title>
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

<body style="margin: 0px;">
    <!-- Navigation Bar -->
    <?php include 'includes/header.php'; ?>

    <!-- Banner -->
    <div class="container-fluid text-center bg6">
        <div class="row">
            <div class="note">
                <h1>Exclusive Deals in your City, Grab them Now!!!</h1>
            </div>
        </div>
    </div><br><br>

    <div class="container text-center">
        <div class="col-sm-8 ">
            <div class="row ">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img src="img/of1.jpg" alt=" " width="400" height="300">
                        <p><strong>Upto 50%off</strong></p>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img src="img/of2.jpg" alt=" " width="400" height="300">
                        <p><strong>Upto 30%0ff</strong></p>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img src="img/of3.jpg" alt=" " width="400" height="300">
                        <p><strong>Upto 10%off</strong></p>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img src="img/of4.jpg" alt=" " width="400" height="300">
                        <p><strong>Upto 5%0ff</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="sel1">Sort By:</label>
                <select class="form-control" id="sel1">
          <option> All deals</option>
          <option> Popularity</option>
          <option> Value for Money</option>
        </select>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-6">
            <button>See More...</button>
        </div>
    </div><br>
    <br>
    <br>
    <br>
    <br>

     <!-- Login Modal -->

        <div id="myLogin" class="modal">

            <!-- Modal content -->
            <div class="modal-content text-center">
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

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
</body>


</html>
