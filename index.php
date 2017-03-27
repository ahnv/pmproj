<?php
require __DIR__.'/src/autoload.php';
	if(isset($_POST['username']) && isset($_POST['password'])){
		$loginhelper=new loginHelper($db);
		if ($loginhelper->login($_POST['username'], $_POST['password'])){
			echo "Logged In";
		}else{
			echo "Login Failed";
		}
	}

	if(isset($_POST['username_reg']) && isset($_POST['password_reg'])){
		$registerhelper=new registerHelper($db);
		if ($registerhelper->register($_POST['username_reg'], $_POST['password_reg'], $_POST['name'], $_POST['email'])){
			echo "Registered";
		}else{
			echo "Register Failed"; 
		}
	}

require __DIR__.'/header.php';	
?>
<section>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="text-center">Login</h3>
			<form action="#" method="post" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-xs-2" for="username">Username:</label>
					<div class="col-xs-10">
						<input type="text" id="username" name="username" class="form-control" placeholder="Enter Username">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-xs-2" for="password">Password:</label>
					<div class="col-xs-10">
						<input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
				</div>
				<div class="text-center">
					<input type="submit" id="login" class="btn btn-primary">
				</div>
			</form>
			<h3 class="text-center">Register</h3>
			<form action="#" method="post" class="form-horizontal">
				<div  class="form-group">
					<label class="control-label col-xs-2" for="username">Username:</label>
					<div class="col-xs-10">
						<input type="text" id="username_reg" name="username_reg" class="form-control" placeholder="Enter Username">
					</div>
				</div>
				<div  class="form-group">
					<label class="control-label col-xs-2" for="Password">Password: </label>
					<div class="col-xs-10">
						<input type="password" id="password_reg" name="password_reg" class="form-control" placeholder="Enter Password">
					</div>
				</div>
				<div  class="form-group">
					<label class="control-label col-xs-2" for="Name">Name: </label>
					<div class="col-xs-10">
						<input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
					</div>
				</div>
				<div  class="form-group">
					<label class="control-label col-xs-2" for="email">Email: </label>
					<div class="col-xs-10">
						<input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
					</div>
				</div>
				<div class="text-center">
					<input type="submit" class="btn btn-primary " id="reg">
				</div>
			</form>
		</div>
	</div>	
</section>
<?php require __DIR__.'/footer.php'; ?>