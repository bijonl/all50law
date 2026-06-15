<?php 
$display_title = !empty($display_title) ? $display_title : 'h1'; 
$display_title .= ' mb-0'; 
$title_format = get_field('title_format') ? get_field('title_format') : 'vertical';
$horizonal_title = $title_format === 'horizontal'; 
$title_alignment = isset($title_alignment) ? $title_alignment : 'text-center'
?>

<?php if ($has_title_area) { ?>
    <section 
        class="title-area-container container <?php echo $title_format ?>" 
        role="region" 
        aria-labelledby="section-title-<?php echo esc_attr($block['id']); ?>"
    >
        <div class="title-area-row row">
            <div class="title-area-col <?php echo  $horizonal_title ? 'col-lg-6' : 'col-12 '.$title_alignment ?>">
                <div class="title-area-content-wrapper">
                    
                    <?php if (!empty($section_title)) { ?>
                        <div class="title-wrapper">
                            <?php 
                                // Heading gets an ID so region can be linked to it
                                echo pw_seo_heading(
                                    $section_title, 
                                    $section_title_tag, 
                                    $display_title, 
                                    [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                                ); 
                            ?>
                        </div>
                    <?php } ?>

                    <?php if (!empty($section_subtitle) && !$horizonal_title) { ?>
                        <div class="subtitle-wrapper <?php echo $horizonal_title ? 'w-100' : ''  ?> wysiwyg">
                            <?php echo $section_subtitle; ?>
                        </div>
                    <?php } ?>

                    <?php if(!$horizonal_title) {
                        include(locate_template('blocks/partials/button-area.php')); ?>
                    <?php } ?>

                </div>
            </div>
            <div class="button-area-col text-start <?php echo  $horizonal_title ? 'col-lg-5 ms-auto' : 'col-12 text-center' ?>">
                <?php if (!empty($section_subtitle) && $horizonal_title) { ?>
                        <div class="subtitle-wrapper <?php echo $horizonal_title ? 'w-100' : ''  ?> wysiwyg">
                            <?php echo $section_subtitle; ?>
                        </div>
                <?php } ?>
                
                
                <?php if($horizonal_title) {
                    $button_type = 'pw-text-button'; 
                    include(locate_template('blocks/partials/button-area.php')); ?>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
