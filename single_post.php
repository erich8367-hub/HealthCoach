<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
?>
<title><?php echo $post['title'] ?></title>

<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="static/js/jquery.min.js"></script>
		<script src="staticjs/jquery.dropotron.min.js"></script>
		<script src="static/js/skel.min.js"></script>
		<script src="static/js/skel-layers.min.js"></script>
		<script src="static/js/init.js"></script>
		
		<link rel="stylesheet" href="static/css/skel.css" />
		<link rel="stylesheet" href="static/css/public_styling.css" />
	</head>
	<body>
			<div class="wrapper style">
				<?php include('includes/header.php') ?>
					<div id="page" class="container">
						<section>
							<?php if ($post['published'] == false): ?>
							<h2>Sorry... This post has not been published</h2>
							<?php else: ?>
							<h2><?php echo $post['title']; ?></h2>
							<br>
							<?php echo html_entity_decode($post['body']); ?>
							<?php endif ?>
						</section>
					</div>
			</div>
	</body>
</html>