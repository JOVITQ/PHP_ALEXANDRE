<!DOCTYPE html>
    <html>
    <head>
<meta charset="utf-8">
    </head>
<body>
<form action="donnees.php" method="POST">
<label for="login">Login</label> :<input type=text name="login">
<label for="password">Password</label><input type=text name="password">
<input type=submit name=send "value">
</form>
<?php

if(isset($_GET["login"])){
  echo "the form has been sent";
}
  else {

  header("location: index.php");

  }

  ?>



</body>
</html>
