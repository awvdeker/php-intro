<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'functions.php';


if (!isset($_POST['submitSecurity']) && !isset($_POST['submitNickname']) && !isset($_POST['submitGenerate']) && !isset($_POST['submitRevert'])){

require 'security.php';

} elseif (isset($_POST['submitSecurity']) && $_POST['answer']=='yes'){

  require 'security.php';

  echo "<br/><br/>Generated nickname : <br/><br/>";
  echo nickname_generate("futurebot");

} elseif ($_POST['answer']=='no' || isset($_POST['submitNickname']) || !isset($_POST['submitGenerate']) || !isset($_POST['submitRevert'])){

?>
<div class="container">
    <div class="box">
      <form action="home.php" method="post">
        <input type="submit" name="submitGenerate" value="Generate object"/>
      </form>
    </div>
    <div class="box">
      <form action="home.php" method="post">
        <input type="submit" name="submitRevert" value="Revert object"/>
      </form>
    </div>
    <div class="box">
      <form action="home.php" method="post">
        <input type="text" pattern=".{2,}" required name="username"/>
        <input type="submit" name="submitNickname" value="Get a nickname"/>
      </form>
    </div>
  </div>


<?php


if (isset($_POST['username'])){
  echo "<br/><br/>Generated nickname : <br/><br/>";
  echo nickname_generate($_POST['username']);

} elseif (isset($_POST['submitGenerate'])){
  object_generate();
  echo "<br/><br/>Object generated!";

} elseif (isset($_POST['submitRevert'])){

  if (isset($_SESSION['generatedObject'])){
    object_revert(unserialize($_SESSION['generatedObject']));
  } else {
    object_revert(object_generate());
  }
  //if there is a parameter
  //else object_generate();
}




?>

</body>

<?php

//end of elseif
}

//end of first if
//}

?>
