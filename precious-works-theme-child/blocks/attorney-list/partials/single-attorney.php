<?php $image_id = !empty($thumbnail_image['ID']) ?  $thumbnail_image['ID'] : $default_attorney_image_id; ?>

<div class="single-attorney-wrapper">
    <div class="single-attorney-content-wrapper">
        <a href="<?php echo $permalink ?>">
            <div class="single-attorney-image-wrapper">
                <?php echo wp_get_attachment_image($image_id, 'square', false, array('class' => 'w-100 h-auto')) ?>
            </div>
        </a>        
        <div class="single-attorney-name-wrapper pt-4">
            <h5><?php echo $full_name ?><h5>
        </div>
        <div class="single-attorney-contact-wrapper pt-4">
        <?php if($phone_number) { ?>
            <a
                href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>"
                aria-label="Call <?php echo esc_attr($full_name); ?> at <?php echo esc_attr($phone_number); ?>">
                <i class="fa-solid fa-phone" aria-hidden="true"></i>
            </a>
        <?php } ?>

        <?php if($professional_email) { ?>
            <a
                href="mailto:<?php echo antispambot($professional_email); ?>"
                aria-label="Email <?php echo esc_attr($full_name); ?>">
                <i class="fa-regular fa-envelope" aria-hidden="true"></i>
            </a>
        <?php } ?>

    </div>

    </div>
</div>
