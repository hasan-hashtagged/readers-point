<html>
  <head>
    <title>Signup</title>
  </head>
  <body>
    <form action="reg.php" method="post">
      <div>
        <label for="roll">Registration ID:</label>
        <input type="text" class="signupform" id="roll" name="roll" placeholder="B1*****" required/>
      </div>
      <div>
        <label for="fname">First Name:</label>
        <input type="text" class="signupform" id="fname" name="fname" placeholder="Enter first Name" required />
      </div>
      <div>
        <label for="lname">Last Name:</label>
        <input type="text" class="signupform" id="lname" name="lname" placeholder="Enter Last Name" required />
      </div>
      <div>
        <label for="email">Email ID:</label>
        <input type="text" class="signupform" id="email" name="email" placeholder="abc@example.com" required />
      </div>
      <div>
        <label for="psswd">Password:</label>
        <input type="password" class="signupform" id="psswd" name="psswd" placeholder="Enter a New Password" required />
      </div>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
