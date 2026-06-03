<?php

$results_format = get_field('results_format'); 
$results = get_field('results') ?: [];;
 
include locate_template('blocks/partials/global-block-variables.php');

$has_content = !empty($results) || $has_button_area || $has_title_area;

if (!$has_content) {
    include __DIR__ . '/demo.php';
    return;
}

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <?php if ($results_format === 'regular') { ?>

        <div class="results-container container">
            <div class="results-row row gx-3 gy-5">

                <?php foreach ($results as $result_id) { ?>
                    
                    <?php include locate_template('components/variables/result-variables.php'); ?>

                    <div class="results-col col-md-6 col-lg-6">
                        <?php include locate_template('blocks/result-list/partials/single-result.php'); ?>
                    </div>

                <?php } ; ?>

            </div>
        </div>

    <?php } elseif ($results_format === 'slider') { ?>
            <?php include locate_template('blocks/result-list/partials/result-slider.php'); ?>
    <?php }; ?>
</section>