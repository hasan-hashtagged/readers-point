<?php
  require 'dbconnect.php';
  $id=$_POST["roll"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $mail=$_POST["email"];
  $psswd=password_hash($_POST["psswd"],PASSWORD_BCRYPT);
  //echo $id.$fname.$lname.$mail;
  $result=mysqli_query($conn,"SELECT * FROM users WHERE email='$mail'") or die(mysqli_error($conn));
  $row_count=mysqli_num_rows($result);
  if($row_count>0) {
    echo "User with this email ID already exists";
  }
  else {
    //echo '$fname';
    mysqli_query($conn,"INSERT INTO users (`st_id`,`fname`,`lname`,`email`,`password`) VALUES ('$id','$fname','$lname','$mail','$psswd');") or die(mysqli_error($conn));
    echo "<script>
      var r=confirm('Successfully Registered');
      if(r) {
        window.location.href='index.php';
      }
    </script>";
  }
$conn.close();
?>
