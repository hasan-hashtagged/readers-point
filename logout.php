<?php
  session_start();
  session_destroy();
  echo "<script>
    var r=confirm('Successfully Logged Out');
    if(r)
      window.location.href='index.php';
  </script>";
?>
