<?php /* Template Name: somthing */?>
<?php wp_head();?>
<style>
.cv-spinner {
    display: flex;
    justify-content: center;
    align-items: center;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px #ddd solid;
    border-top: 4px #2e93e6 solid;
    border-radius: 50%;
    animation: sp-anime 0.8s infinite linear;
}

@keyframes sp-anime {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(359deg);
    }
}

.is-hide {
    display: none;
}
</style>
<?php
// WP_Query arguments
$args = array(
    'post_type' => 'sort_isotope',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'paged' => 1,
);
// The Query
$query = new WP_Query($args);
?>

<div class="grid">
    <?php
    if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
        $image = get_field('image');
        $terms = get_the_terms(get_the_ID(), 'sort_images');
        $listOfTerms = array();
        
        foreach ($terms as $term) {
            $listOfTerms[] = $term->slug;
        }
        $mergeTerms = join(' ', $listOfTerms);
        ?>
        
    <img class="<?php echo $mergeTerms; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endwhile;
endif;
?>
</div>
<div class="cv-spinner">
    <span class="spinner"></span>
</div>

<div class="button-group filters-button-group">
    <?php
$terms = get_terms('sort_images');
$count = count($terms);
if ($count > 0) {
    foreach ($terms as $term) {
        echo '<button data-filter=' . '.' . $term->slug . ' >' . $term->name . '</button>';
    }
    echo '<button data-filter="*">show all</button>';
    echo '<button class="load-more">load more</button>';
    $total = $query->max_num_pages;
    echo '<span id="number_of_item">1</span> / <span id="total_items">'.$total.'</span>';
}
?>
</div>
<script>
jQuery(document).ready(function($) {
    var $grid = $('.grid').isotope({
        itemSelector: 'img',
        layoutMode: 'fitRows'
    });
    // bind filter button click
    // filter functions
    var filterFns = {};
    $('.filters-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });
});
</script>
<?php wp_footer();?>