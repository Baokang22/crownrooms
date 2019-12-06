<div class="row">
    <section class="accommodation" id="accommodation">
        <!-- <div class="accommodation-slider owl-carousel owl-theme"> -->
        <?php if (have_rows('accommodation')) : ?>
            <?php while (have_rows('accommodation')) : the_row(); ?>
                <div class="item">
                <div class="accommodation-slider owl-carousel owl-theme">
                        <?php $photos_images = get_sub_field( 'room_photo' ); ?>
                        <?php if ($photos_images) { ?>
                            <?php foreach ( $photos_images as $photos_image ): ?>
                            <div class="img-content">
                                <img src="<?php echo $photos_image['url']; ?>" alt="<?php echo $photos_image['alt']; ?>" />
                            </div>
                            <?php endforeach; ?>
                        <?php } ?>
                    </div>
                    <div class="content">
                        <div class="inner-content">
                            <p class="sub-title">Crown rooms Newmarket</p>
                            <h2 class="title"><?php the_sub_field( 'room_type' ); ?></h2>
                            <p class="description"><?php the_sub_field('room_description'); ?></p>
                            <p class="price">Rooms from £<?php the_sub_field( 'room_price' ); ?> per night</p>
                            <?php $booking_link = get_sub_field('booking_link'); ?>
                            <a class="btn-book" href="<?php echo $booking_link['url']; ?>" target="_blank">Book now</a>
                        </div>
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