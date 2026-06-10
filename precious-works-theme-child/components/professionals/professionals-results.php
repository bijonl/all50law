<?php
$related_results = get_field('related_results');
$per_view = 2;
$bullet_count = count($related_results);
$attorney_disclaimer = get_field('attorney_disclaimer', 'options');

if ($related_results) {
?>

<div class="results-container results-slider-container">
    <h5>Results</h5>
    <div class="results-glide glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">

                <?php foreach ($related_results as $related_result) {

                    $result_id = $related_result->ID;
                    include locate_template('components/variables/result-variables.php');
                ?>

                    <li class="results-col glide__slide">
                        <div class="single-result-wrapper">
                            <div class="single-result-content-wrapper">

                                <div class="single-result-money-wrapper">
                                    <h5 class="money-heading h6">
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

                <?php }; ?>

            </ul>
        </div>
        <?php if ($bullet_count > $per_view) { ?>

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

    <?php } ?>
    </div>
    <a href="#result-table" class="fw-bold text-decoration-underline btn btn-primary color-inherit">
        View More
        <i class="fa-solid fa-chevron-down"></i>
    
    </a>
    <?php if($attorney_disclaimer) { ?>
        <p class="disclaimer-text mt-2"><?php echo $attorney_disclaimer ?></p>
    <?php } ?>

</div>

<?php }; ?>