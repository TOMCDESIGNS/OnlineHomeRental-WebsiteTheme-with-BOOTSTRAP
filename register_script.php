<?php

require("includes/common.php");


if(isset($_POST['register'])) 
{
  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $persontype = $_POST['persontype'];
  $persontype = mysqli_real_escape_string($con, $persontype);

  $firstname = $_POST['firstname'];
  $firstname = mysqli_real_escape_string($con, $firstname);

  $lastname = $_POST['lastname'];
  $lastname = mysqli_real_escape_string($con, $lastname);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $phone = $_POST['phone'];
  $phone = mysqli_real_escape_string($con, $phone);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $location = $_POST['location'];
  $location = mysqli_real_escape_string($con, $location);

  $zip = $_POST['zip'];
  $zip = mysqli_real_escape_string($con, $zip);

 

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: new-signin.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: new-register.php?m1=' . $m);
  } else if (!preg_match($regex_num, $phone)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: new-register.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO users(persontype, firstname, lastname, email, phone, password, address, state, city, location, zip)VALUES('" . $persontype . "','" . $firstname . "','" . $lastname . "','" . $email . "', '" . $phone . "','" . $password . "','" . $address . "', '" . $state . "','" . $city . "','" . $location . "','" . $zip . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
  }
}
?>
<script>
  alert('Successfully registered');
  window.location.href='new-signin.php?success';
</script>
