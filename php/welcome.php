<html>
<head>
</head>

<body>
<?php
session_start();
if (isset($_SESSION['courses'])){
	$jsonArr_decode = json_decode($_SESSION['courses']);
	$n = count($jsonArr_decode);
	echo count($jsonArr_decode)."   ".$jsonArr_decode[0];
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
			if($jsonItem->{'Year'} == '2016') {
				echo "<tr>";
				echo "<td>" . $jsonItem->{'ID'} . "</td>";
				echo "<td>" . $jsonItem->{'Name'} . "</td>";
				echo "<td>" . $jsonItem->{'Instructor'} . "</td>";
				echo "<td>" . $jsonItem->{'Year'} . "</td>";
				echo "<td>" . $jsonItem->{'Term'} . "</td>";
				echo "<td>" . $jsonItem->{'Level'} . "</td>";
				echo "</tr>";
			}
		}
	echo "</table>";
}	
else
	echo "Welcome guest!<br>";
?>
</body>
</html>