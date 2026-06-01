<div class="prof-image-wrapper">
    <?php echo wp_get_attachment_image($featured_image_id, 'full', false, array('class' => 'w-100 h-auto')) ?>
</div>
<div class="prof-name-wrapper">
    <h3><?php echo $prefix ? $prefix : '' ?> <?php echo $first_name ?></h3>
    <h3><?php echo $middle_name ?></h3>
    <h3><?php echo $last_name ?> <?php echo $suffix ? $suffix : '' ?></h3>
</div>
<div class="prof-position-wrapper">
   <p><?php echo $position_string ?></p>
</div>
<div class="position-contact-wrapper">
     <?php if($office_crosslinks) { ?>
        <?php foreach($office_crosslinks as $office) { ?>
            <div class="contact-info location">
               <?php echo get_the_title($office->ID) ?>
            </div>
        <?php } ?>
    <?php } ?>
        <div class="contact-info phone">
            <?php echo $phone_number ?>
        </div>
        <div class="contact-info email">
               <?php echo $professional_email  ?>
        </div>
  
</div>