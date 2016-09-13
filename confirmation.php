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
	
	<script src="js/various_operation.js"></script>
</head>

<body>
	<?php
		session_start();

		$servername = "localhost";
		$username = "root";
		$pwd = "";
		$dbname = "university";

		$conn = new mysqli($servername, $username, $pwd, $dbname);

		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL" . mysqli_connect_error();
		} 

		$sql = "DELETE FROM selection WHERE Username= '$_SESSION[name]'";

		mysqli_query($conn, $sql);
		mysqli_close($conn);
	?>
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
            <div class="alert alert-info">
				<h1 class="text-center " style="color: #595959;">Payment Successful</h1>
				<h3 class="text-center " ><a href="index.php" style="font-family: Georgia; color: #1a52ff;">Return to home page after <span id="mes">5</span> seconds</a></h3>
            </div>
        </div>
	</div>
</body>

</html>
