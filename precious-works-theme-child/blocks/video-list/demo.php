<?php

include locate_template('blocks/partials/global-block-variables.php');

$video_list_format = get_field('video_list_format') ?: 'regular';

$demo_videos = [
    [
        'video_title'     => 'What to Do After a Car Accident',
        'video_subtitle'  => 'Learn the first steps to protect your health and your claim.',
    ],
    [
        'video_title'     => 'Meet Our Attorneys',
        'video_subtitle'  => 'Get to know the team behind our client success stories.',
    ],
    [
        'video_title'     => 'How the Claims Process Works',
        'video_subtitle'  => 'A simple overview of what to expect after hiring our firm.',
    ],
    [
        'video_title'     => 'Truck Accident FAQs',
        'video_subtitle'  => 'Answers to some of the most common questions we receive.',
    ],
    [
        'video_title'     => 'Client Testimonial',
        'video_subtitle'  => 'Hear directly from a former client about their experience.',
    ],
];

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <?php if ($video_list_format === 'regular') { ?>

        <div class="videos-container container">
            <div class="videos-row row gx-2 gy-5">

                <?php foreach ($demo_videos as $index => $video) {

                    $video_uid       = 'demo-video-' . $index . '-' . $block['id'];
                    $display_title   = $video['video_title'];
                    $video_subtitle  = $video['video_subtitle'];
                ?>

                    <div class="videos-col col-md-6 col-lg-4">

                        <article class="single-video-wrapper" aria-labelledby="video-title-<?php echo $video_uid; ?>">

                            <div class="single-video-content-wrapper">

                                <div class="video-image-wrapper position-relative">

                                    <button
                                        type="button"
                                        class="border-0 bg-transparent"
                                        data-bs-toggle="modal"
                                        data-bs-target="#video-<?php echo $video_uid; ?>"
                                        aria-label="Play video: <?php echo esc_attr($display_title); ?>"
                                    >

                                        <div class="play-wrapper position-absolute w-100 h-100">

                                            <svg
                                                class="d-flex justify-content-center h-100 m-auto align-items-center"
                                                width="72"
                                                height="72"
                                                viewBox="0 0 72 72"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                            >
                                                <circle cx="36" cy="36" r="36" fill="currentColor"/>
                                                <path d="M31 24L49 36L31 48V24Z" fill="white"/>
                                            </svg>

                                        </div>

                                        <img
                                            src="https://placehold.co/600x900?text=Video"
                                            alt=""
                                            class="w-100 h-auto"
                                        >

                                    </button>

                                </div>

                                <div class="video-title-content-wrapper">

                                    <div class="video-title-wrapper">
                                        <p
                                            class="fw-bold"
                                            id="video-title-<?php echo $video_uid; ?>"
                                        >
                                            <?php echo esc_html($display_title); ?>
                                        </p>
                                    </div>

                                    <div class="video-subtitle-wrapper">
                                        <p class="mb-0">
                                            <?php echo esc_html($video_subtitle); ?>
                                        </p>
                                    </div>

                                    <button
                                        type="button"
                                        class="pw-solid-button mt-3"
                                        data-bs-toggle="modal"
                                        data-bs-target="#video-<?php echo $video_uid; ?>"
                                        aria-label="Play video: <?php echo esc_attr($display_title); ?>"
                                    >
                                        See Video
                                    </button>

                                </div>

                            </div>

                        </article>

                    </div>

                <?php } ?>

            </div>
        </div>

    <?php } elseif ($video_list_format === 'slider') { ?>

        <div class="videos-container videos-slider-container container">

            <div class="videos-glide glide">

                <div class="glide__track" data-glide-el="track">

                    <ul class="glide__slides">

                        <?php foreach ($demo_videos as $index => $video) {

                            $video_uid       = 'demo-video-' . $index . '-' . $block['id'];
                            $display_title   = $video['video_title'];
                            $video_subtitle  = $video['video_subtitle'];
                        ?>

                            <li class="videos-col glide__slide">

                                <article class="single-video-wrapper" aria-labelledby="video-title-<?php echo $video_uid; ?>">

                                    <div class="single-video-content-wrapper">

                                        <div class="video-image-wrapper position-relative">

                                            <button
                                                type="button"
                                                class="border-0 bg-transparent"
                                                data-bs-toggle="modal"
                                                data-bs-target="#video-<?php echo $video_uid; ?>"
                                                aria-label="Play video: <?php echo esc_attr($display_title); ?>"
                                            >

                                                <div class="play-wrapper position-absolute w-100 h-100">

                                                    <svg
                                                        class="d-flex justify-content-center h-100 m-auto align-items-center"
                                                        width="72"
                                                        height="72"
                                                        viewBox="0 0 72 72"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true"
                                                    >
                                                        <circle cx="36" cy="36" r="36" fill="currentColor"/>
                                                        <path d="M31 24L49 36L31 48V24Z" fill="white"/>
                                                    </svg>

                                                </div>

                                                <img
                                                    src="https://placehold.co/600x900?text=Video"
                                                    alt=""
                                                    class="w-100 h-auto"
                                                >

                                            </button>

                                        </div>

                                        <div class="video-title-content-wrapper">

                                            <div class="video-title-wrapper">
                                                <p
                                                    class="fw-bold"
                                                    id="video-title-<?php echo $video_uid; ?>"
                                                >
                                                    <?php echo esc_html($display_title); ?>
                                                </p>
                                            </div>

                                            <div class="video-subtitle-wrapper">
                                                <p class="mb-0">
                                                    <?php echo esc_html($video_subtitle); ?>
                                                </p>
                                            </div>

                                            <button
                                                type="button"
                                                class="pw-solid-button mt-3"
                                                data-bs-toggle="modal"
                                                data-bs-target="#video-<?php echo $video_uid; ?>"
                                                aria-label="Play video: <?php echo esc_attr($display_title); ?>"
                                            >
                                                See Video
                                            </button>

                                        </div>

                                    </div>

                                </article>

                            </li>

                        <?php } ?>

                    </ul>

                </div>

                <div class="glide__arrows" data-glide-el="controls">

                    <button
                        class="glide__arrow glide__arrow--left"
                        data-glide-dir="<"
                        aria-label="Previous videos"
                    >
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                    </button>

                    <button
                        class="glide__arrow glide__arrow--right"
                        data-glide-dir=">"
                        aria-label="Next videos"
                    >
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </button>

                </div>

            </div>

        </div>

    <?php } ?>

    <?php foreach ($demo_videos as $index => $video) {

        $video_uid = 'demo-video-' . $index . '-' . $block['id'];
        $display_title = $video['video_title'];
    ?>

        <div
            class="single-video-modal-wrapper modal fade"
            id="video-<?php echo $video_uid; ?>"
            tabindex="-1"
            aria-labelledby="modal-title-<?php echo $video_uid; ?>"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <h2
                        id="modal-title-<?php echo $video_uid; ?>"
                        class="visually-hidden"
                    >
                        <?php echo esc_html($display_title); ?>
                    </h2>

                    <div class="close-button-wrapper d-flex justify-content-end mt-3 me-3">

                        <button
                            type="button"
                            class="close-button border-0 bg-transparent"
                            data-bs-dismiss="modal"
                            aria-label="Close video"
                        >
                            <i class="fa-solid fa-x" aria-hidden="true"></i>
                        </button>

                    </div>

                    <div class="modal-body">

                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                title="<?php echo esc_attr($display_title); ?>"
                                allowfullscreen
                            ></iframe>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    <?php } ?>

</section>