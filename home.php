<?php
  session_start();
  if(!isset($_SESSION['st_id'])) {
    header("Location:index.php");
    exit;
  }
  require 'dbconnect.php';
  $a=$_SESSION['st_id'];
  $result=mysqli_query($conn,"SELECT * FROM book WHERE Is_lent='0' AND o_id<>'$a';") or die(mysqli_error($conn));
?>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>
  <body>
    <div class="topbar">
      <span>
        <ul>
          <li><a href="mybooks.php">My Books</a></li>
          <li><a href="lent.php">Lent Books</a></li>
          <li><a href="addbooks.php">Add</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <h2>Hi! <?php echo $_SESSION['fname']; ?>, Welcome to Readers' Point</h2>
      </span>
    </div>
    <div>
      <table class="container" align="center">
        <?php
          if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td>
            <?php echo $row['name'];?>
          </td>
          <td>
            <form action="request.php" method="post">
              <input type="hidden" name="oid" value="<?php echo $row['o_id']; ?>"/>
              <input type="hidden" name="bname" value="<?php echo $row['name']; ?>"/>
              <input type="submit" name="subm" id="sub" value="Request"/>
            </form>
          </td>
        </tr>
      <?php }
      } ?>
      </table>
    </div>
  </body>
</html>
