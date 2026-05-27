<?php 
include(locate_template('blocks/partials/global-block-variables.php'));  ?>

<?php 

$all_practices_args = array(
    'post_type'      => 'practices',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
);

$all_practices = new WP_Query($all_practices_args); 

$has_content = true; 

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include(locate_template('blocks/partials/title-area.php')); ?>

    <div class="practice-list-container container">
        <div class="practice-list-row row">
            <div class="practice-list-col col-12">
                <?php if ($all_practices && $all_practices->have_posts()) { ?>
                    <nav aria-label="Practices List">
                        <ul class="list-unstyled mb-0 ms-0">
                            <?php while ($all_practices->have_posts()) { 
                                $all_practices->the_post();
                                $practice_title = get_the_title();
                                $practice_link  = get_permalink();
                            ?>

                                <?php if (!empty($practice_title) && !empty($practice_link)) { ?>
                                    <li class="mb-5">
                                        <a 
                                            class="practice-link color-inherit fw-bold"
                                            href="<?php echo esc_url($practice_link); ?>"
                                            aria-label="View practice page for <?php echo esc_attr($practice_title); ?>"
                                        >
                                            <?php echo esc_html($practice_title); ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </nav>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>