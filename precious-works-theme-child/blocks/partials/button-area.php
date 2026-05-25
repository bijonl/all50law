<?php if (!empty($section_button)) { ?>
    <div class="button-area-wrapper">
        <a 
            href="<?php echo esc_url($section_button['url']); ?>" 
            target="<?php echo esc_attr($section_button['target'] ?: '_self'); ?>" 
            class="<?php echo $button_type ? $button_type : 'pw-solid-button' ?>"
            <?php if (!empty($section_button_aria_label) && $section_button_aria_label !== $section_button['title']) { ?>
                aria-label="<?php echo esc_attr($section_button_aria_label); ?>"
            <?php } ?>
        >
            <?php echo esc_html($section_button['title']); ?>
            <?php if($button_type === 'pw-text-button') { ?>
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
            <?php } ?>
        </a>
    </div>
<?php } ?>
