<?php

require("includes/common.php");
session_start();

$price = $_POST['price'];
$price = mysqli_real_escape_string($con, $price);

$perprice = $_POST['price_per_sq_ft'];
$perprice = mysqli_real_escape_string($con, $perprice);

$maintain = $_POST['maintenance'];
$maintain = mysqli_real_escape_string($con, $maintain);

$mrent = $_POST['min_rental'];
$mrent = mysqli_real_escape_string($con, $mrent);

$bokamt = $_POST['booking_amount'];
$bokamt = mysqli_real_escape_string($con, $bokamt);

$query = "UPDATE registered_flats SET price = '". $price ."', price_per_sq_ft = '". $perprice ."', maintenance = '". $maintain ."', min_rental = '". $mrent ."', booking_amount = '". $bokamt ."' WHERE flat_id = '". $_SESSION['flat_id'] ."'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>

<script>
  alert('Do you want to submit?');
  window.location.href='features.php';
</script>




