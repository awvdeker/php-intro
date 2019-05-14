<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <p>Variables sent via POST<p>
  <p>Top 5 Tv shows</p>
  <ol>
    <li><?php echo $_POST["tvshow1"]; ?></li>
    <li><?php echo $_POST["tvshow2"]; ?></li>
    <li><?php echo $_POST["tvshow3"]; ?></li>
    <li><?php echo $_POST["tvshow4"]; ?></li>
    <li><?php echo $_POST["tvshow5"]; ?></li>
  </ol>
  <p>Top 5 Movies</p>
  <ol>
    <li><?php echo $_POST["movie1"]; ?></li>
    <li><?php echo $_POST["movie2"]; ?></li>
    <li><?php echo $_POST["movie3"]; ?></li>
    <li><?php echo $_POST["movie4"]; ?></li>
    <li><?php echo $_POST["movie5"]; ?></li>
  </ol>
  <br/>
  <p>Variables sent via GET<p>
  <p>Favourite Country : <?php echo $_GET["favouritecountry"]; ?></p>
  <p>Worst movie ever seen : <?php echo $_GET["worstmovie"]; ?></p>
</div>
</body>
</html>
