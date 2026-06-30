<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 
$content = get_field('content'); 
$cta_format = get_field('cta_format'); 
$text_only = $cta_format === 'text-only'; 
$text_image = $cta_format === 'text-image'; 
$cta_image = get_field('cta_image'); 
?>

<?php $has_content = !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>


<section <?php echo pw_block_section_classes($block) ?>>
    <?php if($text_only) { ?>
        <div class="cta-container container">
            <div class="cta-row row mobile-spacing-row">
                <div class="cta-col col-sm-6 mx-auto text-center">
                    <?php if($section_title) { ?>
                        <div class="cta-title-wrapper">
                            <?php echo pw_seo_heading($section_title, $section_title_tag, 'h2') ?>
                        </div>
                    <?php } ?>
                    <?php if($section_subtitle) { ?>
                        <div class="cta-subtitle-wrapper">
                            <?php echo $section_subtitle ?>
                        </div>
                    <?php } ?>
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
                </div>
            </div>
        </div>
    <?php } elseif($text_image) { ?>
        <div class="cta-container container">
            <div class="cta-row row gx-5 align-items-center mobile-spacing-row">
                <div class="cta-image-col col-sm-4">
                    <div class="cta-image-wrapper">
                        <?php echo wp_get_attachment_image($cta_image['ID'], 'full', false, array('class'=>'mw-100 h-auto')) ?>
                    </div>
                </div>
            
                <div class="cta-col col-sm-7 mx-auto">
                    <?php if($section_title) { ?>
                        <div class="cta-title-wrapper">
                            <?php echo pw_seo_heading($section_title, $section_title_tag, 'h2') ?>
                        </div>
                    <?php } ?>
                    <?php if($section_subtitle) { ?>
                        <div class="cta-subtitle-wrapper">
                            <?php echo $section_subtitle ?>
                        </div>
                    <?php } ?>
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
                </div>
            </div>
        </div>
    <?php } ?>
   
</section>