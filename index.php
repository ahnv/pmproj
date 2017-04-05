<?php
session_start();
require __DIR__.'/src/autoload.php';
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header("Location: dashboard.php");
	}
	if(isset($_POST['username']) && isset($_POST['password'])){
		$loginhelper=new loginHelper($db);
		if ($loginhelper->login($_POST['username'], $_POST['password'])){
			header("Location: dashboard.php");
		}else{
			$error =  "Login Failed";
			print_r($error);
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
								<h4 class="card-title">Log in</h4>
							</div>
							<div class="content">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="Enter Username"  id="username" name="username">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Enter Password" class="form-control"  id="password" name="password" />
								</div>
							</div>
							<div class="footer text-center">
								<input type="submit" class="btn btn-primary btn-simple btn-wd btn-lg" value="Login" /><br>
								<a href="register" class="btn btn-primary btn-simple btn-wd btn-lg" >Register</a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
<?php require __DIR__.'/footer.php'; ?>