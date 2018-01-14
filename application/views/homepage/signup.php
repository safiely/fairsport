<div class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card" id="signup-panel">
					<div class="card-header">
						Signup
					</div>
					<div class="card-body">
						<form role="form" id="formSignup" action="<?php echo base_url();?>user/signup" method="post">
							<div class="form-group">
								<label for="inputName">
									<b>Full Name</b>
								</label>
								<input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Enter full name">
							</div>
							<div class="form-group">
								<label for="inputEmail">
									<b>Email address</b>
								</label>
								<input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="inputPassword">
									<b>Password</b>
								</label>
								<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="inputPassword2">
									<b>Confirm Password</b>
								</label>
								<input type="password" name="password2" class="form-control" id="inputPassword2" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Signup</button>
						</form>
					</div>
					<div class="card-footer" style="text-align: center">
						Already have an account? Login
						<a href="<?php echo base_url();?>login">
							<b>here</b>
						</a>.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


