<?php
session_start();

$myArr=array("Samuel","Nathan","David","Simon");
$myAssArr=array("Samuel"=>"35","Nathan"=>"33","David"=>"32","Simon"=>"30");
$myObj=(object)$myAssArr;

/*
$foo = (array)$foo;
$foo['bar'] = '1234';
$foo = (object)$foo;
*/
/*
class MyClass{
  public $age;
}
$Samuel=new MyClass();
$Samuel->age="35";
$Nathan=new MyClass();
$Nathan->age="33";
$David=new MyClass();
$David->age="32";
$Simon=new MyClass();
$Simon->age="30";
*/

//Write a for-loop that adds an item to all of the above

$A="Alexander";
$B="34";

$_SESSION[$A]=$B;
$_SESSION["Elisabeth"]="31";
$_SESSION["Matthias"]="29";
$_SESSION["Thomas"]="27";

foreach ($_SESSION as $key => $value){
  //add item to array
  array_push($myArr, $key);
  $myAssArr[$key]=$value;
  $myObj->{$key}=$value;
}

//Write an if-statement that has a 20% chance to edit a random item of one of the above

//Put this if statement in a loop so every array/object has a random chance of having a random item changed

$C="Jan";
$D="40";

for ($i=0;$i<3;$i++){
  if (rand(1,100)<=rand(1,100)){
    $randomIndex=rand(0,(count($myArr)-1));
    $oldKey=$myArr[$randomIndex];
    switch ($i){
      case 0:
        $randomIndex=rand(0,(count($myArr)-1));
        $myArr[$randomIndex]=$C;
        break;
      case 1:
        $randKey = array_rand($myAssArr, 1);
        unset($myAssArr[$randKey]);
        $myAssArr[$C]=$D;
        break;
      case 2:
        $randKey = array_rand((array)$myObj);
        unset($myObj->$randKey);
        $myObj->{$C}=$D;
    }

  }

}

//Divide the array in half (if uneven items half-1, unless half-1 makes it empty)
$myArr[8]="Frederic";

$len = count($myArr);
if ($len>1){
  $firsthalf = array_slice($myArr, 0, floor($len / 2));
  $secondhalf = array_slice($myArr, floor($len / 2));
} else {
  $firsthalf = $myArr;
  $secondhalf = null;
}

var_dump($myArr,$myAssArr,$myObj);
echo '<br/>';
var_dump($firsthalf,$secondhalf);
echo '<br/>';

//Remove the last item of the associative array
$removed = array_pop($myAssArr);

var_dump($removed,$myAssArr);




?>
