<?php
  echo "<script>
    confirm('Login Successful');
  </script>";
  session_start();
?>
<html>
  <head>
    <title>Home</title>
  </head>
  <body>
    <div>
      <a href="logout.php">Logout</a>
    </div>
    <div>
      <h1> Hi! <?php echo $_SESSION['fname']; ?>, Welcome to Readers' Point</h1>
    </div>
    
  </body>
</html>
