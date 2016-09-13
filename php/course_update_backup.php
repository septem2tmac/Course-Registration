<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
session_start();

$year = $_GET['year'];
$term = $_GET['term'];
$level = $_GET['level'];

/*echo $year . "<br>";
echo $term . "<br>";
echo $level . "<br>";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 
if ($year == "" && $term == "" && $level == "") {
	$sql = "SELECT * FROM courses";
} elseif ($year != "" && $term == "" && $level == ""){
	$sql = "SELECT * FROM courses WHERE Year = '$year'";
} elseif ($year != "" && $term != "" && $level == ""){
	$sql = "SELECT * FROM courses WHERE Year = '$year' AND Term = '$term'";
} elseif ($year != "" && $term != "" && $level != ""){
	$sql = "SELECT * FROM courses WHERE Year = '$year' AND Term = '$term' AND Level = '$level'";
} elseif ($year != "" && $term == "" && $level != ""){
	$sql = "SELECT * FROM courses WHERE Year = '$year' AND Level = '$level'";
} elseif ($year == "" && $term == "" && $level != ""){
	$sql = "SELECT * FROM courses WHERE Level = '$level'";
} elseif ($year == "" && $term != "" && $level == ""){
	$sql = "SELECT * FROM courses WHERE Term = '$term'";
} else {
	$sql = "SELECT * FROM courses WHERE Term = '$term' AND Level = '$level'";
}
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table class = table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Instructor</th>
	<th>Year</th>
	<th>Term</th>
	<th>Level</th>
	</tr>";
     while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Instructor'] . "</td>";
		echo "<td>" . $row['Year'] . "</td>";
		echo "<td>" . $row['Term'] . "</td>";
		echo "<td>" . $row['Level'] . "</td>";
		echo "</tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>