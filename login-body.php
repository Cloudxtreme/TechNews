		<!-- LOGIN -->
		<section class="login">
			<div class="container">
				<div class="panel panel-custom">
					<div class="panel-body">
						<h2 class="text-center text-ls">Log in to continue</h2>
						<form class="form-ls">
						  	<div class="form-group form-ls-input">
							    <input type="text" class="form-control" id="emailorusername" placeholder="Email or username"/>
						  	</div>
						  	<div class="form-group form-ls-input">
							    <input type="password" class="form-control" id="password" placeholder="Password"/>
						  	</div>
						  	<button type="button" class="btn text-uppercase btn-ls" id="loginbtn"><?php echo ($role == 'myadmin' ? 'Log in as admin' : 'Log in') ?></button>
						  	<a class="text-center fyp red-link" href="#">Forgot your password?</a>
						</form>
					</div>
			  	</div>
			</div>
		</section>		
		<!-- END: LOGIN -->
