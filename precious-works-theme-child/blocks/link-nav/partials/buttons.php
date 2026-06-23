<?php if (!empty($button)) { ?>

    <li>
        <a
            class="pw-solid-button color-inherit"
            href="<?php echo esc_url($button['url']); ?>"
            target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
        >
            <?php echo esc_html($button['title']); ?>
        </a>
    </li>

<?php }; ?>