<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$logo = get_field('logo');
$nav_links = get_field('nav_links');
$button = get_field('button'); ?>

<?php $has_content = !empty($logo) || !empty($button) || have_rows('nav_links') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block); ?>>

    <div class="mx-auto link-list-nav-container d-flex justify-content-between align-items-center">
        <div class="logo-wrapper-nav">
            <?php echo wp_get_attachment_image($logo['ID'], 'full', false, array('class' => 'w-100 h-auto')) ?>
        </div>
        <div class="link-nav-container">
            <?php if(have_rows('nav_links')) { ?>
                <ul class="list-unstyled d-flex ms-0 mb-0 align-items-center justify-content-between">
                <?php while(have_rows('nav_links')) {
                    the_row();  
                    $nav_link = get_sub_field('nav_link'); ?>
                    <li>
                        <a 
                            class="link-list-link color-inherit"
                            target="<?php echo !empty($nav_link['target']) ? esc_attr($nav_link['target']) : '_self'; ?>"
                            href="<?php echo esc_url($nav_link['url']); ?>"
                        >
                            <?php echo esc_html($nav_link['title']); ?>
                        </a>
                    </li>
            <?php 
                } ?>

            <?php if($button) { ?>
                <li>
                    <a 
                        class="pw-solid-button color-inherit"
                        target="<?php echo !empty($button['target']) ? esc_attr($button['target']) : '_self'; ?>"
                        href="<?php echo esc_url($button['url']); ?>"
                    >
                        <?php echo esc_html($button['title']); ?>
                    </a>
                </li>
            <?php } ?>







                </ul>
            <?php } ?>

        </div>
        
    </div>
</section>