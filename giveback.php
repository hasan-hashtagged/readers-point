<?php
  session_start();
  require 'dbconnect.php';
  $a=$_SESSION['st_id'];
  $b=$_POST['bname'];
  $c=$_POST['oid'];
  $result=mysqli_query($conn,"UPDATE book SET Is_lent='0',l_id='NULL' WHERE o_id='$c' AND name='$b';") or die(mysqli_error($conn));
  header('Location:home.php');
?>
