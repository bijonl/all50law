<div class="practice-hero-callout-wrapper">
    <div class="practice-hero-callout-text">
        <div class="image-wrapper">
            <?php echo wp_get_attachment_image($practice_hero_callout_image['ID'], 'thumbnail', false) ?>
        </div>
        <div class="text-wrapper">
            <?php echo $practice_hero_callout_text ?>
        </div>
    </div>
    <div class="practice-hero-callout-meta-link">
        <div class="meta-wrapper">
            <span class="person">
                <?php echo $practice_callout_text_attribute ?>
            </span>
            <span class="position">
                <?php echo $practice_callout_text_attribute_position ?>

            </span>
        </div>
        <?php include(locate_template('blocks/practice-hero/partials/button.php')); ?> 
    </div>

</div>