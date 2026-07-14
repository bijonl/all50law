<?php echo get_header(); ?>
<?php $id = get_the_id(); 
include locate_template('components/variables/post-variables.php'); ?>



<section class="single-blog-post-section" id="blog-post-content">
    <div class="background-secondary text-center py-3 mb-5">Injured? We can help. See if you qualify for a case</div>
    <?php include locate_template('components/blog/single-post-hero.php'); ?>
    <div class="single-blog-post-container container">
      <div class="single-blog-post-row row">
        <div class="single-blog-post-col col-sm-7 mx-auto">
            <?php include locate_template('components/blog/single-post-content.php'); ?>
            <?php include locate_template('components/blog/single-post-footer.php'); ?>
        </div>
      </div>
    </div>
</section>




<?php echo get_footer(); ?>