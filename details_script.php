<?php

require("includes/common.php");
session_start();

$bhk = $_POST['bhk'];
$bhk =  mysqli_real_escape_string($con, $bhk);

$area = $_POST['buildup_area'];
$area =  mysqli_real_escape_string($con, $area);

$areau = $_POST['buildup_area_unit'];
$areau =  mysqli_real_escape_string($con, $areau);

$carea = $_POST['carpet_area'];
$carea =  mysqli_real_escape_string($con, $carea);

$careau = $_POST['carpet_area_unit'];
$careau =  mysqli_real_escape_string($con, $careau);

$broom = $_POST['bedroom'];
$broom =  mysqli_real_escape_string($con, $broom);

$bathroom = $_POST['bathroom'];
$bathroom =  mysqli_real_escape_string($con, $bathroom);

$balconies = $_POST['balconies'];
$balconies =  mysqli_real_escape_string($con, $balconies);

$hall = $_POST['hall'];

$proom = $_POST['puja_room'];

$sroom = $_POST['study_room'];

$serroom = $_POST['servant_room'];

$others = $_POST['others'];

$availability = $_POST['availability'];
$availability =  mysqli_real_escape_string($con, $availability);

$floor = $_POST['floor'];
$floor =  mysqli_real_escape_string($con, $floor);

$query = "UPDATE registered_flats SET bhk = '". $bhk ."', buildup_area = '". $area ."', buildup_area_unit = '". $areau ."', carpet_area = '". $carea ."', carpet_area_unit = '". $careau ."', bedroom = '". $broom ."', bathroom = '". $bathroom ."', balconies = '". $balconies ."', availability = '". $availability ."', floor = '". $floor ."',hall = '". $hall ."',puja_room = '". $proom ."',study_room = '". $sroom ."', servant_room = '". $serroom ."',others = '". $others ."' WHERE flat_id = '". $_SESSION['flat_id'] ."'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>

<script>
  alert('Do you want to submit?');
  window.location.href='pricing.php';
</script>