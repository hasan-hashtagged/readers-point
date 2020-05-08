<?php
  //Add login validation here
  session_start();
  require 'dbconnect.php';
  $a=$_SESSION['st_id'];
  $result=mysqli_query($conn,"SELECT * FROM book WHERE Is_lent='0' AND o_id<>'$a';") or die(mysqli_error($conn));
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
        <li><a href="addbooks.php">Add</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div>
      <h1> Hi! <?php echo $_SESSION['fname']; ?>, Welcome to Readers' Point</h1>
    </div>
    <div>
      <table>
        <?php
          if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><button name="button1">Request</button></td>
        </tr>
      <?php }
      } ?>
      </table>
    </div>
  </body>
</html>
