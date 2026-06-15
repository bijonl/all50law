<div class="flip-card" id="card">

    <div class="flip-card-inner">

        <div class="flip-card-front">
            <div class="front-card-wrapper">

                <?php if (!empty($case_location)) { ?>
                    <div class="location-wrapper d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        <p class="mb-0">
                            <?php echo esc_html($case_location); ?>
                        </p>
                    </div>
                <?php } ?>

                <div class="front-card-body-wrapper">

                    <?php if (!empty($result_icon['ID'])) { ?>
                        <div class="icon-wrapper" aria-hidden="true">
                            <?php echo wp_get_attachment_image(
                                $result_icon['ID'],
                                'full',
                                false,
                                [
                                    'alt' => '',
                                ]
                            ); ?>
                        </div>
                    <?php } ?>

                    <?php if (!empty($reward_money)) { ?>
                        <div class="number-wrapper">
                            <p>
                                <?php echo esc_html('$' . number_format((float) $reward_money, 0)); ?>
                            </p>
                        </div>
                    <?php } ?>

                    <?php if (!empty($case_name)) { ?>
                        <div class="title-wrapper">
                            <h3 class="h5 mb-0">
                                <?php echo esc_html($case_name); ?>
                            </h3>
                        </div>
                    <?php } ?>

                </div>

                <div class="front-card-button-wrapper">
                    <button
                        class="w-100 border-0 bg-transparent box-shadow-0"
                        type="button"
                        data-flip-trigger
                        aria-expanded="false"
                        aria-controls="flip-card-content"
                        aria-label="<?php echo !empty($case_name) ? esc_attr('Read more about ' . wp_strip_all_tags($case_name)) : esc_attr__('Read more', 'textdomain'); ?>"
                    >
                        Read More
                    </button>
                </div>

            </div>
        </div>

        <div
            class="flip-card-back"
            id="flip-card-content"
        >
            <div class="back-card-wrapper">

                <div class="back-body-wrapper">

                    <?php if (!empty($case_name)) { ?>
                        <div class="title-wrapper">
                            <h3 class="h5 mb-0">
                                <?php echo esc_html($case_name); ?>
                            </h3>
                        </div>
                    <?php } ?>

                    <?php if (!empty($case_content)) { ?>
                        <div class="content-wrapper">
                            <?php echo wp_kses_post($case_content); ?>
                        </div>
                    <?php } ?>

                </div>

                <div class="front-card-button-wrapper">
                    <button
                        class="w-100 border-0 bg-transparent box-shadow-0"
                        type="button"
                        data-flip-trigger
                        aria-expanded="true"
                        aria-controls="flip-card-content"
                        aria-label="<?php echo !empty($case_name) ? esc_attr('Close details for ' . wp_strip_all_tags($case_name)) : esc_attr__('Close details', 'textdomain'); ?>"
                    >
                        Close
                    </button>
                </div>

            </div>
        </div>

    </div>

</div>