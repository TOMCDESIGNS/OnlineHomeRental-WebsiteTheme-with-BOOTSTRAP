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
            <title>Upload Your Images</title>
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

            <style type="text/css">
                #content {
                    width: 100%;
                    margin: 0px auto;
					
                    border: 1px solid #FBF8F8;
                }
                
                form {
                    width: 50%;
                    margin: 20px auto;
                }
                
                form div {
                    margin-top: 1px;
                }
                
                
                
                .thumbnail{
                  width: 251px;
            }

            </style>
        </head>

        <body class="imagination">
            <br>
            <div class="container bg3">
                <br>
                <div class="col-sm-2">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="list-group-item "><a href="myflat.php">My Flats</a></li>
                        <li class="list-group-item active">Upload New</li>
                        <li class="list-group-item"><a href="manage.php">Manage</a></li>
                        <li class="list-group-item"><a href="edit.php">Edit</a></li>
                        <li class="list-group-item"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>

                <div class="col-sm-8">
                    <div id="content"><br>
                           <form method="post" action="upload.php" enctype="multipart/form-data">
                                <h4 class="text-center">Upload some photos:</h4><br>

                                <input type="file" name="image" id="image" multiple><br>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="tpye">Tag photo as:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="type" name="type" type="text" required>
                                <option> Select </option>
                                <option> Entrance </option>
                                <option> Hall </option>
                                <option> Bedroom </option>
                                <option> Kitchen </option>
                                <option> Bathroom </option>
                                <option> Balcony </option>
                                <option> Building </option>
                                <option> Floor Plan </option>
                                <option> Property Layout </option>
                                <option> Master Plan </option>
                                <option> Location Map </option>
                                <option> Others </option>
                                </select>
                                    </div><br><br><br>
                                    <div>
                                    <input type="submit" name="submit" value="Delete" style="background-color: white; color: black">
                                        <input type="submit" name="upload" value="upload image" style="background-color: white; color: black">
                                        
                                    </div><br>
                                    <?php
                            if(isset($_POST['upload']))
    {
  

  $image = $_FILES['image']['name'];
  $type = $_POST['type'];
  $uploadedfile = $_FILES['image']['tmp_name'];
        function getExtension($str) {

         $i = strrpos($str,".");
         if (!$i) { return ""; }

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
    }
  if ($image)
  {
  $filename = stripslashes($_FILES['image']['name']);
  $extension = getExtension($filename);
  $extension = strtolower($extension);
  if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
  {
        echo ' Unknown Image extension ';
        $errors=1;
  }
  else
  {

        if($extension=="jpg" || $extension=="jpeg" )
        {
            $uploadedfile = $_FILES['image']['tmp_name'];
            $src = imagecreatefromjpeg($uploadedfile);
        }
        else if($extension=="png")
        {
            $uploadedfile = $_FILES['image']['tmp_name'];
            $src = imagecreatefrompng($uploadedfile);
        }
        else
        {
            $src = imagecreatefromgif($uploadedfile);
        }

        list($width,$height)=getimagesize($uploadedfile);

        $newwidth=640;
        $newheight=480;
        $tmp=imagecreatetruecolor($newwidth,$newheight);


        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
        $filename = "images/".basename($_FILES['image']['name']);

        imagejpeg($tmp,$filename,100);

        imagedestroy($src);
        imagedestroy($tmp);
}
}


  $query = "INSERT INTO flat_images(users_id, flat_id, image, type) VALUES('". $_SESSION['users_id'] ."','". $_SESSION['flat_id'] ."','" . $filename . "','" . $type . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  
  $sql = "SELECT * FROM flat_images WHERE image= '" . $filename . "' AND type='" .  $type . "'";
  $result = mysqli_query($con, $sql) or die(mysqli_error($con));
  $row = mysqli_fetch_array($result);
  $_SESSION['image_id'] = $row['image_id'];
  ?>
    <script>
        alert('Your photo is uploaded');

    </script>
    <?php

    }
    ?></div>
     </form>
						<p align="center"><a href="myflat.php" style="text-decoration:none">View Uploaded Images Here!</a></p>
                           
                            <br>
                            
                    </div><br>
                </div>
        </body>

        </html>
