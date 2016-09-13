<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>Course Selection</title>

        <link id="switch_style" href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
		
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js/user.js"></script>
		<script src="js/courseselection.js"></script>

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

                <div class="collapse navbar-collapse">

                    <div class="nav navbar-nav navbar-right hidden-xs">
                        <div class="row">
							<?php
								session_start();
								if (!isset($_SESSION['name']) || $_SESSION['name'] == '') {
									echo "<a data-toggle='modal' data-target='#modalLogin'  href='#' class='btn btn-primary post-ad-btn'>Login</a> | 
										  <a href='register.php'>Signup</a>";
								} else {
									echo "<strong>" .$_SESSION["name"]. "</strong> |";
									if($_SESSION["Admin"] == 1) {
										echo "<a href='administrator.php' class='btn btn-warning post-ad-btn'>Operate</a> |";
									} else {
										echo "<a href='cart.php' class='btn btn-primary post-ad-btn'>Cart</a> |";
									}
									echo "<a href='index.php' onclick ='logout()'>Log out</a>";
								}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

		<hr class="topbar"/>
		
		<div class="container">
	
            <div class="panel panel-default">
			
                <div class="panel-heading">Course in Cart</div>
				
                <div class="panel-body">
                    <form class="form-vertical">
                            <div class="row">  
                                <div class="col-sm-12" >

                                    <table class="table edit-listings" id="courseinCart">
										<?php include 'course_cart.php';?>
                                    </table>
                                </div>

                            </div>
					</form>
                </div>

            </div>
			
			<div class="col-sm-12 listing-wrapper listings-top listings-bottom">
				
				<div class="col-sm-10">
 
                </div>
				<div class="col-sm-2" style="text-align: center; margin: 0 auto">	
					<br>
					<button data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="text-align: center;width: 150px; " type="button">Checkout</button>
					<br>
					<br>
				</div>			

			</div>

</div>

<!-- Modal -->
<?php include 'modal.php';?>
<!-- Modalcheckout -->
<?php include 'checkoutModal.php';?>
</body>
</html>