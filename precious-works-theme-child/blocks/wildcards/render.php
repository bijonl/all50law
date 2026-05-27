<?php $wildcards = get_field('wildcards');
$cards_per_row = get_field('cards_per_row') ? get_field('cards_per_row') : 4;
$wildcard_format = get_field('wildcard_format');
$minimal_format = $wildcard_format === 'minimal'; 
$wide_image_format = $wildcard_format === 'wide-image'; 
$two_col_text = $wildcard_format === 'two-col-text'; 
$card_background_color = get_field('card_background_color');
$show_numbers = get_field('show_numbers'); 

if($two_col_text) {
    $row_classes = ''; 
}

if($wide_image_format) {
    $cards_per_row = 1; 
}

$row_classes = 'row-cols-1 row-cols-lg-' . $cards_per_row;
$container_class = $two_col_text ? 'container-fluid' : 'container'; 

include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = have_rows('wildcards') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 
 ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php if(!$two_col_text) { 
        include(locate_template('blocks/partials/title-area.php'));
    } ?>
    <div class="wildcards-container <?php echo $wildcard_format ?>-container <?php echo $container_class ?>">
  

        <div class="wildcards-row row <?php echo esc_attr($row_classes); ?>" role="list">
                <?php if($two_col_text) { ?>
                    <div class="col-lg-3">
                        <?php $display_title = 'h3'; ?>
                        <?php $title_alignment = 'text-start' ?>
                        <?php include(locate_template('blocks/partials/title-area.php')); ?>
                    </div>
                <?php } ?>
                <?php if($two_col_text) { ?>
                    <div class="wildcard-col-wrapper col-lg-9 d-flex flex-wrap">                   
                <?php } ?>
                
                <?php if(have_rows('wildcards')) {
                    $count = 1; 
                    while(have_rows('wildcards')) {
                        the_row(); 
                      
                        $title = get_sub_field('title'); 
                        $image = get_sub_field('image'); 
                        $icon = get_sub_field('icon'); 
                        $button = get_sub_field('button'); 
                        $image_type = get_sub_field('image_type'); 
                        $content = get_sub_field('content'); 
                        $wildcard_id = 'wildcard-'.get_row_index(); ?>
                        
                        <?php if($minimal_format) {  ?>
                            <div class="wildcards-col col u-focus-style" role="listitem">
                                <?php include(locate_template('blocks/wildcards/partials/minimal-wildcard.php')); ?>
                            </div>     

                        <?php } elseif($wide_image_format) { ?>
                            <div class="wildcards-col col mb-3 mx-auto text-center u-focus-style" role="listitem">
                                <?php include(locate_template('blocks/wildcards/partials/wide-image-wildcard.php')); ?>
                            </div> 
                        <?php } elseif($two_col_text) { ?>
                            <div class="wildcards-col text-center u-focus-style" role="listitem">
                                <?php include(locate_template('blocks/wildcards/partials/two-col-text.php')); ?>
                            </div> 
                        <?php } else { ?>
                            <div class="wildcards-col col mx-auto text-center u-focus-style" role="listitem">
                                <?php include(locate_template('blocks/wildcards/partials/single-wildcard.php')); ?>
                            </div> 
                        <?php } ?>
                        <?php $count++ ?>
                          
                <?php   
                    }
                } ?>
                </div>
            </div>
        </div>
        <div class="button-row row">
            <div class="button-col mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>

