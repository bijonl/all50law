<?php $per_view = 1;
$bullet_count = count($videos); ?>

<div class="videos-container videos-slider-container container">
    <div class="videos-glide glide">

        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">

                <?php foreach ($videos as $video_id) { ?>
                    <?php include locate_template('components/variables/video-variables.php'); ?>

                    <li class="videos-col glide__slide">
                        <?php include locate_template('blocks/video-list/partials/single-video.php'); ?>
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
                        aria-label="Go to videos <?php echo $i + 1; ?>">
                    </button>

                <?php }; ?>

            </div>
        <?php }; ?>
    </div>
</div>