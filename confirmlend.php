<?php
  $a=$_POST['bname'];
?>
<html>
  <head>
    <title>Confirm Lend</title>
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
  </head>
  <body>
    <div class="container">
      <h1 align="center">Book Name: <?php echo $a;?></h1>
      <form action="give.php" method="post">
        <fieldset>
          <div>
            <input type="hidden" name="bname" value="<?php echo $a; ?>"/>
            <label for="s_id">ID:</label>
            <input type="text" id="s_id" name="s_id">
          </div>
          <br/>
          <button id="sub" type="submit">Lend</button>
          <br/>
        </fieldset>
      </form>
    </div>
  </body>
</html>
