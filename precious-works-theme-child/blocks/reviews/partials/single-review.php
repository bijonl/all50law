<article class="review-card position-relative" aria-labelledby="review-<?php echo $review_id; ?>-person">
  
    <div class="review-content">
        <div class="quote-wrapper">
            <i class="fa-solid fa-quote-left"></i>
        </div>
        <blockquote>
            <p><?php echo $review; ?></p>
        </blockquote>
    </div>
    <footer class="review-meta-wrapper d-flex  justify-content-between align-items-center">
        <div class="review-meta">
            <?php if ($person) { ?>
                <p id="review-<?php echo $review_id; ?>-person" class="review-meta person mb-0 fw-bold">
                    <?php echo esc_html($person); ?>
                </p>
               
            <?php } ?>
            <?php if ($position) { ?>
                <p class="review-meta position mb-0">
                    <?php echo esc_html($position); ?>
                </p>
            <?php } ?>
        </div>
         <div class="star-wrapper">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </div>
    </footer>
</article>
