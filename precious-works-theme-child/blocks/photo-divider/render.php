<?php $image = get_field('image'); 
$image_url = wp_get_attachment_url($image, 'full', false, array('class' => 'w-100 h-auto')); 
$title_format = get_field('title_format') ? get_field('title_format') : 'vertical';
$horizonal_title = $title_format === 'horizontal'; 
$display_title = ' mb-0'; 
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
background-repeat: no-repeat; 
background-size: cover; 
background-image:url('<?php echo $image_url ?>'); 
background-position: center center; 
position: relative; 
">
  <div class="photo-divider-overlay overlay"></div>
    <div class="photo-divider-container">
      <div class="photo-divider-row">
        <div class="photo-divider-col">
           <div class="title-area-content-wrapper d-flex flex-column justify-content-center align-items-center text-center"
           style="
            color: white; 
            height: 500px; 
          "
           >
              <?php if (!empty($section_title)) { ?>
                  <div class="title-wrapper">
                      <?php 
                          // Heading gets an ID so region can be linked to it
                          echo pw_seo_heading(
                              $section_title, 
                              $section_title_tag, 
                              $display_title, 
                              [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                          ); 
                      ?>
                  </div>
              <?php } ?>

              <?php if (!empty($section_subtitle) && !$horizonal_title) { ?>
                  <div class="subtitle-wrapper <?php echo $horizonal_title ? 'w-100' : ''  ?> wysiwyg">
                      <?php echo $section_subtitle; ?>
                  </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
</section>