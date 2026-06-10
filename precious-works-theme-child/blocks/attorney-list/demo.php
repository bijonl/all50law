<?php

$attorney_format = get_field('attorney_format') ?: 'regular';

$demo_attorneys = [
    [
        'full_name'          => 'Jane Smith',
        'phone_number'       => '(555) 123-4567',
        'professional_email' => 'jane.smith@example.com',
    ],
    [
        'full_name'          => 'Michael Johnson',
        'phone_number'       => '(555) 234-5678',
        'professional_email' => 'michael.johnson@example.com',
    ],
    [
        'full_name'          => 'Sarah Williams',
        'phone_number'       => '(555) 345-6789',
        'professional_email' => 'sarah.williams@example.com',
    ],
    [
        'full_name'          => 'David Brown',
        'phone_number'       => '(555) 456-7890',
        'professional_email' => 'david.brown@example.com',
    ],
];

include locate_template('blocks/partials/global-block-variables.php');

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <?php if ($attorney_format === 'regular') { ?>

        <div class="attorneys-container container">
            <div class="attorneys-row row gx-3 gy-5">

                <?php foreach ($demo_attorneys as $attorney) {

                    $full_name          = $attorney['full_name'];
                    $phone_number       = $attorney['phone_number'];
                    $professional_email = $attorney['professional_email'];

                    $permalink = '#';
                    $image_id = 0;
                ?>

                    <div class="attorneys-col col-md-6 col-lg-4">

                        <div class="single-attorney-wrapper">
                            <div class="single-attorney-content-wrapper">

                                <a href="<?php echo esc_url($permalink); ?>">
                                    <div class="single-attorney-image-wrapper">
                                        <img
                                            src="https://placehold.co/600x600"
                                            alt=""
                                            class="w-100 h-auto"
                                        >
                                    </div>
                                </a>

                                <div class="single-attorney-name-wrapper pt-4">
                                    <h5><?php echo esc_html($full_name); ?></h5>
                                </div>

                                <div class="single-attorney-contact-wrapper pt-4">

                                    <?php if ($phone_number) { ?>
                                        <a
                                            href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>"
                                            aria-label="Call <?php echo esc_attr($full_name); ?> at <?php echo esc_attr($phone_number); ?>"
                                        >
                                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                        </a>
                                    <?php } ?>

                                    <?php if ($professional_email) { ?>
                                        <a
                                            href="mailto:<?php echo antispambot($professional_email); ?>"
                                            aria-label="Email <?php echo esc_attr($full_name); ?>"
                                        >
                                            <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                                        </a>
                                    <?php } ?>

                                </div>

                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>
        </div>

    <?php } elseif ($attorney_format === 'slider') { ?>

        <div class="attorneys-container attorneys-slider-container container">

            <div class="attorneys-glide glide">

                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">

                        <?php foreach ($demo_attorneys as $attorney) {

                            $full_name          = $attorney['full_name'];
                            $phone_number       = $attorney['phone_number'];
                            $professional_email = $attorney['professional_email'];

                            $permalink = '#';
                            $image_id = 0;
                        ?>

                            <li class="attorneys-col glide__slide">

                                <div class="single-attorney-wrapper">
                                    <div class="single-attorney-content-wrapper">

                                        <a href="<?php echo esc_url($permalink); ?>">
                                            <div class="single-attorney-image-wrapper">
                                                <img
                                                    src="https://placehold.co/600x600"
                                                    alt=""
                                                    class="w-100 h-auto"
                                                >
                                            </div>
                                        </a>

                                        <div class="single-attorney-name-wrapper pt-4">
                                            <h5><?php echo esc_html($full_name); ?></h5>
                                        </div>

                                        <div class="single-attorney-contact-wrapper pt-4">

                                            <?php if ($phone_number) { ?>
                                                <a
                                                    href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>"
                                                    aria-label="Call <?php echo esc_attr($full_name); ?> at <?php echo esc_attr($phone_number); ?>"
                                                >
                                                    <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                                </a>
                                            <?php } ?>

                                            <?php if ($professional_email) { ?>
                                                <a
                                                    href="mailto:<?php echo antispambot($professional_email); ?>"
                                                    aria-label="Email <?php echo esc_attr($full_name); ?>"
                                                >
                                                    <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                                                </a>
                                            <?php } ?>

                                        </div>

                                    </div>
                                </div>

                            </li>

                        <?php } ?>

                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button
                        class="glide__arrow glide__arrow--left"
                        data-glide-dir="<"
                        aria-label="Previous attorney"
                    >
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                    </button>

                    <button
                        class="glide__arrow glide__arrow--right"
                        data-glide-dir=">"
                        aria-label="Next attorney"
                    >
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>

            </div>

        </div>

    <?php } ?>

</section>