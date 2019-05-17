<?php

// pizzahamburgerfries

$pizza="&#1F355;";
$hamburger="&#1F354;";
$fries="&#1F35F;";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
<p>Play and get lucky!!</p>
<br/><br/>
<form method="post" action="lottery.php">
<input type="radio" name="player" value="0"><?php echo "&#1F355;"; ?>
<input type="radio" name="player" value="1"><?php echo $hamburger; ?>
<input type="radio" name="player" value="2"><?php echo $fries; ?>
<br/><br/>
<input type="submit" name="submit" value="Play">
</form>
</body>
</html>
