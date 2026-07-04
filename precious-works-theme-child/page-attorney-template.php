<?php /**
 * Template Name: Top Level Attorney Page
*/  

$professionals_args = array(
    'post_type' => 'professionals', 
    'posts_per_page' => -1, 
    'post_status' => 'publish', 
    'fields' => 'ids', 
); 

$professionals = new WP_Query($professionals_args); 
$blog_title = get_the_title(); 
$blog_intro = get_field('blog_page_intro');
$professionals_per_row = 4; 




?>

<?php echo get_header(); ?>
    <section class="attorney-archive-hero-section block-section pb-0" id="attorney-archive-hero">
        <?php
        $section_title = 'The Right Attorney, Wherever You Are';
        $section_subtitle = 'With over 1,000 attorneys across the country, we are ready to fight for you—anytime, anywhere.'; 
        $section_title_tag = 'h1'; 
        $title_format = 'horizontal';
        $has_title_area = true; 
        $block = array('id' => 'professional-archive-title'); 
         
        include(locate_template('blocks/partials/title-area.php')); ?> 
    </section>

    <section class="attorney-archive-content-section block-section pt-0" id="attorney-content-section">
        <div class="attorney-posts-container container">
          <div class="attorney-posts-row row  mobile-spacing-row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-<?php echo $professionals_per_row ?>">
           <?php if($professionals->have_posts()) {
                    while($professionals->have_posts()) { 
                        $professionals->the_post(); 
                        $id = get_the_id(); 
                        include locate_template('components/variables/professionals-variables.php'); ?>
                        <div class="attorney-posts-col col">
                            <?php include locate_template('components/professionals/single-attorney.php'); ?>
                        </div>
                <?php wp_reset_postdata(); 

                    }
                    wp_reset_postdata(); 
                } ?>
          </div>
        </div>
    </section>

    <?php the_content() ?>



<?php echo get_footer() ?>
