<?php
 
 	require __DIR__.'/src/autoload.php';

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$loginhelper=new loginHelper($db);
		if ($loginhelper->login($_POST['username'], $_POST['password'])){
			echo "Logged In";
		}else{
			echo "Login Failed";
		}
	}

	if(isset($_POST['username_reg']) && isset($_POST['password_reg']))
	{
		$registerhelper=new registerHelper($db);
		if ($registerhelper->register($_POST['username_reg'], $_POST['password_reg'], $_POST['name'], $_POST['email'])){
			echo "Registered";
		}else{
			echo "Register Failed"; 
		}
	}


	
?>

<!DOCTYPE HTML>

<html>

<head>

	<title> PASSWORD MANAGEMENT PROJECT </title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">

</head>

<body>

	<div class="container">

		<div class="col-md-8 col-md-offset-2">

			<form action="#" method="post">

				<div class="form-group">

					<strong>Login</strong><br><br><br>

					<label for="username">

						UserName:
						
					</label>

					<input type="text" id="username" name="username" class="form-control">

				</div>

				<div class="form-group">

					<label for="password">

						Password:
						
					</label>

					<input type="password" id="password" name="password" class="form-control">



				</div>
				<input type="submit" id="login">
			</form>
			<form action="#" method="post">
				<div class="form-group">


					<strong>Register</strong><br><br><br>
					<div>

						<label for="username">
						UserName:
						</label>
						<input type="text" id="username_reg" name="username_reg" class="form-control">

					</div>

					<div>

						<label for="Password">
						 Password: 
						</label>
						<input type="password" id="password_reg" name="password_reg" class="form-control">

					</div>

					<div>

						<label for="Name">
						 Name: 
						</label>
						<input type="text" id="name" name="name" class="form-control">

					</div>

					<div>

						<label for="email">
						 Email: 
						</label>
						<input type="text" id="email" name="email" class="form-control">

					</div>



				</div>



				<input type="submit" id="reg">

			</form>

		</div>



	</div>
	
</body>

</html>