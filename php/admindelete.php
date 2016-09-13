<?php
session_start();

$name = $_GET['name'];
$year = $_GET['year'];
$term = $_GET['term'];

/*echo $name. "<br>";
echo $year. "<br>";
echo $term. "<br>";*/

$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $pwd, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

$sql = "DELETE FROM courses WHERE Name= '$name' AND Year='$year' AND Term='$term'";

mysqli_query($conn, $sql);

$sql = "SELECT * FROM courses";
				
$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		echo "
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Instructor</th>
		<th>Year</th>
		<th>Term</th>
		<th>Level</th>
		<th></th>
		<th></th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['ID'] . "</td>";
			echo "<td><a href=details.php?courseid=".$row['ID']."&courseyear=".$row['Year']."&courseterm=".$row['Term'].">" . $row['Name'] . "</a></td>";
			echo "<td>" . $row['Instructor'] . "</td>";
			echo "<td>" . $row['Year'] . "</td>";
			echo "<td>" . $row['Term'] . "</td>";
			echo "<td>" . $row['Level'] . "</td>";
			echo "<td><a href='course_update.php' class='btn btn-primary post-ad-btn'>UPDATE</a></td>";
			echo "<td><a class='btn btn-warning post-ad-btn' href=# onclick='admincoursedelete(\"".$row['Name']."\",".$row['Year'].",\"".$row['Term']."\")'>DELETE</a>";
			echo "</tr>";
		}
	} else {
		echo "0 results";
	}
	
mysqli_close($conn);
?>