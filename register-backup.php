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
		<!--link href="bootstrap/css/bootstrapValidator.css" rel="stylesheet" /-->

		
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrapValidator.js"></script>
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

		<hr class="topbar"/>
		
		<div class="container">

			<div class="row">

				<div class="col-sm-12">
		
					<h1 class ="text-center ">Create an Account</h1>
					<br>
					<div class="row">
						
						<div class="col-sm-12 col-md-6 col-md-offset-3">

						<form id="defaultForm" method="post" class="form-vertical" action="ajaxSubmit.php">
							<fieldset>
								<div class="row">  
									<div class="col-sm-12" >

										<div class="well">
											<div class="form-group">
												<label for="exampleInputEmail1">First name</label>
												<input type="text" class="form-control" name="username">
											</div>
												
												<div class="form-group">
													<label for="exampleInputEmail1">Last name</label>
													<input type="text" class="form-control" name="username">
												</div>
												
												<div class="form-group">
													<label for="exampleInputEmail1">Email address</label>
													<input type="text" class="form-control" name="email">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" name="password" placeholder="">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Confirm password</label>
													<input type="password" class="form-control" name="confirmpassword" placeholder="">
												</div>							  

												<br>
												<a href="#" class="btn btn-primary">Create account</a>
											</div>
										</div>
									</div>

								</div>
							</form>
				
					</div>

				</div>
		
			</div>
	
		</div>
<!-- Modal -->
<?php include 'modal.php';?>

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and can\'t be empty'
                        },
                        stringLength: {
                            min: 2,					//liu: 用户名改成至少2位
                            max: 30,
                            message: 'The username must be more than 2 and less than 30 characters long'
                        },
                        /*remote: {
                            url: 'remote.php',
                            message: 'The username is not available'
                        },*/
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        },
                        stringLength: {
                            min: 8,				//liu： 密码改成了8-30位
                            max: 30,
                            message: 'The username must be more than 8 and less than 30 characters long'
                        },
                        regexp: {
                        	regexp: /^[a-zA-Z0-9_\.]+$/,
                        	message: 'Password can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                confirmpassword: {				//liu： 增加了确认密码
                	validators: {
                		notEmpty: {
                            message: 'The confirm password is required and cannot be empty'
                        },
                		identical: {
                            field: 'password',
                           	message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>

</body>
</html>