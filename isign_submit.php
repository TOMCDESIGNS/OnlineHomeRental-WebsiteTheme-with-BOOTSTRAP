<?php

require("includes/common.php");
session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM customer WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0)
{ 
?>
<script>
     alert('Enter correct email or password');
     window.location.href='index.php?fail';
</script>
<?php
}
else
{  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['name'] = $row['name'];
?>
<script>
     alert('You have successfully login');
     window.location.href='customer_dashboard.php?success';
</script>
<?php
}
?>