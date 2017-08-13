<?php

require("includes/common.php");
session_start();

$address = $_POST['address'];
$address = mysqli_real_escape_string($con, $address);

$city = $_POST['city'];
$city = mysqli_real_escape_string($con, $city);

$state = $_POST['state'];
$state = mysqli_real_escape_string($con, $state);

$zip = $_POST['zip'];
$zip = mysqli_real_escape_string($con, $zip);

$landmark = $_POST['landmark'];
$landmark = mysqli_real_escape_string($con, $landmark);



$query = "UPDATE registered_flats SET address = '". $address ."', city = '". $city ."', state = '". $state ."', zip = '". $zip ."', landmark = '". $landmark ."' WHERE flat_id = '". $_SESSION['flat_id'] ."'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>

<script>
  alert('Do you want to submit?');
  window.location.href='details.php';
</script> 