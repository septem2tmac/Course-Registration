<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
//session_start();
$courseid = $_GET['courseid'];
$courseyear = $_GET['courseyear'];
$courseterm = $_GET['courseterm'];

/*echo $courseid . "<br>";
echo $courseyear . "<br>";
echo $courseterm . "<br>";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

$sql = "SELECT * FROM courses WHERE ID = '$courseid'";

$result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
	$_SESSION["courseid"] = $row['ID'];
	$_SESSION["coursename"] = $row['Name'];
	$_SESSION["courseinstructor"] = $row['Instructor'];
	$_SESSION["courseyear"] = $row['Year'];
	$_SESSION["courseterm"] = $row['Term'];
	$_SESSION["courselevel"] = $row['Level'];
	$_SESSION["courseprice"] = $row['Price'];
	$_SESSION["coursedescription"] = $row['Description'];
	$_SESSION["coursecategory"] = $row['Category'];
	$_SESSION["courseimage"] = $row['Image'];
	//echo $_SESSION["courseid"];

mysqli_close($conn);
?>
</body>
</html>