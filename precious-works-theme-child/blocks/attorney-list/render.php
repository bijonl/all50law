<?php

$attorneys = get_field('attorneys') ?: [];
$attorney_format = get_field('attorney_format');

include locate_template('blocks/partials/global-block-variables.php');

$has_content = !empty($attorneys) || $has_button_area || $has_title_area;

if (!$has_content) {
    include __DIR__ . '/demo.php';
    return;
}

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <?php if ($attorney_format === 'regular') { ?>

        <div class="attorneys-container container">
            <div class="attorneys-row row gx-3 gy-5">

                <?php foreach ($attorneys as $id) { ?>
                
                    <?php include locate_template('components/variables/professionals-variables.php'); ?>

                    <div class="attorneys-col col-md-6 col-lg-4">
                        <?php include locate_template('blocks/attorney-list/partials/single-attorney.php'); ?>
                    </div>

                <?php } ; ?>

            </div>
        </div>

    <?php } elseif ($attorney_format === 'slider') { ?>
            <?php include locate_template('blocks/attorney-list/partials/attorney-slider.php'); ?>
    <?php }; ?>
</section>