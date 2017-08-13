<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the customer.


  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $phone = $_POST['phone'];
  $phone = mysqli_real_escape_string($con, $phone);

  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $location = $_POST['location'];
  $location = mysqli_real_escape_string($con, $location);

  $zip = $_POST['zip'];
  $zip = mysqli_real_escape_string($con, $zip);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM customer WHERE email='$email'";
  $result = mysqli_query($con, $query)or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: individual-signin.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: individual-register.php?m1=' . $m);
  } else if (!preg_match($regex_num, $phone)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: individual-register.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO customer(name, email, phone, state, city, location, zip, password)VALUES('" . $name . "','" . $email . "', '" . $phone . "', '" . $state . "','" . $city . "','" . $location . "','" . $zip . "','" . $password . "')";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
    
  }
?>
<script>
  alert('Successfully registered');
  window.location.href='individual-signin.php?success';
</script>
<?php
$row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['users_id'] = $row['users_id'];
?>