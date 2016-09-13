<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Sign in to your account</h4>
					</div>
					<div class="modal-body">
						<br>

						<form method="POST" action="" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

							<div class="form-group">
								<input id="username" placeholder="Username" class="form-control" name="username" type="text">                
							</div>
							
							<div class="form-group">
								<input id="email" placeholder="Email" class="form-control" name="email" type="text">                
							</div>

							<div class="form-group">
								<input id="password" placeholder="Password" class="form-control" name="password" type="password" value="">                
							</div>

							<div class="row">
								<div class="col-md-10">
									<p id="valid"  style="color:red;"></p>
								</div>
								<div class="col-md-2">
									<button type="button" id ="validbutton" class="btn btn-primary pull-right" onclick="login()">Login</button>
								</div>
							</div>
						</form>
					</div>

					<div class="modal-footer" style="text-align: center">
						<div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.php">Register now</a></p></div>
					</div>

				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->