<?php include(locate_template('components/variables/post-variables.php')); ?>

<div class="single-post-tile">

    <a href="<?php echo esc_url($permalink); ?>" class="single-post-link">
        
        <div class="single-post-image-wrapper">
            <?php
            if ($featured_image) {
                echo $featured_image;
            } else {
                echo wp_get_attachment_image(
                    $default_blog_image,
                    'full',
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
    </a>
</div>