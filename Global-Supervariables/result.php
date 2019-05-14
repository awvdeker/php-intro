<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <!-- $_POST and $_GET -->
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
  <br/>

  <!-- //$_SERVER -->
  <p>$_SERVER variables :</p>
  <br/>
  <p>$_SERVER['SCRIPT_NAME'] --> <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
  <p>$_SERVER['HTTP_HOST'] --> <?php echo $_SERVER['HTTP_HOST']; ?></p>
  <p>$_SERVER['PHP_SELF'] --> <?php echo $_SERVER['PHP_SELF']; ?></p>
  <p>$_SERVER['SERVER_ADDR'] --> <?php echo $_SERVER['SERVER_ADDR']; ?></p>
  <p>$_SERVER['SERVER_NAME'] --> <?php echo $_SERVER['SERVER_NAME']; ?></p>
  <p>$_SERVER['REMOTE_ADDR'] --> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
  <p>$_SERVER['REMOTE_HOST'] --> <?php echo $_SERVER['REMOTE_HOST']; ?></p>
  <p>$_SERVER['REMOTE_PORT'] --> <?php echo $_SERVER['REMOTE_PORT']; ?></p>
  <p>$_SERVER['SCRIPT_FILENAME'] --> <?php echo $_SERVER['SCRIPT_FILENAME']; ?></p>
  <p>$_SERVER['SERVER_PORT'] --> <?php echo $_SERVER['SERVER_PORT']; ?></p>
  <p>$_SERVER['SCRIPT_URI'] --> <?php echo $_SERVER['SCRIPT_URI']; ?></p>
  <br/>


</div>
</body>
</html>
