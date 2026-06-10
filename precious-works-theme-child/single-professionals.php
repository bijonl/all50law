<?php echo get_header(); ?>
<?php $id = get_the_id(); 
$practice_crosslinks = get_field('practice_crosslinks', $id); 
$office_crosslinks = get_field('office_crosslinks', $id);
$related_results = get_field('related_results', $id); 
include locate_template('components/variables/professionals-variables.php'); ?>



<section class="single-attorney-post-section" id="attorney-post-content">
    <?php include locate_template('components/professionals/professionals-hero.php'); ?>
    <?php include locate_template('components/professionals/professionals-content.php'); ?>
    <?php include locate_template('components/professionals/professionals-results-table.php'); ?>
</section>




<?php echo get_footer(); ?>