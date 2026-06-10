<?php 
include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = !empty($content) || $has_button_area || $has_title_area;

// if(!$has_content) {
//     include __DIR__ . '/demo.php';
//     return; 
// } ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>
    <div class="info-tabs-container container">
        <div class="info-tabs-row row">
            <div class="info-tabs-col col-12">
                <?php include(locate_template('blocks/info-tabs/partials/tabs.php')); ?>
            </div>
        </div>
    </div>
</section>