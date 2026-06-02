<?php

$videos = get_field('videos') ?: [];
$video_list_format = get_field('video_list_format') ? get_field('video_list_format') : 'regular';

include locate_template('blocks/partials/global-block-variables.php');


$has_content = !empty($videos) || $has_button_area || $has_title_area;

if (!$has_content) {
    include __DIR__ . '/demo.php';
    return;
}

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <?php if ($video_list_format === 'regular') { ?>

        <div class="videos-container container">
            <div class="videos-row row gx-2 gy-5">

                <?php foreach ($videos as $video_id) { ?>
                    <?php include locate_template('components/variables/video-variables.php'); ?>

                    <div class="videos-col col-md-6 col-lg-4">
                        <?php include locate_template('blocks/video-list/partials/single-video.php'); ?>
                    </div>

                <?php } ; ?>

            </div>
        </div>

    <?php } elseif ($video_list_format === 'slider') { ?>
        <?php $per_view = 3 ?>
        <?php include locate_template('blocks/partials/video-slider.php'); ?>

    <?php }; ?>




    <?php if (!empty($videos)) { ?>

        <?php foreach ($videos as $video_id) { ?>
            <?php
                include locate_template('components/variables/video-variables.php');
                $video_uid = $video_id . '-' . $block['id'];
                include locate_template('blocks/video-list/partials/video-modal-content.php');
            ?>
        <?php } ?>
    <?php } ?>

</section>