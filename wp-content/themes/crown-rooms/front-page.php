<?php

/**
 * The front-page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CubiqTemplate
 */

get_header();
?>

<main class="et-main">
	<section class="row et-slide" id="tab-home">
		<?php include(locate_template('template-parts/slider-home.php')); ?>
		<?php include(locate_template('template-parts/welcome-content.php')); ?>
		<?php include(locate_template('template-parts/slider-accommodation.php')); ?>
		<?php include(locate_template('template-parts/amenities.php')); ?>
	</section>

	<section class="row et-slide" id="tab-restaurant">
		<?php include(locate_template('template-parts/slider-barandrestaurant.php')); ?>

	</section>
	<section class="row et-slide" id="tab-getintouch">
		<?php include(locate_template('template-parts/contact-us.php')); ?>
	</section>
	<section class="row et-slide" id="tab-parking">
		<?php include(locate_template('template-parts/find-us.php')); ?>
	</section>
	<section class="row et-slide" id="tab-our-reviews">
		<?php include(locate_template('template-parts/our-reviews.php')); ?>
	</section>
</main>


<?php get_footer(); ?>