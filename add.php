<?php
  require 'dbconnect.php';
  session_start();
  $a=$_SESSION['st_id'];
  $b=$_POST['bname'];
  mysqli_query($conn,"INSERT INTO book (`o_id`,`name`,`Is_lent`) VALUES ('$a','$b','0');") or die(mysqli_error($conn));
  $conn->close();
  header('Location:home.php');
?>
