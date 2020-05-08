<?php
  require 'dbconnect.php';
  session_start();
  $a=$_SESSION['st_id'];
  //echo $a;
  $result=mysqli_query($conn,"SELECT * FROM book WHERE o_id='$a';") or die(mysqli_error($conn));
  //echo " ".mysqli_num_rows($result);
?>
<html>
  <head>
    <title>MY BOOKS</title>
  </head>
  <body>
    <div>
      <table>
        <?php
          if($result>0) {
            while($row=mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <?php
      }
    } ?>
      </table>
    </div>
  </body>
</html>
