<?php $per_view = 2;
$bullet_count = count($results); ?>

<div class="results-container results-slider-container container">
    <div class="results-glide glide">

        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">

                <?php foreach ($results as $result_id) { ?>
                    <?php include locate_template('components/variables/result-variables.php'); ?>

                    <li class="results-col glide__slide">
                        <?php include locate_template('blocks/result-list/partials/single-result.php'); ?>
                    </li>

                <?php }; ?>

            </ul>

        </div>

        <?php if ($bullet_count > 1) { ?>

            <div class="glide__bullets mt-4" data-glide-el="controls[nav]">

                <?php for ($i = 0; $i < $bullet_count; $i++) { ?>

                    <button
                        class="glide__bullet"
                        data-glide-dir="=<?php echo $i; ?>"
                        aria-label="Go to review <?php echo $i + 1; ?>">
                    </button>

                <?php }; ?>

            </div>
        <?php }; ?>
    </div>
</div>