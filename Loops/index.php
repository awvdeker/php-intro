<?php

// pizzahamburgerfries

$pizza="&#x1F355;";
$hamburger="&#x1F354;";
$fries="&#x1F35F;";

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
<input type="radio" name="player" value="0"><?php echo $pizza; ?>
<input type="radio" name="player" value="1"><?php echo $hamburger; ?>
<input type="radio" name="player" value="2"><?php echo $fries; ?>
<br/><br/>
<input type="submit" name="submit" value="Play">
</form>
</body>
</html>
