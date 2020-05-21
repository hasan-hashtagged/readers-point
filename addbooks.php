<html>
  <head>
    <title>Add Books</title>
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
  </head>
  <body>
    <div class="topbar">
      <h1>Please Add your books here</h1>
    </div>
    <div class="container">
      <form action="add.php" method="post">
        <fieldset>
          <div>
            <label for="bname">Name of Book:</label>
            <input type="text" name="bname" placeholder="e.g. The Kite Runner" required/>
          </div>
          <br/>
          <div>
            <label for="pic">Upload Pic:</label>
            <br/>
            <input type="file" name="pic" disabled/>
          </div>
          <br/>
          <button id="sub" name="submit">Add</button>
          <br/>
        </fieldset>
      </form>
    </div>
  </body>
</html>
