<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="box">
      <button type="button">Generate object</button>
    </div>
    <div class="box">
      <button type="button">Revert object</button>
    </div>
    <div class="box">
      <form action="home.php" method="post">
        <input type="text" pattern=".{2,}" required name="username"/>
        <input type="submit" name="submit" value="Get a nickname"/>
      </form>
    </div>
  </div>


<?php
require 'security.php';
include 'functions.php';

if (isset($_POST['username'])){
  echo "<br/><br/>Generated nickname : <br/><br/>";
  echo nickname_generate($_POST['username']);

}



?>

</body>
