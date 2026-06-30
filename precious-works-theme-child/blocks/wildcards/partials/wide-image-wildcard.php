<div class="single-wildcard-wrapper wide-image row align-items-center background-<?php echo $card_background_color ? $card_background_color : 'background-light-grey' ?> mb-sm-3">
    <div class="wildcard-image-col col-lg-6 h-100 px-0">
        <div class="wildcard-image-wrapper pb-0 mw-100 h-100">
        <?php if ($image_type === 'icon') { ?>
            <span class="wildcard-icon" role="img" aria-label="<?php echo esc_attr($title); ?>">
                <?php echo $icon; ?>
            </span>
        <?php } elseif ($image_type === 'image' && $image) {
            // Get alt text or fallback
            $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
            $alt = $alt ?: esc_attr($title); // Fallback to title
            echo wp_get_attachment_image($image, 'full', false, ['alt' => $alt, 'class' => 'w-100 h-auto']);
        } ?>
        </div>
    </div>
    <div class="wildcard-text-content-col rounded-corners px-sm-4 h-100 background-white text-start col-lg-6">
        <div class="wildcard-text-content-wrapper px-sm-4 justify-content-center d-flex flex-column">
        <div class="wildcard-number-wrapper background-<?php echo $card_background_color==='none' ? 'light-grey' : $card_background_color ?>">
            <p class="h4 mb-0"><?php echo esc_html($count); ?></p>
        </div>
        <div class="wildcard-title-wrapper">
            <h4 class="mb-0"><?php echo esc_html($title); ?></h4>
        </div>
        <div class="wildcard-content-wrapper">
            <p class="mb-0"><?php echo wp_kses_post($content); ?></p>
        </div>
        <?php if(!empty($button)) { ?>
        <div class="button-area-wrapper">
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
    </div>
</div>