<section class="attorney-main-content">
    <div class="attorney-main-content-container container">
        <div class="attorney-main-content-row d-flex">

            <div class="col-sm-4 info-col locations-col">

                <?php if ($office_crosslinks) { ?>
                    <h2 class="h3">Office Locations</h2>
                    <ul class="info-list list-unstyled m-0">

                        <?php foreach ($office_crosslinks as $office) { ?>
                            <?php $office_title = get_the_title($office->ID); ?>

                            <li class="single-info location-info">
                                <a
                                    href="<?php echo esc_url(get_permalink($office->ID)); ?>"
                                    class="contact-info location"
                                    aria-label="View office details for <?php echo esc_attr($office_title); ?>"
                                >
                                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                    <span><?php echo esc_html($office_title); ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>

            <div class="col-sm-4 info-col bar-admission-col">

                <?php if (have_rows('admissions')) { ?>
                    <h2 class="h3">Bar Admissions</h2>
                    <ul class="info-list list-unstyled m-0">

                        <?php while (have_rows('admissions')) {
                            the_row();
                            $admission = get_sub_field('admission');

                            if ($admission) {
                        ?>
                                <li class="single-info admission-info">
                                    <i class="fa-solid fa-scale-balanced" aria-hidden="true"></i>
                                    <span><?php echo esc_html($admission->name); ?></span>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                <?php } ?>
            </div>

            <div class="col-sm-4 info-col courts-col">
                <?php if (have_rows('courts')) { ?>
                    <h2 class="h3">Court Admissions</h2>
                    <ul class="info-list list-unstyled m-0">

                        <?php while (have_rows('courts')) {
                            the_row();
                            $court = get_sub_field('court');

                            if ($court) {
                        ?>
                                <li class="single-info court-info">
                                    <i class="fa-solid fa-gavel" aria-hidden="true"></i>
                                    <span><?php echo esc_html($court->name); ?></span>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                <?php } ?>
            </div>

        </div>
    </div>
</section>