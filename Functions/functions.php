<?php
function nickname_generate($nickname){

  $nickname=strrev($nickname);
  //2. turn the name around

  $nickname=strtoupper($nickname);
  //3. capitalize it

  $nickname=strrev($nickname);
  //4. turn the name back around

  $nickname="--".$nickname."--";
  //5. add -- to the front and back of the name

  $nickname="x".$nickname;
  //6. add x to the front of the name

  $randomChar=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, rand(2,4));
  $nickname=$randomChar.$nickname;
  //7. add two to four random characters (A-Z, a-z, 0-9) in front of the name

  $nickname=ltrim($nickname,$randomChar);
  $nickname="[".$randomChar."]".$nickname;
  //8. wrap those random characters with blocked parentheses []

  $index=rand(0 , (strlen($nickname)-1) );
  $nickname[$index]= strtolower($nickname[$index]) ^ strtoupper($nickname[$index]) ^ $nickname[$index];
  //9. Capitalize one more random character in the name <br/>(if the character is already capitalized, it should be de-capitalized)

  return $nickname;
}

function object_generate(){
  //get object from cookie
  //put object in session
  $_SESSION['generatedObject']=$_COOKIE["myObject"];
  //return object
  return unserialize($_SESSION["generatedObject"]);
}

function object_revert($object){

//REVERT OBJECT
//
//writ code here!!!!
//

//print object to homepage with <pre>
  echo "<br/><br/>Print reverted object: <br/><br/>";
  echo "<pre>";
  var_dump((array)$object);
  echo "</pre>";


}

?>
