<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
session_start();
//echo $_POST['username'];

$_SESSION["name"] = '';
$_SESSION["password"] = '';
$_SESSION["email"] = '';
$_SESSION["Admin"] = 2;

/*echo $_SESSION["name"] . "<br>";
echo $_SESSION["password"] . "<br>";
echo $_SESSION["email"] . "<br>";*/

echo "<a data-toggle='modal' data-target='#modalLogin'  href='#' class='btn btn-primary post-ad-btn'>Login</a> | 
      <a href='register.php'>Signup</a>";
	  
echo ":||:";
include '../checkoutorcart.php';

?>

</body>
</html>