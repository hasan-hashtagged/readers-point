<html>
  <head>
    <title>Add Books</title>
  </head>
  <body>
    <form action="add.php" method="post">
      <div>
        <label for="bname">Name of Book:</label>
        <input type="text" name="bname" placeholder="e.g. The Kite Runner" required/>
      </div>
      <div>
        <label for="pic">Upload Pic</label>
        <input type="file" name="pic" disabled/>
      </div>
      <button name="submit">Add</button>
    </form>
  </body>
</html>
