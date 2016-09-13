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

if (isset($_SESSION['courses'])){
	$jsonArr_decode = json_decode($_SESSION['courses']);
	$n = count($jsonArr_decode);
	//echo count($jsonArr_decode)."   ".$jsonArr_decode[0];
	//$jsonItem = json_decode($jsonArr_decode[0]);
	//echo "    ".$jsonItem->{'Year'};
	
	echo "<table class = table>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Instructor</th>
		<th>Year</th>
		<th>Term</th>
		<th>Level</th>
		</tr>";
		for ($i = 0; $i < $n; $i++) {
			$jsonItem = json_decode($jsonArr_decode[$i]);
			if(($year == "" || $jsonItem->{'Year'} == $year) && ($term == "" || $jsonItem->{'Term'} == $term) && ($level == "" || $jsonItem->{'Level'} == $level)) {
				echo "<tr>";
				echo "<td>" . $jsonItem->{'ID'} . "</td>";
				echo "<td><a href=details.php?courseid=".$jsonItem->{'ID'}."&courseyear=".$jsonItem->{'Year'}."&courseterm=".$jsonItem->{'Term'}.">" . $jsonItem->{'Name'} . "</a></td>";
				echo "<td>" . $jsonItem->{'Instructor'} . "</td>";
				echo "<td>" . $jsonItem->{'Year'} . "</td>";
				echo "<td>" . $jsonItem->{'Term'} . "</td>";
				echo "<td>" . $jsonItem->{'Level'} . "</td>";
				echo "</tr>";
			}
		}
	echo "</table>";
} else {
	echo "Welcome guest!<br>";
}

?>
</body>
</html>