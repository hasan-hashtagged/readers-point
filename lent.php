<?php
  require 'dbconnect.php';
  session_start();
  $a=$_SESSION['st_id'];
  $result=mysqli_query($conn,"SELECT * FROM book WHERE l_id='$a';") or die(mysqli_error($conn));
  echo mysqli_num_rows($result);
?>
