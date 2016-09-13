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
        <link href="css/dropzone.css" rel="stylesheet">

		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js/dropzone.js"></script>

    </head>

	<body>
		<?php 
			session_start();
			$_SESSION['creation'] = 1; 
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
		
        <div class="container">
			
			<div class="row">
				<div class="col-sm-2">
				</div>
				
				<div class="col-sm-8">
					
					<form class="form-vertical" action="administrator.php" method="post">

						<div class="panel panel-default">
							<div class="panel-heading">Choose category</div>
							
							<div class="panel-body">
								<div class="row">  
									<div class="col-sm-12 "  >

										<div class="form-group">

											<div class="row">
												<div class="col-sm-2" style="margin-top: 10px;">
													<label>Category</label>
												</div>
												<div class="col-sm-6">

													<select id="category" class="form-control " name="createdcategory">
														<option value="">Choose a category</option>
													
														<option value="Math">&nbsp;&nbsp;&nbsp;&nbsp;Math</option>
	 
														<option value="Computer Science">&nbsp;&nbsp;&nbsp;&nbsp;Computer Science</option>
													
														<option value="Electric Engineering">&nbsp;&nbsp;&nbsp;&nbsp;Electric Engineering</option>
													
														<option value="Finance">&nbsp;&nbsp;&nbsp;&nbsp;Finance</option>
														
														<option value="Chemistry">&nbsp;&nbsp;&nbsp;&nbsp;Chemistry</option>
													</select>
												
												</div>

											</div>
										</div>			
									</div>			
								</div>			
							</div>			
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">Main</div>
							<div class="panel-body">

								<div class="form-group">
									<div class="row">

											<div class="col-sm-12">
												<label>Name</label>
												<input type="text" class="form-control" name="createdname">
											</div>
											
											<div class="col-sm-12"><br>
												<label>Description </label>
												<textarea class="form-control col-sm-8 expand" rows="6" style="width: 99%" name="createddescription"></textarea>
											</div>

											<div class="col-sm-12"><br>
												<label>ID</label>
												<input type="text" class="form-control" name="createdid">
											</div>		
									</div>
								</div>
							</div>		

						</div>			

						<div class="panel panel-default">
							<div class="panel-heading">Details</div>
								<div class="panel-body">

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Instructor</label>
												<input type="text" class="form-control" name="createdinstructor">
											</div>									     	
											<div class="col-sm-6">
												<label>Year</label>
												<input type="text" class="form-control" name="createdyear">
											</div>
											<div class="col-sm-6"><br />
												<label>Term</label>
												<input type="text" class="form-control" name="createdterm">
											</div>
											<div class="col-sm-6"><br />
												<label>Level</label>
												<input type="text" class="form-control" name="createdlevel">
											</div>
											<div class="col-sm-6"><br />
												<label>Price</label>
												<input type="text" class="form-control" placeholder="How much is this coures?" name="createdprice">
											</div>
										</div>                   
									</div>
								</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">Add Pictures</div>
								<div class="panel-body">
									<div id="my-dropzone" action="upload.php" class="dropzone"></div>
									<br>
									<div class="col-sm-6>
									</div>
									<div class="col-sm-6" style="text-align: center; margin: 0 auto">	
										<input type="submit" class="btn btn-primary pull-right" value='DONE'></input>
									</div>	
								</div>
							</div>
						</div>
					</form>
			</div>
		</div>		
	</body>
</html>