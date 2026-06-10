<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$hero_image = get_field('hero_image'); 
$hero_image_alt = get_field('hero_image_alt') ?: get_post_meta($hero_image, '_wp_attachment_image_alt', true);
$practice_disclaimer = get_field('practice_disclaimer', 'options'); 
$practice_hero_callout_image = get_field('practice_hero_callout_image', 'options');
$practice_hero_callout_text = get_field('practice_hero_callout_text', 'options');
$practice_callout_text_attribute = get_field('practice_callout_text_attribute', 'options');
$practice_callout_text_attribute_position = get_field('practice_callout_text_attribute_position', 'options');
$practice_hero_button_link = get_field('practice_hero_button_link', 'options');
$video_modal_iframe = get_field('video_modal_iframe', 'options');
$practice_hero_button_text = get_field('practice_hero_button_text', 'options');
$button_url_type = get_field('button_url_type', 'options');



$image_url = wp_get_attachment_url($hero_image);

?>

<?php $has_content = $hero_image || $has_button_area || $has_title_area;
$display_title = 'h2 mb-0'; 

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?> 
    style="background-image: url('<?php echo wp_get_attachment_url($hero_image) ?>'); 
    background-size: cover; 
    background-repeat: no-repeat;

    "

>
    <div class="practice-hero-container container">
        <div class="practice-hero-row row gx-5 h-100">
            <div class="practice-hero-callut-col col-lg-5 me-auto">
                <?php include(locate_template('blocks/practice-hero/partials/callout.php')); ?> 
            </div>
        
            <div class="title-wrapper rounded-corners col-lg-6 me-auto">
                <?php include(locate_template('blocks/partials/breadcrumbs.php')); ?> 

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
                <?php if($practice_disclaimer) { ?>
                    <div class="disclaimer-wrapper disclaimer-text">
                        <?php echo $practice_disclaimer ?>
                    </div>
                <?php } ?>
            </div>
          
        </div>
    </div>
</section>