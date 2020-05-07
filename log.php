<?php
  require 'dbconnect.php';
  session_start();
  $a=$_POST["s_id"];
  $b=$_POST["psswd"];
  $result=mysqli_query($conn,"SELECT * FROM users WHERE st_id='$a'") or die("failed".mysqli_error($conn));
  $row=mysqli_fetch_array($result);
  //echo "hi";
  if($row['st_id']==$a && password_verify($b,$row['password'])) { //check here
    $_SESSION['st_id']=$a;
    $_SESSION['fname']=$row['fname'];
    header('Location:home.php');
  }
  else {
    echo "<script>
    var r=confirm('Invalid Username or Password');
    if(r) {
      window.location.href='login.php';
    }
    </script>";
  }
?>
