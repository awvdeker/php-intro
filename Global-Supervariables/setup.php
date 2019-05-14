<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<form action="result.php" method="post">
  <p>Top 5 Tv shows (POST)</p>
    <ol>
      <li><input type="text" name="tvshow1"/></li>
      <li><input type="text" name="tvshow2"/></li>
      <li><input type="text" name="tvshow3"/></li>
      <li><input type="text" name="tvshow4"/></li>
      <li><input type="text" name="tvshow5"/></li>
    </ol>
  <p>Top 5 Movies (POST)</p>
  <ol>
    <li><input type="text" name="movie1"/></li>
    <li><input type="text" name="movie2"/></li>
    <li><input type="text" name="movie3"/></li>
    <li><input type="text" name="movie4"/></li>
    <li><input type="text" name="movie5"/></li>
  </ol>
  <input type="submit" name="submit" value="submit"/>
</form>

<form action="result.php" method="get">
  <p>Favourite country (GET) <input type="text" name="favouritecountry"/></p>
  <p>Worst movie ever seen (GET) <input type="text" name="worstmovie"/></p>
  <input type="submit" name="submit" value="submit"/>
</form>
</div>
</body>
</html>
