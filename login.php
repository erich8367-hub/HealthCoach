<?php  include('config.php'); ?>

<?php  include('includes/registration_login.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="static/css/util.css">
	<link rel="stylesheet" type="text/css" href="static/css/public_styling.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="limiter">
		<div class="container">
			<div class="wrap">
				<div class="pic js-tilt" data-tilt>
					<img src="static/images/logo.jpg" alt="IMG">
				</div>

				<form class="form" method="post" action="login.php">
					<span class="form-title">
						Login
					</span>
					<div class="text-center p-t-12">
						<span class="txt3">
							<?php include ('includes/errors.php'); ?>
						</span>
					</div>
					
					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Username" value='<?php echo $username;?>'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" value='<?php echo $password;?>'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-form-btn">
						<button class="form-btn" name="login_btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-20">
						<span class="txt1">
							Don't have an account?
						</span>
						<a class="txt2" href="register.php">
							Create Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
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

	<script src="static/js/main.js"></script>

</body>
</html>