<section class="professionals-hero">
    <div class="professional-hero-container container">
      <div class="professional-hero-row row">
        <div class="professional-creds-col col-sm-3">
            <?php include locate_template('components/professionals/professionals-creds.php'); ?>

        </div>
          <div class="professional-bio-col col-sm-9">
            <div class="name-wrapper">
                <h1 class="h3">Meet <?php echo $full_name ?></h1>
            </div>
            <div class="bio-wrapper">
                <?php echo $professional_narrative   ?>
            </div>
            <div class="results-wrapper">
                <?php echo 'results'  ?>
            </div>
            <?php if($practice_crosslinks) { ?>
                <div class="practice-wrapper">
                    <h5>Practice Areas</h5>
                    <?php foreach($practice_crosslinks as $practice) { 
                        $practice_id = $practice->ID; 
                        $practice_title = get_the_title($practice_id); 
                        $practice_link = get_the_permalink($practice_id);  ?>

                        <a href="<?php echo $practice_link ?>">
                            <?php echo $practice_title;  ?> 
                        </a>
                </div>
                <?php } ?>
            <?php } ?>
           
        </div>
      </div>
    </div>
</section>