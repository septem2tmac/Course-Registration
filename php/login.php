<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
session_start();
//echo $_POST['username'];

$_SESSION["name"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];
$_SESSION["email"] = $_POST['email'];

echo $_SESSION["name"] . "<br>";
echo $_SESSION["password"] . "<br>";
echo $_SESSION["email"] . "<br>";

$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $pwd, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

$sql = "SELECT * FROM students WHERE Name = '$_SESSION[name]' AND Password = '$_SESSION[password]' AND Email = '$_SESSION[email]'";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo "1";
	echo ":||:";
    $row = mysqli_fetch_array($result);
	$_SESSION["name"] = $row['Name'];
	$_SESSION["Admin"] = $row['Admin'];
	echo "<strong>" .$_SESSION["name"]. "</strong> | ";
	if($_SESSION["Admin"] == 1) {
		echo "<a href='administrator.php' class='btn btn-warning post-ad-btn'>Operate</a> |";
	} else {
		echo "<a href='cart.php' class='btn btn-primary post-ad-btn'>Cart</a> |";
	}
	echo "<a href=# onclick ='logout()'>Log out</a>";
} else {
	echo "0";
	echo ":||:";
	$_SESSION["name"] = '';
	echo "<a data-toggle='modal' data-target='#modalLogin'  href='#' class='btn btn-primary post-ad-btn'>Login</a> | 
           <a href='register.php'>Signup</a>";
}

echo ":||:";
if($_SESSION["Admin"] != 1) {
	echo "<br>"	;
	echo "<br>"	;
	echo "<div class='col-sm-6' style='text-align: center; margin: 0 auto'>";	
	if($_SESSION["Admin"] == 0) {
		echo "<button data-toggle='modal' data-target='#modalCart' class='btn btn-primary' style='text-align: center;width: 150px;' type='button'>Add to cart</button>";
	} else {
		echo "<button data-toggle='modal' data-target='#modalLogin' class='btn btn-primary' style='text-align: center;width: 150px;' type='button'>Add to cart</button>";
	}
	echo "</div>";
									
	echo "<div class='col-sm-6' style='text-align: center; margin: 0 auto'>";	
	echo "<button data-toggle='modal' data-target='#myModal' class='btn btn-primary' style='text-align: center;width: 150px;'type='button'>Checkout</button>";
	echo "</div>";
	echo "<br>"	;
}
mysqli_close($conn);
?>
</body>
</html>