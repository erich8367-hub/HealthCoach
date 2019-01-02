<?php 
	session_start();
	setcookie(session_name(), '', 100);
	session_unset();
	session_destroy();
	$_SESSION = array();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>

	<?php if (isset($_SESSION['success'])) : ?>
		
	<?php endif ?>

	<?php  if (isset($_SESSION['username'])) : ?>
	<body>
	<div class="limiter">
		<div class="container">
		<a href = "logout.php">Logout</a>
			<div class="wrap-input100">
				<input class="input100" type="text" name="search" placeholder="Search">
				<span class="focus-input100"></span>
				<span class="symbol-input100">							
					<i class="fa fa-search" aria-hidden="true"></i>
				</span>
			</div>
			<div class="square">
				<div class="content">
					<div class="table">
						<div class="table-cell">
							... CONTENT HERE ...
						</div>
					</div>
				</div>
			</div>
			<div class="square">
				<div class="content">
					<div class="table">
						<div class="table-cell">
							... CONTENT HERE ...
						</div>
					</div>
				</div>
			</div>
			<div class="square">
				<div class="content">
					<div class="table">
						<div class="table-cell">
							... CONTENT HERE ...
						</div>
					</div>
				</div>
			</div>
			<div class="square">
				<div class="content">
					<div class="table">
						<div class="table-cell">
							... CONTENT HERE ...
						</div>
					</div>
				</div>
			</div>
			<div class="square">
				<div class="content">
					<div class="table">
						<div class="table-cell">
							... CONTENT HERE ...
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
	</body>
	<?php endif ?>
</html>
