<?php $per_view = 1;
$bullet_count = count($images); ?>

<div class="image-container image-slider-container container">
    <div class="image-glide glide" 
    data-per-view="<?php echo esc_attr($per_view); ?>" 
    data-autoplay='2000'>

        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">

                <?php foreach ($images as $image) { ?>

                    <li class="image-col glide__slide">
                        <?php echo wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'w-100 h-auto')) ?>
                    </li>

                <?php }; ?>

            </ul>

        </div>

        <?php if ($bullet_count > 1) { ?>

            <div class="glide__bullets mt-4" data-glide-el="controls[nav]">

                <?php for ($i = 0; $i < $bullet_count; $i++) { ?>

                    <button
                        class="glide__bullet"
                        data-glide-dir="=<?php echo $i; ?>"
                        aria-label="Go to review <?php echo $i + 1; ?>">
                    </button>

                <?php }; ?>

            </div>
        <?php }; ?>
    </div>
</div>