<?php
  require 'dbconnect.php';
  session_start();
  $a=$_SESSION['st_id'];
  $result=mysqli_query($conn,"SELECT * FROM book WHERE l_id='$a';") or die(mysqli_error($conn));
?>
<html>
  <head>
    <title>Lent Book</title>
  </head>
  <body>
    <div>
      <table>
        <?php
          if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $row['name'];?></td>
          <td>
            <form action="giveback.php" method="post">
              <input type="hidden" name="bname" value="<?php echo $row['name'];?>"/>
              <input type="hidden" name="oid" value="<?php echo $row['o_id'];?>"/>
              <input type="submit" name="subm" value="Return"/>
            </form>
          </td>
        </tr>
      <?php }
      }?>
      </table>
    </div>
  </body>
</html>
