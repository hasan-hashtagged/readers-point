<?php
  session_start();
  if(isset($_SESSION['st_id'])) {
    header("Location:home.php");
    exit;
  }
?>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <form action="log.php" method="post">
      <div>
        <label for="s_id">Student ID:</label>
        <input type="text" id="s_id" name="s_id" placeholder="Enter Registration No." required/>
      </div>
      <div>
        <label for="psswd">Password:</label>
        <input type="password" id="psswd" name="psswd" placeholder="Enter Password" required/>
      </div>
      <button type="submit">Login</button>
    </form>
  </body>
</html>
