<?php
session_start();
require __DIR__.'/src/autoload.php';
	if(isset($_POST['username_reg']) && isset($_POST['password_reg'])){
		$registerhelper=new registerHelper($db);
		if ($registerhelper->register($_POST['username_reg'], $_POST['password_reg'], $_POST['name'], $_POST['email'])){
			header("Location: index.php");
		}else{
			$error = "Register Failed"; 
		}
	}

require __DIR__.'/header.php';	
?>
<body class="login-page">
	<div class="page-header header-filter" style="background-image: url(static/img/bg2.jpg); ; background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form class="form" method="post" action="#">
							<div class="header header-primary text-center">
								<h4 class="card-title">Register</h4>
							</div>
							<div class="content">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="Enter Name"  id="name" name="name">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									<input type="text" class="form-control" placeholder="Enter Email"  id="email" name="email">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="Enter Username"  id="username_reg" name="username_reg">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Enter Password" class="form-control"  id="password_reg" name="password_reg" />
								</div>
							</div>
							<div class="footer text-center">
								<input type="submit" class="btn btn-primary btn-simple btn-wd btn-lg" value="Register" /><br>
								<a href="index" class="btn btn-primary btn-simple btn-wd btn-lg" >Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php require __DIR__.'/footer.php'; ?>