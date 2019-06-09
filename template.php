<?php

$postID = get_query_var('post_id');
$post = get_post($postID);

if (! $post) {
	wp_redirect(home_url(), 301);
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $post->post_title; ?> - نسخه چاپی</title>
</head>
<body>
	<div class="container">
		<article id="post">
			<h1><?php echo $post->post_title; ?></h1>
			<div class="postContent">
				<?php echo $post->post_content; ?>
			</div>
		</article>
	</div>
</body>
</html>