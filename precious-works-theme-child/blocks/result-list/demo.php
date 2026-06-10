<?php

$results_format = get_field('results_format') ?: 'regular';

$demo_results = [
    [
        'reward_money'  => 2500000,
        'case_name'     => 'Truck Accident Settlement',
        'case_location' => 'Pennsylvania',
        'results_year'  => '2025',
    ],
    [
        'reward_money'  => 1850000,
        'case_name'     => 'Medical Malpractice Verdict',
        'case_location' => 'New Jersey',
        'results_year'  => '2024',
    ],
    [
        'reward_money'  => 950000,
        'case_name'     => 'Construction Accident Recovery',
        'case_location' => 'Delaware',
        'results_year'  => '2024',
    ],
    [
        'reward_money'  => 750000,
        'case_name'     => 'Motor Vehicle Settlement',
        'case_location' => 'Pennsylvania',
        'results_year'  => '2023',
    ],
];

include locate_template('blocks/partials/global-block-variables.php');

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <?php if ($results_format === 'regular') { ?>

        <div class="results-container container">
            <div class="results-row row gx-3 gy-5">

                <?php foreach ($demo_results as $demo_result) {

                    $reward_money  = $demo_result['reward_money'];
                    $case_name     = $demo_result['case_name'];
                    $case_location = $demo_result['case_location'];
                    $results_year  = $demo_result['results_year'];
                ?>

                    <div class="results-col col-md-6 col-lg-6">

                        <div class="single-result-wrapper">
                            <div class="single-result-content-wrapper">

                                <div class="single-result-money-wrapper">
                                    <h5 class="money-heading color-primary h6">
                                        <?php echo '$' . number_format((float) $reward_money, 0); ?>
                                    </h5>
                                </div>

                                <div class="single-result-meta-wrapper pt-4">

                                    <div class="single-result-name-wrapper">
                                        <h6 class="name-heading">
                                            <?php echo esc_html($case_name); ?>
                                        </h6>
                                    </div>

                                    <div class="single-result-location-year-wrapper d-flex">
                                        <p><?php echo esc_html($case_location); ?></p>
                                        <p>~</p>
                                        <p><?php echo esc_html($results_year); ?></p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>
        </div>

    <?php } elseif ($results_format === 'slider') { ?>

        <div class="results-container results-slider-container container">

            <div class="results-glide glide">

                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">

                        <?php foreach ($demo_results as $demo_result) {

                            $reward_money  = $demo_result['reward_money'];
                            $case_name     = $demo_result['case_name'];
                            $case_location = $demo_result['case_location'];
                            $results_year  = $demo_result['results_year'];
                        ?>

                            <li class="results-col glide__slide">

                                <div class="single-result-wrapper">
                                    <div class="single-result-content-wrapper">

                                        <div class="single-result-money-wrapper">
                                            <h5 class="money-heading color-primary h6">
                                                <?php echo '$' . number_format((float) $reward_money, 0); ?>
                                            </h5>
                                        </div>

                                        <div class="single-result-meta-wrapper pt-4">

                                            <div class="single-result-name-wrapper">
                                                <h6 class="name-heading">
                                                    <?php echo esc_html($case_name); ?>
                                                </h6>
                                            </div>

                                            <div class="single-result-location-year-wrapper d-flex">
                                                <p><?php echo esc_html($case_location); ?></p>
                                                <p>~</p>
                                                <p><?php echo esc_html($results_year); ?></p>
                                            </div>

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
                        aria-label="Previous result"
                    >
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                    </button>

                    <button
                        class="glide__arrow glide__arrow--right"
                        data-glide-dir=">"
                        aria-label="Next result"
                    >
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>

            </div>

        </div>

    <?php } ?>

</section>