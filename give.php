<?php
  require 'dbconnect.php';
  session_start();
  $a=$_POST['s_id'];
  $b=$_SESSION['st_id'];
  $c=$_POST['bname'];
  if($a==$b) {
    header('Location:mybooks.php');
    exit;
  }
  $result=mysqli_query($conn,"UPDATE book SET Is_lent='1',l_id='$a' WHERE o_id='$b' AND name='$c';")or die(mysqli_error($conn));
  header('Location:mybooks.php');
?>
