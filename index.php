<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<?php $posts = getPublishedPosts(); ?>

	<head>
		<title>Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="static/js/jquery.min.js"></script>
		<script src="static/js/jquery.dropotron.min.js"></script>
		<script src="static/js/skel.min.js"></script>
		<script src="static/js/skel-layers.min.js"></script>
		<script src="static/js/init.js"></script>

		<link rel="stylesheet" href="static/css/skel.css" />
		<link rel="stylesheet" href="static/css/public_styling.css" />

	</head>
	<body>
			<div class="wrapper style">

			<?php include('includes/header.php') ?>
			
				<div id="banner" class="container">
					<section>
						<p>This is <strong>HealthCoach</strong>, our aim is to assist people in living healthier lives by providing recipes as alternative to fast food.</p>
					</section>
				</div>
				<div id="extra">
					<div class="container">
						<div class="row no-collapse-1">
							<?php foreach ($posts as $post): ?>
							<section class="4u"> <a href="#" class="image featured"><img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="">
							</a>
								<div class="box">
									<p><?php echo $post['title'] ?></p>
									<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" class="button">Read More</a> </div>
							</section>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>