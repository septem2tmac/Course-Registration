<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Course Selection</title>

	<link id="switch_style" href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
	
	<script src="js/various_operation.js"></script>
</head>

<body>
		<nav class="navbar navbar-default" role="navigation">
	
            <div class="container">

                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>Course</strong><br> 
						<small>Study hard and make your dream come true</small></span>
                    </a>
                </div>

            </div>
		</nav>

		<hr class="topbar"/>
	
	 <div class="container-confirmation">
		<div class="col-sm-12">
		<?php
			session_start();
			$_SESSION["register_username"] = $_POST['firstname']. " " .$_POST['lastname'];
			$_SESSION["register_email"] = $_POST['email'];
			$_SESSION["register_password"] = $_POST['password'];

			$servername = "localhost";
			$username = "root";
			$pwd = "";
			$dbname = "university";

			$conn = new mysqli($servername, $username, $pwd, $dbname);

			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL" . mysqli_connect_error();
			} 

			$sql = "INSERT INTO students (Name, Password, Email, Admin) VALUES('$_SESSION[register_username]', '$_SESSION[register_email]', '$_SESSION[register_password]', b'0')";
			$result = mysqli_query($conn, $sql);

			//echo $result;
			if ($result == 1) {
				$_SESSION['name'] = $_SESSION["register_username"];
				$_SESSION["Admin"] = 0;
				echo "<div class='alert alert-info'>
					  <h1 class='text-center' style='color: #595959;'>Register was Successful</h1>
					  <h3 class='text-center'><a href='index.php' style='font-family: Georgia; color: #1a52ff;'>Return to home page after <span id='mes'>5</span> seconds</a></h3>
					  </div>";
			} else {
				echo "<div class='alert warning-info'>
					  <h1 class='text-center' style='color: #595959;'>Register failed..</h1>
					  <h3 class='text-center'><a href='register.php' style='font-family: Georgia; color: #595959;'>Click here to jump back to register page. 
					  The name may have been registered. Please check or try again!</a></h3>
					  </div>";
			}

			mysqli_close($conn);
		?>
        </div>
	</div>
</body>

</html>