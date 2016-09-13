<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
} 

if(isset($_SESSION['name'])){
	$sql = "SELECT * 
			FROM courses,selection
			WHERE courses.Name = selection.Coursename AND courses.Year = selection.Courseyear AND courses.Term = selection.Courseterm AND selection.Username = '$_SESSION[name]'";

	$result = mysqli_query($conn, $sql);

	$amount = 0;
	echo "<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
	<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header' style='margin-top: 10px;  border-top: 1px solid #e5e5e5;'>
					<div class='row'>";
		
						if ($result->num_rows > 0) {
		
							while($row = mysqli_fetch_array($result)) {
								echo "<div class='col-sm-2'>";
								echo "</div>";
								echo "<div class='col-sm-5'>";
								echo 	"<h4>".$row['Name']."</h4>";
								echo "</div>";
								echo "<div class='col-sm-5'>";
								echo 	"<h4 class='price'>$".$row['Price']."</h4>";
								$amount = $amount + $row['Price'];
								echo "</div>";
							}
						} else {
							echo "0 results";
						}
	echo"			</div>			
				</div>
				<div class='modal-body'>
					<form class='form-vertical'>
						<fieldset>
							<div class='row'>  
								<div class='col-sm-12' >
									
									<div class='col-sm-3 col-sm-offset-2'>	
										<h2>Total Cost:</h2>
									</div>
									<div class='col-sm-5 col-sm-offset-2'>
										<h2 class='price'>$".$amount."</h2>
									</div>
									<br>
									<div class='form-group'>
										<label>Card Number:</label>
										<input type='email' class='form-control ' placeholder='Card Number'>
									</div>
									<div class='form-group hidden-xs'>
										<label>Phone Number (Optional):</label>
										<input type='text' class='form-control' placeholder=''>
									</div>						  
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class='modal-footer' style='border-top: none; margin-top: 0px;'>
					<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
					<a href='confirmation.php' ><button type='button' class='btn btn-primary'>Confirm</button></a>
				</div>
			</div>
		</div>
	</div>";
	mysqli_close($conn);
}
?>
