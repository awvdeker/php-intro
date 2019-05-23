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
$C="Jan";
$D="40";

if (rand(1,100)<=20){
  $randomIndex=rand(0,(count($myArr)-1));
  $oldKey=$myArr[$randomIndex];
  $myArr[$randomIndex]=$C;
  $myAssArr[$C]=$D;
  unset($myAssArr[$oldKey]);
  $myObj->$C=$D;
  unset($myObj->$oldKey);
}

var_dump($myArr,$myAssArr,$myObj);

?>
