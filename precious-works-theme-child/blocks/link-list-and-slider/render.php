<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$link_list_title = get_field('link_list_title');
$link_list = get_field('link_list');
$slider_title = get_field('slider_title'); 
$slides = get_field('slides'); 

?>                


<?php $has_content = 
!empty($link_list_title) || 
!empty($slider_title) || 
have_rows('link_list') || 
$has_button_area || 
have_rows('slides');

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block); ?>>
    
    <?php include(locate_template('blocks/partials/title-area.php')); ?>

    <div class="link-list-and-slider-container container">
        <div class="link-list-and-slider-title-row row <?php echo empty($slider_title) ? 'pb-0': '' ?>">
             <?php if(!empty($link_list_title)) { ?>
                <div class="col-sm-8">
                    <div class="link-list-title-wrapper d-none d-lg-block">
                        <h3 class="h5"><?php echo $link_list_title ?></h3>
                    </div>
                </div>
            <?php } ?>
            <?php if(!empty($slider_title)) { ?>
                <div class="col-sm-4">
                    <div class="link-list-title-wrapper d-none d-lg-block">
                        <h3 class="h5"><?php echo $slider_title ?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="link-list-and-slider-row row">
            <?php if(have_rows('link_list')) { ?>
                <div class="link-list-and-slider-col link-col <?php echo !have_rows('slides') ? 'col-lg-12' : 'col-lg-8' ?> ">
                    <?php if(!empty($link_list_title)) { ?>
                        <div class="link-list-title-wrapper d-block d-lg-none">
                            <h3 class="h5"><?php echo $link_list_title ?></h3>

                        </div>
                    <?php } ?>
                  
                    <div class="link-list-and-slider-wrapper d-flex flex-wrap">
                        <?php while(have_rows('link_list')) { ?>
                            <?php the_row(); 
                            $link = get_sub_field('link'); 
                            
                            ?>
                            <?php include(locate_template('blocks/link-list-and-slider/partials/single-link.php')); ?>
                        <?php } ?>
                    </div>
                    <?php include(locate_template('blocks/partials/button-area.php'));  ?>
                </div>
            <?php } ?>

               <?php if(have_rows('slides')) { ?>
                <div class="link-list-and-slider-col slider-col col-lg-4">
                    <?php if(!empty($slider_title)) { ?>
                    <div class="link-list-title-wrapper d-block d-lg-none">
                        <h3 class="h5"><?php echo $slider_title ?></h3>
                    </div>
                    <?php } ?>

                    <div class="glide link-glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <?php while(have_rows('slides')) { 
                                    the_row(); 
                                    $slide_title = get_sub_field('slide_title');
                                    $slide_subtitle = get_sub_field('slide_subtitle'); 
                                    $link = get_sub_field('link');  

                                    include(locate_template('blocks/link-list-and-slider/partials/single-slide.php')); 

                                } ?>
                           
                            </ul>
                            <div class="glide__bullets pt-4 justify-content-start" data-glide-el="controls[nav]">
                                <?php for ($i = 0; $i < count($slides); $i++) { ?>
                                    <button
                                        class="glide__bullet"
                                        data-glide-dir="=<?php echo $i * 1; ?>"
                                        aria-label="Go to slide group <?php echo $i + 1; ?>">
                                    </button>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>