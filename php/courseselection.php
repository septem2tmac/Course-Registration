<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
session_start();

$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $pwd, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

$sql = "INSERT INTO selection (Username, Coursename, Courseyear, Courseterm) VALUES('$_SESSION[name]', '$_SESSION[coursename]', '$_SESSION[courseyear]', '$_SESSION[courseterm]')";

$result = mysqli_query($conn, $sql);

if ($result == 1) {
	echo "register success! Now jumping back to home page with your account!!";
} else {
	echo "register failed... Now jumping back to register page. The name may have been registered. Please check or try again!";
}

mysqli_close($conn);
?>
</body>
</html>