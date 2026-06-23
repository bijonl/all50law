<?php if (!empty($logo)) : ?>
    <div class="logo-wrapper-nav">
        <?php
        echo wp_get_attachment_image(
            $logo['ID'],
            'full',
            false,
            [
                'class' => 'w-100 h-auto'
            ]
        );
        ?>
    </div>
<?php endif; ?>