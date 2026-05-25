<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$hero_image = get_field('hero_image'); 
$hero_image_alt = get_field('hero_image_alt') ?: get_post_meta($hero_image, '_wp_attachment_image_alt', true);

$image_url = wp_get_attachment_url($hero_image);

?>

<?php $has_content = $hero_image || $has_button_area || $has_title_area;
$display_title = 'h2 mb-0'; 

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="interior-hero-container container">
        <div class="interior-hero-row row h-100">
            <div class="title-wrapper col-lg-5 me-auto">
                    <?php if($section_title) { ?>
                        <div class="big-title-wrapper">
                            <?php echo pw_seo_heading($section_title, $section_title_tag, $display_title) ?>
                        </div>
                    <?php } ?>
                    
                    <?php if($section_subtitle){ ?>
                        <div class="subtitle-wrapper">
                            <?php echo $section_subtitle ?>
                        </div>
                    <?php }; ?>
                    <?php include(locate_template('blocks/partials/button-area.php'));  ?>
                </div>
            <div class="col-lg-6">
            <?php if($hero_image && $image_url) { ?>
                <div class="image-wrapper">
                    <?php echo wp_get_attachment_image($hero_image, 'full', false, array('class'=>'w-100 h-auto')) ?>
                </div>
            <?php }; ?>
            </div>
        </div>
    </div>
</section>