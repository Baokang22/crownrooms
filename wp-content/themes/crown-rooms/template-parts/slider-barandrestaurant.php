<div class="row">
    <section class="barandrestaurant" id="restaurant">
        <!-- <div class="barandrestaurant-slider owl-carousel owl-theme"> -->
        <?php if (have_rows('bar_and_restaurant')) : ?>
            <?php while (have_rows('bar_and_restaurant')) : the_row(); ?>
                <div class="item">
                    <div class="content">
                        <div class="inner-content">
                            <p class="sub-title">Crown rooms Newmarket</p>
                            <h2 class="title"><?php the_sub_field('header'); ?></h2>
                            <p class="description"><?php the_sub_field('description'); ?></p>
                            <?php $booking_link = get_sub_field('booking_link'); ?>
                            <a class="btn-book" href="<?php echo $booking_link['url']; ?>" target="_blank">Book now</a>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thai-street.png" alt="thai-street-cafe">
                        </div>
                    </div>
                    <div class="barandrestaurant-slider owl-carousel owl-theme">
                        <?php $photos_images = get_sub_field( 'photos' ); ?>
                        <?php if ($photos_images) { ?>
                            <?php foreach ( $photos_images as $photos_image ): ?>
                            <div class="img-content">
                                <img src="<?php echo $photos_image['url']; ?>" alt="<?php echo $photos_image['alt']; ?>" />
                            </div>
                            <?php endforeach; ?>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found 
                ?>
        <?php endif; ?>
        <!-- </div> -->
    </section>
</div>