<?php
session_start();

$name = $_GET['name'];
$year = $_GET['year'];
$term = $_GET['term'];

/*echo $name. "<br>";
echo $year. "<br>";
echo $term. "<br>";
echo $_SESSION['name']. "<br>";*/


$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $pwd, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

$sql = "DELETE FROM selection WHERE Username= '$_SESSION[name]' AND Coursename='$name' AND Courseyear='$year' AND Courseterm='$term'";

mysqli_query($conn, $sql);

$sql = "SELECT * 
		FROM courses,selection
		WHERE courses.Name = selection.Coursename AND courses.Year = selection.Courseyear AND courses.Term = selection.Courseterm AND selection.Username = '$_SESSION[name]'";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    
    while($row = mysqli_fetch_array($result)) {
		
		echo "<tr>";
        echo "<td class='main-td'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-9'>";
		echo "<h3><a href='details.php?courseid=".$row['ID']."&courseyear=".$row['Year']."&courseterm=".$row['Term']."'><strong>". $row['Name'] ."</strong></a></h3>";
		echo "</div>";                    

		echo "<div class='col-sm-3'>";
		echo "<h3 class='price-text'><strong>$". $row['Price'] ."</strong></h3>";
		echo "</div>";   
		echo "</div>";   
		echo "<p class='muted'>". $row['Instructor'] ."</p>";
        echo "<p>". $row['Description'] ."</p>";
		if($row['Term'] != "Spring")
		echo "<p>". $row['Term'] ."</p>";
		echo "<a href=# onclick='coursedelete(\"".$row['Name']."\",".$row['Year'].",\"".$row['Term']."\")'>Delete</a>";
		echo "</td>";
        echo "<tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>