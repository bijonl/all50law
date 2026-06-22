<?php foreach($footer_logo_gallery as $logo) { ?>
    <div class="col-12 col-sm-6 col-lg-4 col-xl footer-logo-gallery-col">
        <div class="single-image-wrapper">
            <?php echo wp_get_attachment_image($logo['ID'], 'full', false, array('class' => '')) ?>
        </div>
    </div>
<?php } ?>
