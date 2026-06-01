<?php echo get_header(); ?>
<?php $id = get_the_id(); 
$practice_crosslinks = get_field('practice_crosslinks'); 
$office_crosslinks = get_field('office_crosslinks');
include locate_template('components/variables/professionals-variables.php'); ?>



<section class="single-attorney-post-section" id="attorney-post-content">
    <?php include locate_template('components/professionals/professionals-hero.php'); ?>
    <div class="single-attorney-post-container container">
      <div class="single-attorney-post-row row">
        <div class="single-attorney-post-col col-sm-10 mx-auto">
            <?php include locate_template('components/professionals/professionals-content.php'); ?>
        </div>
      </div>
    </div>
</section>




<?php echo get_footer(); ?>