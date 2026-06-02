<?php $reviews = get_field('reviews');
$review_format = get_field('review_format'); 
$is_slider = $review_format === 'slider'; 
include(locate_template('blocks/partials/global-block-variables.php')); 

$has_content = have_rows('reviews') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <?php if(!$is_slider) { ?>
        <div class="reviews-container container">
            <div class="reviews-row row g-3">
                <?php foreach ($reviews as $review_id) { ?>
                    <?php include(locate_template('components/variables/review-variables.php')); ?>
                    <?php if(!$is_slider) { ?>
                        <div class="reviews-col col-md-6 col-lg-4">
                            <?php include(locate_template('blocks/reviews/partials/single-review.php')); ?>    
                        </div>  
                <?php }; ?>
            </div>
        </div>
    <?php } 
    } elseif($is_slider) {
        include(locate_template('blocks/reviews/partials/review-slider.php')); ?>    
    <?php } ?>
    
</section>

