<div class="single-wildcard-wrapper minimal-wildcard background-<?php echo $card_background_color ?>">
    <div class="minimal-wc-title-wrapper d-flex align-items-center">
        
        <?php if($icon || $image) { ?>
            <div class="wildcard-image-wrapper">
                <?php if ($image_type === 'icon' && $icon ) { ?>
                    <span class="wildcard-icon" role="img" aria-label="<?php echo esc_attr($title); ?>">
                        <?php echo $icon; ?>
                    </span>
                <?php } elseif ($image_type === 'image' && $image) {
                    // Get alt text or fallback
                    $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
                    $alt = $alt ?: esc_attr($title); // Fallback to title
                    echo wp_get_attachment_image($image, 'thumbnail', false, ['alt' => $alt, 'class' => 'mw-100' ]);
                } ?>
            </div>
        <?php } ?>
     
        <div class="wildcard-title-wrapper text-start">
            <h4 class="mb-0 h6"><?php echo esc_html($title); ?></h4>
        </div>
    </div>
    <div class="wildcard-content-wrapper text-start">
        <p class="mb-0"><?php echo wp_kses_post($content); ?></p>
    </div>
</div>