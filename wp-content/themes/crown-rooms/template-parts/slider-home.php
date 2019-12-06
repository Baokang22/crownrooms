<div class="home-slider owl-carousel">
<?php $hero_slider_images = get_field( 'hero_slider' ); ?>
<?php if ( $hero_slider_images ) :  ?>
    <?php foreach ( $hero_slider_images as $hero_slider_image ): ?>
        <div class="item">
			<img src="<?php echo $hero_slider_image['sizes']['large']; ?>" alt="<?php echo $hero_slider_image['alt']; ?>" />
        </div>
	<?php endforeach; ?>
<?php endif; ?>
</div>
