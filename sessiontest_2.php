<?php 

session_start();

?>

<html>
  <head></head>
  <body>
<?php 

echo "session disposed<br>";

$_SESSION = [];

if(isset($_COOKIE["PHPSESID"])){
  setcookie("PHPSESID", "", time() - 1800, "/");
}

session_destroy();

echo "session";
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

echo "cookie";
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";


?>
  </body>
</html>