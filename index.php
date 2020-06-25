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
      <div class="metainfo">
        <h2> Contact Us: </h2>
        <address>
          Email: info@example.com<br/><br/>
          Call Us: +91 0987654321<br/><br/>
          Our Offices: Bangalore<br/><br/>
        </address>
        <h2>About Us:</h2>
        <p text-decoration="italics">We at Young App Solution work for Web development. Our works include, but not limited to, Web App development, Website development and Android App development.
          We have collaborated with various enterprises in these development. For any queries, Please contact us.
        </p>
      </div>
  </body>
</html>
