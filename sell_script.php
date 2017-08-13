<?php

require("includes/common.php");
session_start();

// Getting the values from the sell page using $_POST[] method and redirecting to location.php

$listtype = $_POST['list_type'];

$flattype = $_POST['flat_type'];

$query = "INSERT INTO registered_flats(users_id, list_type, flat_type) VALUES('". $_SESSION['users_id'] ."','" . $listtype . "','" . $flattype . "')";
mysqli_query($con, $query) or die(mysqli_error($con));

$sql = "SELECT * FROM registered_flats WHERE list_type= '" . $listtype . "' AND flat_type='" . $flattype . "'";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$_SESSION['flat_id'] = $row['flat_id'];

?>

<script>
  alert('Do you want to submit?');
  window.location.href='location.php';
</script>