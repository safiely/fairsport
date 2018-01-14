<div class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card" id="login-panel">
					<div class="card-header">
						Login
					</div>
					<div class="card-body">
						<form role="form" id="formSignin" action="<?php echo base_url();?>user/login" method="post">
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
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</form>
                    </div>
                    <div class="card-footer" style="text-align: center">
                        Doesn't have account? Signup <a href="<?php echo base_url();?>signup"><b>here</b></a>.
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
