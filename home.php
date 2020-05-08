<?php
  //Add login validation here
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
      <ul>
        <li><a href="mybooks.php">My Books</a></li>
        <li><a href="lent.php">Lent Books</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div>
      <h1> Hi! <?php echo $_SESSION['fname']; ?>, Welcome to Readers' Point</h1>
    </div>

  </body>
</html>
