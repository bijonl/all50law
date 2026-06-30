<?php include(locate_template('blocks/partials/global-block-variables.php')); 
$top_title = get_field('top_title');
$bottom_title = get_field('bottom_title');
$form_id = get_field('form_id'); 
$form_title = get_field('form_title'); 
$form_subtitle = get_field('form_subtitle'); 
?>

<?php $has_content = !empty($form_id) || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="cta-form-block-container container">
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
                    <h2 class="bottom-0 bottom-title"><?php echo $bottom_title ?></h2>
                </div>
            </div>
            <div class="form-block-col col-lg-6 mx-auto">
                <h3><?php echo $form_title ?></h3>
                <p><?php echo $form_subtitle ?></p>
                <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
            </div>
        </div>
    </div>
</section>