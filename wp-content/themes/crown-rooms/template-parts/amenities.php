<div class="row">
    <section class="amenities" id="amenities">
        <h2 class="title">Amenities</h2>
        <div class="amenities-container">


            <ul class="amenities-list">
                <?php if (have_rows('amenities')) : ?>
                    <?php while (have_rows('amenities')) : the_row(); ?>
                        <?php $amenities_icon = get_sub_field('amenities_icon'); ?>
                        <li>
                            <?php if ($amenities_icon) { ?>
                                <img src="<?php echo $amenities_icon['url']; ?>" alt="<?php echo $amenities_icon['alt']; ?>" />
                            <?php } ?>
                            <span><?php the_sub_field('description'); ?></span>
                        </li>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found 
                        ?>
                <?php endif; ?>

            </ul>
        </div>
    </section>
</div>