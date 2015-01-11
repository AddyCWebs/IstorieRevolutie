<html>
	<head>
		<title>Tutorial theme</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<div class="navWrapper">
			<div class="logoWrapper" style="background-image:url('<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>')"></div>
			<nav>
				<ul class="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</ul>
			</nav>
		</div>
		<div id="topFiller"></div>