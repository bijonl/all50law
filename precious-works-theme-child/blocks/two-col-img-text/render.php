<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 
$media_type = get_field('media_type') ? get_field('media_type')  : 'image';
$is_img = $media_type === 'image'; 
$is_video_slider = $media_type === 'video-slider'; 
$is_img_slider = $media_type === 'img-slider'; 
$image = get_field('image'); 
$content = get_field('content');
$column_order = get_field('column_order');
$image_slider_images = get_field('image_slider_images');
$videos = get_field('videos'); 

?>

<?php $has_content = !empty($image) || !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$image_col_width = 'col-lg-6'; 
$text_col_width = 'col-lg-6'; ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>

    <div class="two-col-container container">
        <div class="two-col-row row align-items-center">
            <div class="two-col-col image-col <?php echo $image_col_width ?> <?php echo $column_order ?>">
                <?php if($is_img_slider) {
                    $images = $image_slider_images; 
                    include(locate_template('blocks/partials/image-slider.php')); 
                } elseif($is_video_slider) {
                    include(locate_template('blocks/partials/video-slider.php')); 
                } else { 
                    echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-100 h-auto')); 
                } ?>
            </div>
            <div class="two-col-col text-col <?php echo $text_col_width ?>">
                <?php echo $content ?>
            </div>
        </div>
    </div>
  
    <?php if (!empty($videos) && $is_video_slider) { ?>
        <?php foreach ($videos as $video) { ?>
            <?php $video_id = $video->ID; 
                include locate_template('components/variables/video-variables.php');
                $video_uid = $video_id . '-' . $block['id'];
                include locate_template('blocks/video-list/partials/video-modal-content.php');
            ?>
        <?php } ?>
    <?php } ?>
</section>