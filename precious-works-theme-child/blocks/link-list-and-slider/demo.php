<?php
$link_col = 'col-lg-4';
$list_format = 'regular';

$demo_links = [
    [
        'title' => 'Truck Accidents',
        'url'   => '#',
    ],
    [
        'title' => 'Car Accidents',
        'url'   => '#',
    ],
    [
        'title' => 'Motorcycle Accidents',
        'url'   => '#',
    ],
    [
        'title' => 'Medical Malpractice',
        'url'   => '#',
    ],
    [
        'title' => 'Workers’ Compensation',
        'url'   => '#',
    ],
    [
        'title' => 'Wrongful Death',
        'url'   => '#',
    ],
];
?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <div class="link-list-container container <?php echo $list_format; ?>">
        <div class="link-list-row row">
            <div class="link-list-col col-12">

                <div class="link-list-title-wrapper d-flex align-items-center justify-content-between">
                    <h3 class="h5 mb-0">
                        Popular Practice Areas
                    </h3>

                    <a
                        class="pw-text-button link-list-link color-inherit"
                        href="#"
                    >
                        View All
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="link-list-wrapper">
                    <ul class="mb-0 list-unstyled d-flex row">

                        <?php foreach ($demo_links as $link) { ?>

                            <li class="link-col <?php echo $link_col; ?>">

                                <?php if ($list_format === 'big-title') { ?>
                                    <hr>
                                <?php } ?>

                                <article class="single-link-wrapper <?php echo $list_format === 'big-title' ? 'h2' : ''; ?>">

                                    <a
                                        class="link-list-link color-inherit"
                                        href="<?php echo esc_url($link['url']); ?>"
                                    >
                                        <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>

                                        <?php echo esc_html($link['title']); ?>
                                    </a>

                                </article>

                            </li>

                        <?php } ?>

                    </ul>
                </div>

            </div>
        </div>
    </div>

</section>