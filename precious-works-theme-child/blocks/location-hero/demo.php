<?php

include locate_template('blocks/partials/global-block-variables.php');

$display_title = 'h2 mb-0';

$demo = [
    'hero_image'       => 'https://placehold.co/1200x700?text=Office+Hero',
    'review_number'    => 241,
    'review_stars'     => 4.8,
    'review_link'      => '#',
    'section_title'    => 'Philadelphia Personal Injury Lawyers',
    'section_subtitle' => 'Dedicated advocates helping injury victims recover the compensation they deserve.',
    'disclaimer_text'  => '* Prior results do not guarantee a similar outcome.',
    'address_one'      => '123 Market Street',
    'address_two'      => 'Suite 400',
    'city'             => 'Philadelphia',
    'state'            => 'PA',
    'zip_code'         => '19106',
    'phone_number'     => '(215) 555-1234',
];

extract($demo);

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <div class="location-hero-container">

        <div class="location-hero-row row gx-5 h-100">

            <div
                class="location-hero-callut-col"
                style="
                    background-image: url('<?php echo esc_url($hero_image); ?>');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                "
            >

                <div class="location-hero-callout-wrapper d-flex">

                    <div class="address-wrapper d-flex align-items-center">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>

                        <?php echo esc_html($address_one); ?>,
                        <?php echo esc_html($address_two); ?><br>

                        <?php echo esc_html($city); ?>,
                        <?php echo esc_html($state); ?>
                        <?php echo esc_html($zip_code); ?>
                    </div>

                    <div class="phone-wrapper d-flex align-items-center">
                        <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                            <?php echo esc_html($phone_number); ?>
                        </a>
                    </div>

                </div>

            </div>

            <div class="location-text-title-wrapper">

                <div class="review-wrapper">

                    <div class="review-top">

                        <span class="review-rating">
                            <?php echo number_format($review_stars, 1); ?>
                        </span>

                        <div
                            class="review-stars"
                            aria-label="<?php echo esc_attr($review_stars); ?> out of 5 stars"
                        >

                            <?php for ($i = 1; $i <= 5; $i++) {

                                if ($review_stars >= $i) {
                                    $fill = 100;
                                } elseif ($review_stars > ($i - 1)) {
                                    $fill = ($review_stars - ($i - 1)) * 100;
                                } else {
                                    $fill = 0;
                                }
                            ?>

                                <span class="rating-star">

                                    <span
                                        class="rating-star-fill"
                                        style="width: <?php echo $fill; ?>%;"
                                    >
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M8.64062 1.24219L10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.71875 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.683594 6.71094 0.601562 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219Z" fill="#0247ac"/>
                                        </svg>
                                    </span>

                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" stroke="#0247ac" stroke-width="1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M8.64062 1.24219L10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.71875 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.683594 6.71094 0.601562 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219Z" fill="#D9D9D9"/>
                                        </svg>

                                </span>

                            <?php } ?>

                        </div>

                        <span class="review-count">
                            (<?php echo number_format($review_number); ?>)
                        </span>

                    </div>

                    <a href="<?php echo esc_url($review_link); ?>" class="review-link">
                        View all Google Reviews here
                    </a>

                </div>

                <?php if (!empty($section_title)) { ?>
                    <div class="big-title-wrapper">
                        <?php echo pw_seo_heading($section_title, 'h2', $display_title); ?>
                    </div>
                <?php } ?>

                <?php if (!empty($section_subtitle)) { ?>
                    <div class="subtitle-wrapper">
                        <p class="mb-0">
                            <?php echo esc_html($section_subtitle); ?>
                        </p>
                    </div>
                <?php } ?>

                <?php include locate_template('blocks/partials/button-area.php'); ?>

                <?php if (!empty($disclaimer_text)) { ?>
                    <div class="disclaimer-wrapper disclaimer-text">
                        <?php echo esc_html($disclaimer_text); ?>
                    </div>
                <?php } ?>

            </div>

        </div>

    </div>

</section>