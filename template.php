<?php

$postID = get_query_var('post_id');
$post = get_post($postID);

if (! $post->post_content) {
	wp_redirect(home_url(), 301);
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>نسخه چاپی</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_URL; ?>/assets/print.css">
 </head>
<body>
	<div class="container">
		<div class="header">
			<div class="headerRight">
				<?php bloginfo('title'); ?>
			</div>
			<div class="headerLeft">
				<?php echo formatDate($post->post_date); ?>
			</div>
		</div>
		<article id="post">
			<h1><?php echo $post->post_title; ?></h1>
			<div class="postContent">
				<?php echo $post->post_content; ?>
			</div>
		</article>
	</div>

	<script>
		window.print();
		window.close();
	</script>
</body>
</html>