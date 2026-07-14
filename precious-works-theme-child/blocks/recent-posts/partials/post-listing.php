<?php include(locate_template('components/variables/post-variables.php')); ?>

<div class="single-post-tile d-flex align-items-center">
    <div class="single-post-image-wrapper ">
        <?php
        if ($featured_image) {
            echo get_the_post_thumbnail($id, 'thumbnail', array('class' => '')); 
        } else {
            echo wp_get_attachment_image(
                $default_blog_image,
                'thumbnail',
                false,
                array(
                    'class' => 'w-100 h-auto',
                    'alt'   => esc_attr($title)
                )
            );
        }
        ?>
    </div>

    <div class="single-post-title-wrapper">
        <h3 class="mb-0 single-post-title">
            <?php echo esc_html($title); ?>
        </h3>
    </div>
    <div class="single-post-term-wrapper">
        <?php if (!empty($terms)) { ?>
            <ul class="term-wrapper list-unstyled">
                <?php foreach ($terms as $term) {
                    if ($term->term_id === 1) continue; ?>
                    <li class="single-term">
                        <?php echo esc_html($term->name); ?>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>