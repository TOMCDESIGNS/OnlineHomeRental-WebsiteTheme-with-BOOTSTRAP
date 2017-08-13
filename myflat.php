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
        <title>Flats</title>
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
        <style>
            .context {
                width: 251px;
                display: inline-block;
                padding: 4px;
                margin-right: 10px;
                margin-bottom: 20px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: border .2s ease-in-out;
                -o-transition: border .2s ease-in-out;
                transition: border .2s ease-in-out;
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
                    <li class="list-group-item active">My Flats</li>
                    <li class="list-group-item"><a href="upload.php">Upload New</a></li>
                    <li class="list-group-item"><a href="manage.php">Manage</a></li>
                    <li class="list-group-item"><a href="edit.php">Edit</a></li>
                    <li class="list-group-item"><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="col-sm-10">
            <?php
             require("includes/common.php");
				
			 if(isset($_GET['delete'])){
				 $img = $_GET['delete'];
				 $upload = unlink(''.$img);
			 if($upload){
				 $delete = $con ->prepare("delete from flat_images where image_id = '". $_SESSION['image_id'] ."'");
				 if($delete ->execute()){
					 ?>
					 <div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Deleted!</strong> File successfully deleted.
                     </div>
                 <?php
				 }else{
					 ?>
					 <div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Error!</strong> Database connection error .
                     </div>
			    <?php
				 }
			 }
				 else{
				 ?>
					 <div class="alert alert-warning alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Error!</strong> File cannot be deleted.
                     </div>
                     <?php
			 }
			 }
				
             $sql = "SELECT * FROM flat_images WHERE flat_id ='".$_SESSION['flat_id']."'";
             $result = mysqli_query($con, $sql);
             while ($row = mysqli_fetch_array($result)) {


                 echo "<div class='context'>";
                 echo "<div id='img_div'>";
                 echo "</span>";
                 echo "<img height='200' width='240' src='". $row['image'] ."'>";
                 echo "<div class='caption text-center'>";
                 echo "<p>".$row['type']."</p>";?>
                 
				 <p><a href="?delete=<?php echo $row["image"]?>&id=<?php echo $row["image_id"]?>&type=<?php echo $row["type"]?>" class="btn btn-danger" role="button">Delete</a></p>
				 
				 <?php
                 echo "</div>";
                 echo "</div>";
                 echo "</div>";
				
			 }?>
			 <p>Need to upload more images</p>
				<p><a href="upload.php">Upload Here!</a></p>
			</div>
		</div>
	 </body>
	 </html>