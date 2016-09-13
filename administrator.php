<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment</title>

	<link id="switch_style" href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
	
	<script src="js/courseselection.js"></script>
</head>

<body>
    <div class="row directory">
		<div class="col-sm-12 ">
			<h2><span>Course listings</span></h2>
		</div>
	</div>
	
	<div class="row directory">
		<div class='col-sm-3'>
		</div>
		<div class='col-sm-3' style='text-align: center; margin: 0 auto'>
			<a href='course_create.php' class='btn btn-primary' style='width: 120px;' type='button'>ADD COURSE</a>
		</div>
		<div class='col-sm-3' style='text-align: center; margin: 0 auto'>
			<a href='index.php' class='btn btn-default ' style='width: 100px;' type='button'>FINISH</a>
		</div>
	</div>	
	
	<br>
	<?php
	session_start();
	echo "<div class='row directory'>
		<div class='col-sm-10 col-sm-offset-1'>";  

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "university";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL" . mysqli_connect_error();
				} 
				if(isset($_SESSION['creation']) && $_SESSION['creation'] == 1) {
					$sql = "INSERT INTO courses (ID, Name, Category, Year, Term, Instructor, Level, Price, Description, Image) 
							VALUES('$_POST[createdid]', '$_POST[createdname]', '$_POST[createdcategory]', '$_POST[createdyear]', '$_POST[createdterm]', 
								   '$_POST[createdinstructor]', '$_POST[createdlevel]', '$_POST[createdprice]', '$_POST[createddescription]', 'css/images/single/Discrete-Mathematics.jpg')";
					$result = mysqli_query($conn, $sql);
					
					$_SESSION['creation'] = 0;
				}
				
				if(isset($_SESSION['update']) && $_SESSION['update'] == 1) {
					//echo $_POST['createdid']."<br>";
					$sql = "UPDATE courses 
							SET Name='$_POST[createdname]', Category='$_POST[createdcategory]', Instructor='$_POST[createdinstructor]', 
							Level='$_POST[createdlevel]', Price='$_POST[createdprice]', 
							Description='$_POST[createddescription]', Image='css/images/single/Discrete-Mathematics.jpg' 
							WHERE ID='$_POST[createdid]' AND Year='$_POST[createdyear]' AND Term='$_POST[createdterm]'";
					mysqli_query($conn, $sql);
					$_SESSION['update'] = 0;
				}
				
				$sql = "SELECT * FROM courses";
				
				$result = mysqli_query($conn, $sql);

				if ($result->num_rows > 0) {
					echo "<table class = table id='admin_table'>
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
						echo "<td><a href='course_update.php?updatecourseid=".$row['ID']."&updatecoursename=".$row['Name'].
						"&updatecourseinstructor=".$row['Name']."&updatecoursedescription=".$row['Description']."&updatecourseyear=".$row['Year'].
						"&updatecourseterm=".$row['Term']."&updatecourselevel=".$row['Level']."&updatecourseprice=".$row['Price']."' 
						class='btn btn-primary post-ad-btn'>UPDATE</a></td>";
						echo "<td><a class='btn btn-warning post-ad-btn' href=# onclick='admincoursedelete(\"".$row['Name']."\",".$row['Year'].",\"".$row['Term']."\")'>DELETE</a>";
						echo "</tr>";
					 }
				 echo "</table>";			
				} else {
					 echo "0 results";
				}
				mysqli_close($conn);
			
		echo "</div>
	</div>";
	?>
</body>

</html>
