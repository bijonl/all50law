<div class="single-wildcard-wrapper regular-card">
    <div class="wildcard-image-wrapper">
        <?php if ($image_type === 'icon') { ?>
            <span class="wildcard-icon" role="img" aria-label="<?php echo esc_attr($title); ?>">
                <?php echo $icon; ?>
            </span>
        <?php } elseif ($image_type === 'image' && $image) {
            // Get alt text or fallback
            $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
            $alt = $alt ?: esc_attr($title); // Fallback to title
            echo wp_get_attachment_image($image, 'thumbnail', false, ['alt' => $alt]);
        } ?>
    </div>
    <div class="wildcard-title-wrapper text-start">
        <h4 class="mb-0 h5"><?php echo esc_html($title); ?></h4>
    </div>
    <div class="wildcard-content-wrapper text-start">
        <p class="mb-0"><?php echo wp_kses_post($content); ?></p>
    </div>
    <?php if(!empty($button)) { ?>
    <div class="button-area-wrapper text-start">
        <a 
            href="<?php echo esc_url($button['url']); ?>" 
            target="<?php echo esc_attr($button['target'] ?: '_self'); ?>" 
            class="pw-text-button"
            aria-label="<?php echo esc_attr('Button for '.$title.'. Links to '.$button['url']); ?>"
        >
            <?php echo esc_html($button['title']); ?>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>

        </a>
    </div>
<?php } ?>

</div>