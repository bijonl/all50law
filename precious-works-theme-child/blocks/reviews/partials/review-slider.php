<?php
    $per_view = 1;
    $bullet_count = ceil(count($reviews) / $per_view);
?>

<div class="reviews-container reviews-slider-container container">
    <div class="reviews-row row g-3">
        <div class="reviews-glide glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php foreach($reviews as $review_id) { ?>
                    <?php include(locate_template('components/variables/review-variables.php')); ?>
                    <li class="reviews-col glide__slide">
                        <?php include __DIR__ . '/single-review.php'; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <?php for ($i = 0; $i < $bullet_count; $i++) { ?>
                    <button
                        class="glide__bullet"
                        data-glide-dir="=<?php echo $i * $per_view; ?>"
                        aria-label="Go to slide group <?php echo $i + 1; ?>">
                    </button>
                <?php }; ?>
            </div>
        </div>
   </div>
</div>