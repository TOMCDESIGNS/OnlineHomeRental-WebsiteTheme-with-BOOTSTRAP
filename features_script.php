<?php

require("includes/common.php");
session_start();

$lift = $_POST['lift'];

$pbackup = $_POST['pbackup'];

$park = $_POST['park'];

$maintain = $_POST['maintain_staff'];

$visitpark = $_POST['visit_parking'];

$wstore = $_POST['water_store'];

$ifacility = $_POST['interim_facility'];

$alarm = $_POST['alarm'];

$spool = $_POST['swim_pool'];

$gym = $_POST['gym'];

$chouse = $_POST['clubhouse'];

$security = $_POST['security'];

$small = $_POST['shopping_hub'];

$wdisopse = $_POST['water_disposal'];

$description = $_POST['description'];

$query = "UPDATE registered_flats SET lift = '". $lift ."', pbackup = '". $pbackup ."', park = '". $park ."', maintain_staff  = '". $maintain ."', visit_parking = '". $visitpark ."', water_store = '". $wstore ."', interim_facility = '". $ifacility ."', alarm = '". $alarm ."', swim_pool = '". $spool ."', gym = '". $gym ."',clubhouse = '". $chouse ."', security = '". $security ."', shopping_hub = '". $small ."', water_disposal= '". $wdisopse ."', description = '". $description ."' WHERE flat_id = '". $_SESSION['flat_id'] ."'";

mysqli_query($con, $query) or die(mysqli_error($con));
?>

<script>
  alert('Do you want to submit?');
  window.location.href='dashboard.php';
</script>
