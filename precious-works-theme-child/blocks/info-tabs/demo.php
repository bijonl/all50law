<?php

include locate_template('blocks/partials/global-block-variables.php');

$demo_tabs = [
    [
        'title'   => 'Overview',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
    ],
    [
        'title'   => 'Experience',
        'content' => '<p>With decades of combined experience, our attorneys have handled complex matters across multiple practice areas.</p>',
    ],
    [
        'title'   => 'Frequently Asked Questions',
        'content' => '<p>Find answers to common questions regarding our process, fees, and what to expect.</p>',
    ],
];

?>

<section <?php echo pw_block_section_classes($block); ?>>

    <?php include locate_template('blocks/partials/title-area.php'); ?>

    <div class="info-tabs-container container">
        <div class="info-tabs-row row">
            <div class="info-tabs-col col-12">

                <div class="info-tabs-wrapper">

                    <ul class="nav nav-tabs" role="tablist">
                        <?php foreach ($demo_tabs as $index => $tab) { ?>

                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
                                    type="button"
                                    role="tab"
                                    aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                >
                                    <?php echo esc_html($tab['title']); ?>
                                </button>
                            </li>

                        <?php } ?>
                    </ul>

                    <div class="tab-content pt-4">

                        <?php foreach ($demo_tabs as $index => $tab) { ?>

                            <div
                                class="tab-pane <?php echo $index === 0 ? 'active show' : ''; ?>"
                                role="tabpanel"
                            >
                                <?php echo wp_kses_post($tab['content']); ?>
                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>