<?php $display_title = $video_title ? $video_title : $default_video_title; ?>

<article class="single-video-wrapper" aria-labelledby="video-title-<?php echo $video_id; ?>">
    <div class="single-video-content-wrapper">

        <div class="video-image-wrapper">
            <button
                type="button"
                class="border-0 bg-transparent"
                data-bs-toggle="modal"
                data-bs-target="#video-<?php echo $video_id; ?>"
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
                <h5 id="video-title-<?php echo $video_id; ?>">
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
                data-bs-target="#video-<?php echo $video_id; ?>"
                aria-label="Play video: <?php echo esc_attr($display_title); ?>">

                See Video

            </button>

        </div>

    </div>
</article>


<!-- Modal -->
<div
    class="single-video-modal-wrapper modal fade"
    id="video-<?php echo $video_id; ?>"
    tabindex="-1"
    aria-labelledby="modal-title-<?php echo $video_id; ?>"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <h2
                id="modal-title-<?php echo $video_id; ?>"
                class="visually-hidden">
                <?php echo esc_html($display_title); ?>
            </h2>

            <div class="close-button-wrapper d-flex justify-content-end mt-3 me-3">

                <button
                    type="button"
                    class="close-button border-0 bg-transparent"
                    data-bs-dismiss="modal"
                    aria-label="Close video">

                    <i class="fa-solid fa-x" aria-hidden="true"></i>

                </button>

            </div>

            <div class="modal-body">
                <?php echo $video_embed_url; ?>
            </div>

        </div>

    </div>

</div>