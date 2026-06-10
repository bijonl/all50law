<?php

include locate_template('blocks/partials/global-block-variables.php');

$demo_logo = 'https://placehold.co/220x60?text=Logo';

$demo_nav_links = [
    [
        'title' => 'Practice Areas',
        'url'   => '#',
    ],
    [
        'title' => 'Attorneys',
        'url'   => '#',
    ],
    [
        'title' => 'Results',
        'url'   => '#',
    ],
    [
        'title' => 'Locations',
        'url'   => '#',
    ],
];

$demo_button = [
    'title' => 'Free Consultation',
    'url'   => '#',
];

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <div class="mx-auto link-list-nav-container d-flex justify-content-between align-items-center">

        <div class="logo-wrapper-nav">
            <img
                src="<?php echo esc_url($demo_logo); ?>"
                alt="Demo Logo"
                class="w-100 h-auto"
            >
        </div>

        <div class="link-nav-container">

            <ul class="list-unstyled d-flex ms-0 mb-0 align-items-center justify-content-between">

                <?php foreach ($demo_nav_links as $nav_link) { ?>

                    <li>
                        <a
                            class="link-list-link color-inherit"
                            href="<?php echo esc_url($nav_link['url']); ?>"
                        >
                            <?php echo esc_html($nav_link['title']); ?>
                        </a>
                    </li>

                <?php } ?>

                <li>
                    <a
                        class="pw-solid-button color-inherit"
                        href="<?php echo esc_url($demo_button['url']); ?>"
                    >
                        <?php echo esc_html($demo_button['title']); ?>
                    </a>
                </li>

            </ul>

        </div>

    </div>

</section>