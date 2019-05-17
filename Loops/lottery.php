<?php

// pizzahamburgerfries

// 129409

$pizza="&#x1F355;";
$hamburger="&#x1F354;";
$fries="&#x1F35F;";

//computer kiest emoji

$computer = rand(0,2);

switch ($computer){
  case 0:
    echo "computer: $pizza";
    break;
  case 1:
    echo "computer: $hamburger";
    break;
  case 2:
    echo "computer: $fries";
  }

echo "<br/>";

switch ($_POST['player']){
  case 0:
    echo "player: $pizza";
    break;
  case 1:
    echo "player: $hamburger";
    break;
  case 2:
    echo "player: $fries";
}

echo "<br/>";

if ($computer == $_POST['player']){
  echo "Congratulations: You have won!!";
} else {
  echo "Not lucky today!!";
}

?>

<br/><br/>
<a href="index.php"><button>Play again</button></a>
