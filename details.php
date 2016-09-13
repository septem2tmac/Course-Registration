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
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/dropzone.js"></script>
		<script src="js/global.js"></script>
		<script src="js/user.js"></script>
		<script src="js/courseselection.js"></script>
		
		<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" />
		<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
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
								<?php include 'logInOrOut.php';?>
							</div>

						</div>
					</div>
				</div>
		</nav>

		<hr class="topbar"/>
			
		<?php include 'php/course_specific.php';?>	
		<div class="container" id="listings-page">
			<div class="row">
					<div class="col-sm-12 listing-wrapper listings-top listings-bottom">
				
				<div class="row">
					<div class="col-sm-7">	
						<ol class="breadcrumb">
							<li><a href="index.php" class="link-info"><i class="fa fa-chevron-left"></i>Home</a></li>
							<li class="active"><?php echo $_SESSION["coursename"] ?></li>
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-7">	
						<h1><?php echo $_SESSION["coursename"] ?></h1>
					</div>

					<div class="col-sm-5">
						<p class="price">$<?php echo $_SESSION["courseprice"] ?></p>
					</div>
				</div>			

				<hr>

				<div class="row">

					<div class="col-sm-7">
						<h3>Details</h3>

						<div class="row">

							<div class="col-xs-6">
								<table class="table">

									<tbody>
										<tr>
											<th>ID</th>
											<td><?php echo $_SESSION["courseid"] ?></td>
										</tr>
										<tr>
											<th>Category</th>
											<td><?php echo $_SESSION["coursecategory"] ?></td>
										</tr>
										<tr>
											<th>Instructor</th>
											<td><?php echo $_SESSION["courseinstructor"] ?></td>
										</tr>	
	 
									</tbody>
								</table>
							</div>
							
							<div class="col-xs-6">
								<table class="table">

									<tbody>
										<tr>
											<th>Year</th>
											<td><?php echo $_SESSION["courseyear"] ?></td>
										</tr>
										<tr>
											<th>Term</th>
											<td><?php echo $_SESSION["courseterm"] ?></td>
										</tr>
										<tr>
											<th>Level</th>
											<td><?php echo $_SESSION["courselevel"] ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<p><?php echo $_SESSION["coursedescription"] ?>.</p>
					</div>

					<div class="col-sm-5 center zoom-gallery">
						<div class="row center">

							<div class="col-sm-12">	
							<?php
								echo "<a class='fancybox' rel='group' href=".$_SESSION['courseimage'].">";
								echo "<img id='' alt='' class='raised' src=".$_SESSION['courseimage']." style='width: 100%' />";
								echo "</a>";
							?>
							</div>
						</div>
						
						<div id="CheckoutAndCart">
							<?php include 'checkoutorcart.php';?>
						</div>
					</div>				

				</div>			

				</div>

				</div>

			</div>	
		</div>


<!-- Modalcheckout -->
<?php include 'checkoutModal.php';?>
<!-- Modal -->
<?php include 'modal.php';?>

<!-- ModalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">  
                    <div class="col-sm-12 col-sm-offset-2" >
						<h2 id="cartinformation">This course has been added to cart.</h2>
					</div>
				</div>
            </div>
			<div class="modal-footer" style="border-top: none; margin-top: 0px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>