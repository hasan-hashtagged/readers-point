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
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
  </head>
  <body>
    <div class="topbar">
      <h1>Please Login to continue</h1>
    </div>
    <div class="container">
      <form action="log.php" method="post">
        <fieldset>
          <div>
            <label for="s_id">Student ID:</label>
            <input type="text" id="s_id" name="s_id" placeholder="Enter Registration No." required/>
          </div>
          <br/>
          <div>
            <label for="psswd">Password:</label>
            <input type="password" id="psswd" name="psswd" placeholder="Enter Password" required/>
          </div>
          <br/>
          <button id="sub" type="submit">Login</button>
          <br/>
        </fieldset>
      </form>
    </div>
  </body>
</html>
