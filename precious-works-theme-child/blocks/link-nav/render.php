<?php
include(locate_template('blocks/partials/global-block-variables.php'));

$logo      = get_field('logo');
$button    = get_field('button');
$nav_links = get_field('nav_links');

$has_content = !empty($logo) || !empty($button) || !empty($nav_links);

if (!$has_content) {
    include __DIR__ . '/demo.php';
    return;
}
?>

<section <?php echo pw_block_section_classes($block); ?>>

    <div class="mx-auto link-list-nav-container d-flex justify-content-between align-items-center">

        <?php
        if (!empty($logo)) {
            ?>
            <div class="logo-wrapper-nav">
                <?php
                echo wp_get_attachment_image(
                    $logo['ID'],
                    'full',
                    false,
                    [
                        'class' => 'w-100 h-auto'
                    ]
                );
                ?>
            </div>
            <?php
        }
        ?>

        <?php include __DIR__ . '/partials/desktop-nav.php'; ?>

        <?php include __DIR__ . '/partials/mobile-nav.php'; ?>

    </div>

</section>