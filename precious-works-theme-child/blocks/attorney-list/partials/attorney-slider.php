<?php $per_view = 3;
$bullet_count = count($attorneys); ?>

<div class="attorneys-container attorneys-slider-container container">
    <div class="attorneys-glide glide">

        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">

                <?php foreach ($attorneys as $id) { ?>
                    <?php include locate_template('components/variables/professionals-variables.php'); ?>

                    <li class="attorneys-col glide__slide">
                        <?php include locate_template('blocks/attorney-list/partials/single-attorney.php'); ?>
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