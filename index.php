<?php include('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<?php $posts = getPublishedPosts(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="static/css/util.css">
		<link rel="stylesheet" type="text/css" href="static/css/public_styling.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="limiter">
			<div class="background">
			<?php include('includes/navbar.php')?>
			    <div class="container">
					<?php foreach ($posts as $post): ?>
						<div class="square">
							<div class="content">
								<div class="table">
									<div class="table-cell">
										<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
										<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
										<div class="post_info">
											<h3><?php echo $post['title'] ?></h3>
										</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</body>
</html>
