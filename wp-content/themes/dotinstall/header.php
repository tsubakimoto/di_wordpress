<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
	<div id="header" class="container">
		<h1>
			<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
		</h1>
		<?php wp_nav_menu(); ?>
	</div><!-- /header -->
<?php wp_head(); ?>