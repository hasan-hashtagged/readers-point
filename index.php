<?php
  require 'dbconnect.php';
  $result=mysqli_query($conn,"SELECT * FROM book;") or die(mysqli_error($conn));
?>
<html>
  <head>
    <title>First</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
  </head>
  <body>
      <div class="topbar">
        <span>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="signup.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </span>
        <h2>Welcome to Readers' Point.</h2>
      </div>
      <div class="container">
        <h3>Books available</h3>
      </div>
      <div>
        <table class="container" align="center">
          <?php
            if(mysqli_num_rows($result)>0) {
              while($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
          </tr>
        <?php }
      }?>
        </table>
      </div>
  </body>
</html>
