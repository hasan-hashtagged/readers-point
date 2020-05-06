<?php
  require 'dbconnect.php';
  $id=$_POST["roll"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $mail=$_POST["email"];
  $psswd=$_POST["psswd"];
  //echo $id.$fname.$lname.$mail;
  $result=mysqli_query($conn,"SELECT * FROM users WHERE email='$mail'") or die(mysqli_error($conn));
  $row_count=mysqli_num_rows($result);
  if($row_count>0) {
    echo "User with this email ID already exists";
  }
  else {
    //echo '$fname';
    mysqli_query($conn,"INSERT INTO users (`st_id`,`fname`,`lname`,`email`,`password`) VALUES ('$id','$fname','$lname','$mail','$psswd');") or die(mysqli_error($conn));
    header('Location:index.php');
  }
?>
