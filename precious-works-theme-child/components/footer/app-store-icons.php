<div class="footer-social-wrapper" role="navigation" aria-label="Social Media Links">
    
    <h5 class="footer-menu-title">
        <?php echo esc_html( $app_store_column_title ); ?>
    </h5>

    <ul class="social-list list-unstyled mb-0 ms-0 d-flex">
        <?php while(have_rows('app_store_icons', 'options')) {
            the_row(); 
            $image_type = get_sub_field('image_type'); 
            $icon = get_sub_field('icon');
            $image = get_sub_field('image');  
            $social_media_type = get_sub_field('social_media_type'); 
            $link = get_sub_field('link');  ?>

            <li>
                <a 
                    href="<?php echo esc_url($link); ?>" 
                    aria-label="<?php echo esc_attr('Follow us on ' . $social_media_type); ?>" 
                    target="_blank" 
                    class="color-inherit"
                    rel="noopener noreferrer"
                >
                    <?php 
                    if ($image_type === 'icon') { ?>
                        <!-- Ensure icon has aria-hidden="true" 
                        If $icon lacks it, wrap it manually: -->
                         <span class="wildcard-icon" role="img" aria-label="<?php echo esc_attr($social_media_type); ?>">
                            <?php echo $icon; ?>
                        </span>
                    <?php } elseif ($image_type === 'image') {
                        echo wp_get_attachment_image($image, 'full', false); 
                    }
                    ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
