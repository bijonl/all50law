<?php 
$office_id = get_the_id(); 
include(locate_template('blocks/partials/global-block-variables.php')); 
include(locate_template('components/variables/office-variables.php')); 

$hero_image = get_field('hero_image'); 
$hero_image_alt = get_field('hero_image_alt') ?: get_post_meta($hero_image, '_wp_attachment_image_alt', true);
$disclaimer_text = get_field('disclaimer_text'); 
$review_number = get_field('review_number');
$review_stars = get_field('review_stars');
$review_link = get_field('review_link');

$image_url = wp_get_attachment_url($hero_image);

?>

<?php $has_content = $hero_image || $has_button_area || $has_title_area;
$display_title = 'h2 mb-0'; 

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="location-hero-container">
        <div class="location-hero-row row gx-5 h-100">
            <div class="location-hero-callut-col"
            style="background-image: url('<?php echo wp_get_attachment_url($hero_image) ?>'); 
            background-size: cover; 
            background-repeat: no-repeat;">
                <?php include(locate_template('blocks/location-hero/partials/callout.php')); ?> 
            </div>
        
            <div class="location-text-title-wrapper">
                <?php if($review_link || $review_number || $review_stars) { ?>
                    <?php include(locate_template('blocks/location-hero/partials/reviews.php')); ?> 
                <?php } ?>
                <?php if($section_title) { ?>
                    <div class="big-title-wrapper">
                        <?php echo pw_seo_heading($section_title, $section_title_tag, $display_title) ?>
                    </div>
                <?php } ?>
                
                <?php if($section_subtitle){ ?>
                    <div class="subtitle-wrapper">
                        <p class="mb-0"><?php echo $section_subtitle ?></p>
                    </div>
                <?php }; ?>
     
         
  
                <?php include(locate_template('blocks/partials/button-area.php'));  ?>
                <?php if($disclaimer_text) { ?>
                    <div class="disclaimer-wrapper disclaimer-text">
                        <?php echo $disclaimer_text ?>
                    </div>
                <?php } ?>
            </div>
          
        </div>
    </div>
</section>