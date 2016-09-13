<!DOCTYPE html>
<html>
<head>
</head>

<body>

<?php
session_start();
$name = $_GET['name'];

//echo $category . "<br>";
//echo $term . "<br>";
//echo $level . "<br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

if($name == "") {
	$sql = "SELECT * FROM courses";
} else {
	$sql = "SELECT * FROM courses WHERE Name LIKE '%$name%'";
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
	$arrTotal = array();
     while($row = mysqli_fetch_array($result)) {
		$arrItem = array(
			'ID' => $row['ID'],
			'Name' => $row['Name'],
			'Instructor' => $row['Instructor'],
			'Year' => $row['Year'],
			'Term' => $row['Term'],
			'Level' => $row['Level']		
		);
		$jstr = json_encode($arrItem);
		array_push($arrTotal, $jstr);
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td><a href=details.php?courseid=".$row['ID']."&courseyear=".$row['Year']."&courseterm=".$row['Term'].">" . $row['Name'] . "</a></td>";
		echo "<td>" . $row['Instructor'] . "</td>";
		echo "<td>" . $row['Year'] . "</td>";
		echo "<td>" . $row['Term'] . "</td>";
		echo "<td>" . $row['Level'] . "</td>";
		echo "</tr>";
     }
	 $jArr = json_encode($arrTotal);
	 $_SESSION["courses"] = $jArr;
	 //echo "jArr".$jArr;
	 echo "</table>";
	 //echo "<div>";
	 //echo "<a href=php/welcome.php> welcome.php </a>";
	 //echo "</div>";*/
} else {
     echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>