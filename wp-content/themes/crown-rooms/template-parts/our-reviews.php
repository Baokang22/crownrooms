<div class="row">
    <div class="our-reviews" id="reviews">
        <p class="uppercase">Our reviews</p>
        <h2>What our guests say</h2>
        <div class="our-reviews-slider owl-carousel owl-theme">
            <?php if (have_rows('reviews')) : ?>
                <?php while (have_rows('reviews')) : the_row(); ?>
                    <div class="item">
                        <?php $client_photo = get_sub_field('client_photo'); ?>
                        <p class="comment">“<?php the_sub_field('client_comment'); ?>”
                        </p>
                        <div class="guest-box">
                            <?php if ($client_photo) { ?>
                                <img class="guest-photo" src="<?php echo $client_photo['url']; ?>" alt="<?php echo $client_photo['alt']; ?>">
                            <?php } ?>
                            <p class="guest-name"><?php the_sub_field('client_name'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found 
                    ?>
            <?php endif; ?>
        </div>
    </div>
</div>