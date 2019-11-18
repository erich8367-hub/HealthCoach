<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo $post['title'] ?> | HealthCoach</title>
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container">
                <div class="wrap">	
                    <?php if ($post['published'] == false): ?>
                        <h2 class="post-title">Sorry... This post has not been published</h2>
                    <?php else: ?>
                        <h2 class="post-title"><?php echo $post['title']; ?></h2>
                        <div class="post-body-div">
                            <?php echo html_entity_decode($post['body']); ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </body>
</html>