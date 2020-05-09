<?php
  require 'dbconnect.php';
  $result=mysqli_query($conn,"SELECT * FROM book;") or die(mysqli_error($conn));
?>
<html>
  <head>
    <title>First</title>
  </head>
  <body>
      <div>
        <ul>
          <li><a href="signup.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      <div>
        <h2>Welcome to Readers' Point.</h2>
        <h3>Books available</h3>
      </div>
      <div>
        <table>
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
