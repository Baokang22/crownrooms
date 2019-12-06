<section class="row">
    <div class="welcome animated fadeIn" id="about">
        <?php if (have_rows('introduction')) : ?>
            <?php while (have_rows('introduction')) : the_row(); ?>
                <h2 class="title"><?php the_sub_field('header'); ?></h2>
                <p class="sub-title"><?php the_sub_field('sub_header'); ?></p>
                <div class="content">
                    <?php the_sub_field('introduction_content'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>