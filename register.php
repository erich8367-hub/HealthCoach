<?php  include('config.php'); ?>

<?php  include('includes/registration_login.php'); ?>

<!DOCTYPE html>
<html>
<head>
  	<title>Register</title>
  	<link rel="stylesheet" type="text/css" href="static/css/util.css">
	<link rel="stylesheet" type="text/css" href="static/css/public_styling.css">
 	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="limiter">
		<div class="container">
			<div class="wrap">
				<div class="pic js-tilt" data-tilt>
					<img src="images/logo.jpg" alt="IMG">
				</div>

				<form class="form validate-form" method="post" action="register.php">
					<?php include ('includes/errors.php'); ?>
					<span class="form-title">
						Register
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Username" value='<?php echo $username;?>'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="email" placeholder="Email" value='<?php echo $email;?>'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password_1" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password_2" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-form-btn">
						<button class="form-btn" name="reg_user">
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Already have an account
						</span>
						<a class="txt2" href="login.php">
							Login?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>

	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>
</body>
</html>