<?php
  require 'dbconnect.php';
  session_start();
  if(!isset($_SESSION['st_id'])) {
    header('Location:login.php');
    exit;
  }
  $a=$_SESSION['st_id'];
  //echo $a;
  $result=mysqli_query($conn,"SELECT * FROM book WHERE o_id='$a';") or die(mysqli_error($conn));
  //echo " ".mysqli_num_rows($result);
?>
<html>
  <head>
    <title>MY BOOKS</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>
  <body>
    <div>
      <table class="container" align="center">
        <?php
          if($result>0) {
            while($row=mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <?php
              if(!$row['Is_lent']) {?>
            <td>
              <form action="confirmlend.php" method="post">
                <input type="hidden" name="bname" value="<?php echo $row['name'];?>"/>
                <button name="btn1" id="sub" value="submit">lend</button>
              </form>
            </td>
          <?php } ?>
        </tr>
        <?php
      }
    } ?>
      </table>
    </div>
  </body>
</html>
