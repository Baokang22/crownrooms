<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
										echo ' :';
									} ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/logo.svg" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/logo.svg" rel="apple-touch-icon-precomposed">

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

</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->
			<div class="button_container" id="toggle">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</div>
			<?php include(locate_template('template-parts/mobile-menu.php')); ?>
			<!-- nav -->
			<section class="nav-section">
				<ul class="menu">
					<li class="menu-item" id="home"><a href="#tab-home">Home</a></li>
					<li class="menu-item" id="restaurant"><a href="#tab-restaurant">Restaurant / Bar</a></li>
					<li class="menu-item" id="getintouch"><a href="#tab-getintouch">Get in touch</a></li>
					<li class="menu-item" id="parking"><a href="#tab-parking">Parking</a></li>
					<li class="menu-item" id="booking"><a href="http://www.booking.com/hotel/gb/crown-rooms-newmarket.html" target="_blank">Make a Booking</a></li>
				</ul>
			</section>
			<!-- /nav -->
		</header>
		<!-- /header -->