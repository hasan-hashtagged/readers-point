<?php
  $host='localhost';
  $user='hasan';
  $psswd='asdf';
  $db='test';
  $conn=mysqli_connect($host,$user,$psswd,$db);
  if(mysqli_connect_errno()) {
    echo "failed to connect the database".mysqli_connect_error();
  }
?>
