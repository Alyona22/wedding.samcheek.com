<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>wedding.samcheek.com</title>
	<link media="all" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js" defer><\/script>')</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.main.js" defer></script>

	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<div class="container">
				<strong class="logo">
					<?php the_custom_logo(); ?>
				</strong>
				<nav class="nav">
					<input type="checkbox" id="menu">
					<label for="menu" class="menu-opener"></label>
					<div class="menu-holder">
						<ul class="menu">
							<?php wp_nav_menu( array(
										'container' 	 => 'div',
										'container_class'=> 'menu-holder',
										'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									));
								?>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<main id="main">