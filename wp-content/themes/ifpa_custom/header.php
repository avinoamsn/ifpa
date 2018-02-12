<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Institute for Patient Access</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<!--link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
        // conditionizr.com
		// configure environment tests
		conditionizr.config({
  			assets: '<?php echo get_template_directory_uri(); ?>',
  			tests: {}
		});
    </script>
    <!-- custom JS scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/nav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div id="main" class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->

			<!-- nav -->
			<nav role="navigation"><?php wp_nav_menu(array('theme_location' => 'header-menu')); ?></nav>

			<!--menu icon, for dropdown menu-->
			<nav class="nav" id="menu-icon" onclick="dropdown()">&#9776;</nav>
			<?php wp_nav_menu(array('theme_location' => 'sidebar-menu')); ?>
			<!-- /nav -->
			
		</header>
		<!-- /header -->