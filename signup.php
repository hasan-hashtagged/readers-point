<html>
  <head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
  </head>
  <body>
    <div class="topbar">
      <h1>Please Register to avail our services</h1>
    </div>
    <div class="container">
      <form action="reg.php" method="post">
        <fieldset>
          <div>
            <label for="roll">Registration ID:</label>
            <input type="text" class="signupform" id="roll" name="roll" placeholder="B1*****" required/>
          </div>
          <br>
          <div>
            <label for="fname">First Name:</label>
            <input type="text" class="signupform" id="fname" name="fname" placeholder="Enter first Name" required />
          </div>
          <br/>
          <div>
            <label for="lname">Last Name:</label>
            <input type="text" class="signupform" id="lname" name="lname" placeholder="Enter Last Name" required />
          </div>
          <br/>
          <div>
            <label for="email">Email ID:</label>
            <input type="text" class="signupform" id="email" name="email" placeholder="abc@example.com" required />
          </div>
          <br/>
          <div>
            <label for="psswd">Password:</label>
            <input type="password" class="signupform" id="psswd" name="psswd" placeholder="Enter a New Password" required />
          </div>
          <br/>
          <button id="sub" type="submit">Submit</button>
          <br/>
        </fieldset>
      </form>
    </div>
  </body>
</html>
