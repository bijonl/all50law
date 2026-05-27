<?php $image = get_field('image'); 
$image_url = wp_get_attachment_url($image, 'full', false, array('class' => 'w-100 h-auto')); 

?>
<?php include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = !empty($image);

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?> 
  style="
height: 500px; 
background-image:url('<?php echo $image_url ?>'); 
background-position: center center; 
">
    <div class="photo-divider-container">
      <div class="photo-divider-row">
        <div class="photo-divider-col">
          <?php if($section_title || $section_subtitle) {
              include(locate_template('blocks/partials/title-area.php'));
          } ?>
        
        </div>
      </div>
    </div>
</section>