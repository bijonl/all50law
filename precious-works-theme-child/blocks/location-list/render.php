<?php 
include(locate_template('blocks/partials/global-block-variables.php'));  ?>

<?php

$states = get_terms([
    'taxonomy'   => 'states',
    'hide_empty' => false,
    'orderby'    => 'name',
    'order'      => 'ASC',
]);

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <div class="location-list-container container">
        <div class="location-list-row row">
            <div class="location-list-col col-12">

                <?php if (!empty($states) && !is_wp_error($states)) { ?>

                    <?php foreach ($states as $state) { ?>

                        <div class="state-group mb-5">

                            <h3 class="state-title h5 mb-3">
                                <?php echo esc_html($state->name); ?>
                            </h3>

                            <?php

                            $locations = new WP_Query([
                                'post_type'      => 'locations',
                                'posts_per_page' => -1,
                                'orderby'        => 'title',
                                'order'          => 'ASC',
                                'tax_query'      => [
                                    [
                                        'taxonomy' => 'states',
                                        'field'    => 'term_id',
                                        'terms'    => $state->term_id,
                                    ],
                                ],
                            ]);

                            ?>

                            <?php if ($locations->have_posts()) { ?>

                                <ul class="list-unstyled mb-0 ms-0">

                                    <?php while ($locations->have_posts()) { $locations->the_post(); ?>

                                        <li class="mb-2">

                                            <a
                                                class="practice-link color-inherit"
                                                href="<?php echo esc_url(get_permalink()); ?>"
                                                aria-label="View location page for <?php echo esc_attr(get_the_title()); ?>"
                                            >
                                                <?php echo get_the_title(); ?>
                                            </a>

                                        </li>

                                    <?php }; ?>

                                </ul>

                                <?php wp_reset_postdata(); ?>

                            <?php }; ?>

                        </div>

                    <?php }; ?>

                <?php }; ?>

            </div>
        </div>
    </div>

</section>