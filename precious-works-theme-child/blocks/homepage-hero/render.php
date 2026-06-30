<?php include(locate_template('blocks/partials/global-block-variables.php')); 
$top_title = get_field('top_title');
$bottom_title = get_field('bottom_title');
$form_id = get_field('form_id'); 
$form_title = get_field('form_title'); 
$form_subtitle = get_field('form_subtitle', false, false); 
$logo_gallery = get_field('logo_gallery'); 
$gallery_title = get_field('gallery_title');
$hero_content = get_field('hero_content');
$hero_layout = get_field('hero_layout') ? get_field('hero_layout') : 'default';
$image = get_field('image');
$callout_title = get_field('callout_title');
$callout_subtitle = get_field('callout_subtitle');
?>


<?php $has_content = !empty($form_id) || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="cta-form-block-container container <?php echo $hero_layout ?>-layout">
        <div class="cta-form-block-row row mobile-spacing-row">
            <div class="cta-form-text-col col-lg-6">
                <div class="cta-form-text-wrapper position-relative h-100">
                     <?php 
                       // Heading gets an ID so region can be linked to it
                        echo pw_seo_heading(
                            $section_title, 
                            $section_title_tag, 
                            'h1', 
                            [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                        ); 
                    ?>
                    <?php if($section_subtitle) { ?>
                        <?php if($hero_layout === 'alt') { ?>
                            <div class="section-subtitle">
                                <?php echo $section_subtitle ?>
                            </div>
                        <?php } elseif($hero_layout === 'default') { ?>
                            <h5 class="section-subtitle h2 mt-4"><?php echo $section_subtitle ?></h5>
                        <?php } ?> 
                    <?php } ?>

                    <?php if($image) { ?>
                        <div class="image-wrapper">
                            <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-100 h-auto'));  ?>
                        </div>
                    <?php } ?>

                    <?php if($hero_content) { ?>
                        <div class="hero-content mw-100">
                            <?php echo $hero_content ?>
                        </div>
                    <?php } ?>

                    <?php if($hero_layout === 'default') { ?>
                        <?php if($gallery_title) { ?>
                            <h3 class="gallery-title mt-4"><?php echo $gallery_title ?></h3>
                        <?php } ?>
                        <?php if($logo_gallery) { ?>
                            <div class="gallery-wrapper d-flex flex-wrap flex-sm-wrap align-items-center gap-3">
                                <?php foreach($logo_gallery as $image) {
                                    echo wp_get_attachment_image($image['id'], 'full', false, array('class' => 'rounded-0')); 
                                } ?>
                            </div>
                        <?php } ?>
                    <?php } elseif($hero_layout === 'alt') { ?>
                        <div class="callout-box">
                            <div class="callout-box-content-wrapper background-light-grey rounded">
                                <div class="callout-box-title">
                                    <h6 class="mb-0"><?php echo $callout_title ?></h6>
                                </div>
                                 <div class="callout-box-subtitle">
                                    <p class="mb-0"><?php echo $callout_subtitle ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($hero_layout === 'alt') { ?>
                        <div class="disclaimer-text-wrapper">
                            <p class="disclaimer-text"><?php echo $disclaimer_text ?></p>
                        </div>

                    <?php } ?>
                    
                </div>
            </div>
            <div class="form-block-col col-lg-6 mx-auto">
                <div class="form-block-wrapper">
                    <h3><?php echo $form_title ?></h3>
                    <p><?php echo $form_subtitle ?></p>
                    <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>