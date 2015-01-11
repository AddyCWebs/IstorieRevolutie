<!DOCTYPE html>
<html>
	<head>
		<title>Tutorial theme</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<meta charset="ISO-8859-16">
		<meta name="description" content="Istoria Revolutiei de la 1989 uitata">
		<meta name="keywords" content="istorie, revolutie, 1989, sfantul, sava, revolutionari, elevi, webstite">
		<meta name="author" content='Colegiul National "Sfantul Sava"'>
	</head>
	<body lang="ro">
		<div class="navWrapper">
			<div class="logoWrapper" style="background-image:url('<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>')"></div>
			<nav>
				<ul class="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</ul>
			</nav>
		</div>
		<div id="topFiller"></div>