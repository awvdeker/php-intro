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



  ?>

</body>
</html>
