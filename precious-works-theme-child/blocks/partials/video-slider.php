<?php 
if($videos) {
    $per_view = !isset($per_view) ? 1 : $per_view;
    $bullet_count = count($videos); ?>



<div class="videos-container videos-slider-container container">
    <div class="videos-glide glide"
        data-per-view="<?php echo esc_attr($per_view); ?>" 
        data-autoplay='false'>

        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">

                <?php foreach ($videos as $video) { ?>
                    <?php $video_id = 0;

                    if (is_object($video) && isset($video->ID)) {
                        $video_id = (int) $video->ID;
                    } elseif (is_numeric($video)) {
                        $video_id = (int) $video;
                    } ?>
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
<?php 
} ?>