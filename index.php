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
 
		<script src="js/dropzone.js"></script>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js/course_list.js"></script>
		<script src="js/user.js"></script>
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

		<div class="jumbotron home-tron-search well" style="">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<br/>
						<p class="main_description" style="">Search Various Courses</p>

						<br><br>
						<div class="row">

							<div class="col-sm-8 col-sm-offset-2" style="text-align: center">
								<div class="row">

									<div class="col-sm-10 col-sm-offset-1">
										<div class="input-group">
											<span class="input-group-addon input-group-addon-text">Input a Course</span>

											<input type="text" id = "search" class="form-control col-sm-3" placeholder="Algorithm, Web Programming. etc" onfocus="this.placeholder=''"></input>
											<div class="input-group-addon hidden-xs">
												<div class="btn-group" >
													<button type="button" id = "category" class="btn  dropdown-toggle" data-toggle="dropdown">
														Categories <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#courselists" onclick="listCategoryCourses('Math')">Math</a></li>
														<li><a href="#courselists" onclick="listCategoryCourses('Computer Science')">Computer Science</a></li>
														<li><a href="#courselists" onclick="listCategoryCourses('Electric Engineering')">Electric Engineering</a></li>
														<li><a href="#courselists" onclick="listCategoryCourses('Chemistry')">Chemistry</a></li>
														<li><a href="#courselists" onclick="listCategoryCourses('Finance')">Finance</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br/>
						<br/>
						<div class="row">
							<div class="col-sm-12" style="text-align: center">
								<a href="#courselists" class="btn btn-primary search-btn" onclick="searchCourses()">Search</a>
							</div>
						</div>                
						<br />
						<br />
						<div class="row">
							<div class="col-sm-12" style="text-align: center">

								<div id="quotes">
									<div class="text-item" style="display: none;">New students need to <strong>signup</strong> first.</div>   
									<div class="text-item" style="display: none;">The <strong>deadline</strong> of course registration is <strong>12/9</strong>.</div>							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row">
				<div class="col-sm-4 col-md-4 sidebar"><br><br><br>

					<div class="panel panel-default">
						<div class="panel-heading">Filters</div>
						<div class="panel-body">
							<form class="form-inline mini" style="margin-bottom: 0px;">
								<fieldset>				

									<div class="row filter-row">
										<div class="col-sm-5">
											<label>Year</label>
										</div>
										<div class="col-sm-7">
											<select name="year" class="col-sm-10 form-control ">
												<option></option>
												<option>2016</option>
												<option>2015</option>
											</select>
										</div>
									</div>
									
									<div class="row filter-row">
										<div class="col-sm-5">
											<label>Term</label>
										</div>
										<div class="col-sm-7">
											<select name="term" class="col-sm-10 form-control ">
												<option></option>
												<option>Spring</option>
												<option>Fall</option>
											</select>
										</div>
									</div>

									<div class="row filter-row">
										<div class="col-sm-5">
											<label>Level</label>
										</div>
										<div class="col-sm-7">
											<select name="level" class="col-sm-10 form-control ">
												<option></option>
												<option>Undergraduate</option>
												<option>Graduate</option>
											</select>
										</div>
									</div>
								   

									<div class="row filter-row">	

										<div class="col-sm-2 pull-right" style="margin-top: 10px;"><br>
											<input type="button" class="btn btn-primary pull-right" onclick="updateCourses(year.value, term.value, level.value)" value ="Update"></input>
										</div>
									</div>						

								</fieldset>
							</form>
						</div>
					</div>


				</div>
			
				<div class="col-sm-8 col-md-8" id = courselists>

					<div class="row directory">
						<div class="col-sm-12 ">
							<h2><span>Course listings</span></h2>
						</div>
					</div>

					<div class="row directory">
						<div id="grid"> <!-- course -->  

						</div>
					</div>
				</div>
				
				</div>  
			</div>	
			
<!-- /.container --><!-- Modal -->
<?php include 'modal.php';?>
		
</body>
</html>