<?php $display_title = $video_title ? $video_title : $default_video_title; 
$video_uid = $video_id . '-' . $block['id'];

?>

<article class="single-video-wrapper" aria-labelledby="video-title-<?php echo $video_uid; ?>">
    <div class="single-video-content-wrapper">

        <div class="video-image-wrapper">
            <button
                type="button"
                class="border-0 bg-transparent"
                data-bs-toggle="modal"
                data-bs-target="#video-<?php echo $video_uid; ?>"
                aria-label="Play video: <?php echo esc_attr($display_title); ?>">

                <?php echo wp_get_attachment_image(
                    $video_image_id,
                    'full',
                    false,
                    array(
                        'class' => 'w-100 h-auto'
                    )
                ); ?>

            </button>
        </div>

        <div class="video-title-content-wrapper">

            <div class="video-title-wrapper">
                <h5 id="video-title-<?php echo $video_uid; ?>">
                    <?php echo esc_html($display_title); ?>
                </h5>
            </div>

            <?php if($video_subtitle) { ?>
                <div class="video-subtitle-wrapper">
                    <p class="mb-0">
                        <?php echo wp_kses_post($video_subtitle); ?>
                    </p>
                </div>
            <?php } ?>

            <button
                type="button"
                class="pw-solid-button mt-3"
                data-bs-toggle="modal"
                data-bs-target="#video-<?php echo $video_uid; ?>"
                aria-label="Play video: <?php echo esc_attr($display_title); ?>">

                See Video

            </button>

        </div>

    </div>
</article>