<?php 
$default_video_title = get_the_title($video_id); 
$display_title = $video_title ? $video_title : $default_video_title; 
$video_uid = $video_id . '-' . $block['id'];

?>

<article class="single-video-wrapper" aria-labelledby="video-title-<?php echo $video_uid; ?>">
    <div class="single-video-content-wrapper">

        <div class="video-image-wrapper position-relative">
            
            <button
                type="button"
                class="border-0 bg-transparent"
                data-bs-toggle="modal"
                data-bs-target="#video-<?php echo $video_uid; ?>"
                aria-label="Play video: <?php echo esc_attr($display_title); ?>">
                <div class="play-wrapper position-absolute w-100 h-100">
                    <svg class="d-flex justify-content-center h-100 m-auto align-items-center"
                        width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="36" cy="36" r="36" fill="#d71d22"/>
                        <path d="M31 24L49 36L31 48V24Z" fill="white"/>
                    </svg>
                </div>

                <?php echo wp_get_attachment_image(
                    $video_image_id,
                    'vertical-img',
                    false,
                    array(
                        'class' => 'w-100 h-auto'
                    )
                ); ?>

            </button>
        </div>

        <div class="video-title-content-wrapper">

            <div class="video-title-wrapper">
                <p class="fw-bold id="video-title-<?php echo $video_uid; ?>">
                    <?php echo esc_html($display_title); ?>
                </p>
            </div>

            <?php if($video_subtitle) { ?>
                <div class="video-subtitle-wrapper">
                    <p class="mb-0">
                        <?php echo wp_kses_post($video_subtitle); ?>
                    </p>
                </div>
            <?php } ?>

        </div>

    </div>
</article>