<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="nickname.php" method="post">
    <p>Cool NickName Generator</p>
    <p>Username : <input type="text" pattern=".{2,}" required name="username">
    <input type="submit" name="submit" value="go!"/>
  </form>
  <br/>
  <br/>

  <?php

$nickname=$_POST["username"];
echo "1. username - ".$nickname."<br/>";

$nickname=strrev($nickname);
echo "2. turn the name around - ".$nickname."<br/>";

$nickname=strtoupper($nickname);
echo "3. capitalize it - ".$nickname."<br/>";

$nickname=strrev($nickname);
echo "4. turn the name back around - ".$nickname."<br/>";

$nickname="--".$nickname."--";
$nickname=trim($nickname,"--");
$nickname="--".$nickname."--";
echo "5. add -- to the front and back of the name - ".$nickname."<br/>";

$nickname="x".$nickname;
$nickname=ltrim($nickname,"x");
$nickname="x".$nickname;
echo "6. add x to the front of the name - ".$nickname."<br/>";

$randomChar=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, rand(2,4));
$nickname=$randomChar.$nickname;
echo "7. add two to four random characters (A-Z, a-z, 0-9) in front of the name - ".$nickname."<br/>";

$nickname=ltrim($nickname,$randomChar);
$nickname="[".$randomChar."]".$nickname;
echo "8. wrap those random characters with blocked parentheses [] - ".$nickname."<br/>";

$index=rand(0 , (strlen($nickname)-1) );
$nickname[$index]= strtolower($nickname[$index]) ^ strtoupper($nickname[$index]) ^ $nickname[$index];
echo "9. Capitalize one more random character in the name <br/>(if the character is already capitalized, it should be de-capitalized) - ".$nickname."<br/>";

$i=0;
$arr_str = str_split($nickname);
//var_dump($arr_str);
foreach ($arr_str as $char){
  $nicknameColor.='<span style="color:rgb('.(255-($i*15)).',0,0);">'.$char.'</span>';
  $i++;
}

echo "With color gradient : ".$nicknameColor;
//echo '<span style="color:rgb(255,0,0);">'.$nickname.'</span>';
  ?>

</body>
</html>
