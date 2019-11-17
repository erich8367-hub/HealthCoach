<?php  include('config.php'); ?>

<?php require_once(ROOT_PATH . '/public_functions.php') ?>

<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>


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
	<?php  if (isset($_SESSION['username'])) : ?>
		<body>
			<div class="limiter">
				<div class="container">
					<div class="wrap-input100">
						<input class="input100" type="text" name="search" placeholder="Search">
						<span class="focus-input100"></span>
						<span class="symbol-input100">							
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
					</div>
					<?php foreach ($posts as $post): ?>
						<div class="square">
							<div class="content">
								<div class="table">
									<div class="table-cell">
										<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
										<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
										<div class="post_info">
											<h3><?php echo $post['title'] ?></h3>
											<div class="info">
												<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
												<span class="read_more">Read more...</span>
											</div>
										</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</body>
	<?php endif ?>
</html>
