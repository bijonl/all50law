<?php

include locate_template('blocks/partials/global-block-variables.php');

$display_title = 'h2 mb-0';

$demo = [
    'hero_image'                               => 'https://placehold.co/1600x900?text=Practice+Area',
    'section_title'                            => 'Truck Accident Lawyers',
    'section_subtitle'                         => 'If you have been injured in a truck accident, our attorneys are prepared to fight for the compensation you deserve.',
    'practice_disclaimer'                      => '* Prior results do not guarantee a similar outcome.',
    'practice_hero_callout_image'             => 'https://placehold.co/100x100?text=Attorney',
    'practice_hero_callout_text'              => '"The insurance company has a team of lawyers. You deserve a team fighting just as hard for you."',
    'practice_callout_text_attribute'         => 'John Smith',
    'practice_callout_text_attribute_position'=> 'Managing Partner',
    'practice_hero_button_text'               => 'Watch Our Story',
    'button_url_type'                          => 'video-modal',
    'practice_hero_button_link'               => '#',
    'video_uid'                                => 'demo-video-modal',
];

extract($demo);

?>

<section
    <?php echo pw_block_section_classes($block); ?>
    style="
        background-image: url('<?php echo esc_url($hero_image); ?>');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    "
>

    <div class="practice-hero-container container">

        <div class="practice-hero-row row gx-5 h-100">

            <div class="practice-hero-callut-col col-lg-5 me-auto">

                <div class="practice-hero-callout-wrapper">

                    <div class="practice-hero-callout-text">

                        <div class="image-wrapper">
                            <img
                                src="<?php echo esc_url($practice_hero_callout_image); ?>"
                                alt="Attorney portrait"
                                class="img-fluid"
                            >
                        </div>

                        <div class="text-wrapper">
                            <?php echo esc_html($practice_hero_callout_text); ?>
                        </div>

                    </div>

                    <div class="practice-hero-callout-meta-link">

                        <div class="meta-wrapper">

                            <span class="person">
                                <?php echo esc_html($practice_callout_text_attribute); ?>
                            </span>

                            <span class="position">
                                <?php echo esc_html($practice_callout_text_attribute_position); ?>
                            </span>

                        </div>

                        <?php if ($button_url_type === 'url') { ?>

                            <a
                                class="link-wrapper"
                                href="<?php echo esc_url($practice_hero_button_link); ?>"
                            >
                                <?php echo esc_html($practice_hero_button_text); ?>
                            </a>

                        <?php } else { ?>

                            <button
                                type="button"
                                class="link-wrapper btn btn-link border-0 d-flex align-items-center background-transparent"
                            >
                                <?php echo esc_html($practice_hero_button_text); ?>

                                <span class="ms-2" aria-hidden="true">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="18"
                                        viewBox="0 0 16 18"
                                        fill="none"
                                    >
                                        <path
                                            d="M0 0V18L16 9L0 0Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>

                            </button>

                        <?php } ?>

                    </div>

                </div>

            </div>

            <div class="title-wrapper rounded-corners col-lg-6 me-auto">

                <nav class="breadcrumbs-wrapper mb-3" aria-label="Breadcrumb">
                    <span>Home</span>
                    <span aria-hidden="true"> &gt; </span>
                    <span>Practice Areas</span>
                    <span aria-hidden="true"> &gt; </span>
                    <span><?php echo esc_html($section_title); ?></span>
                </nav>

                <div class="big-title-wrapper">
                    <?php echo pw_seo_heading($section_title, 'h1', $display_title); ?>
                </div>

                <div class="subtitle-wrapper">
                    <p class="mb-0">
                        <?php echo esc_html($section_subtitle); ?>
                    </p>
                </div>

                <?php include locate_template('blocks/partials/button-area.php'); ?>

                <div class="disclaimer-wrapper disclaimer-text">
                    <?php echo esc_html($practice_disclaimer); ?>
                </div>

            </div>

        </div>

    </div>

</section>