<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$link_list_title = get_field('link_list_title');
$link_list_link = get_field('link_list_link');
$links = get_field('links');
$links_per_row = get_field('links_per_row'); 
$list_format = get_field('list_format') ? get_field('list_format') : 'regular';
$link_col = 'col-lg-4';
if($links_per_row === '3') {
    $link_col = 'col-lg-4'; 
} else if($links_per_row === '4') {
    $link_col = 'col-lg-3'; 
} else if($links_per_row === '2') {
    $link_col = 'col-lg-6';  
}

?>

<?php $has_content = !empty($link_list_link) || !empty($link_list_title) || have_rows('links') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block); ?>>
    
    <?php include(locate_template('blocks/partials/title-area.php')); ?>

    <div class="link-list-container container <?php echo $list_format ?>">
        <div class="link-list-row row">
            <div class="link-list-col col-12">
                <?php if (!empty($link_list_title) || !empty($link_list_link)) { ?>
                    <div class="link-list-title-wrapper d-flex align-items-center justify-content-between">
                        <?php if (!empty($link_list_title)) { ?>
                            <h3 class="h5 mb-0">
                                <?php echo esc_html($link_list_title); ?>
                            </h3>
                        <?php } ?>
                        <?php if (!empty($link_list_link) && !empty($link_list_link['url']) && !empty($link_list_link['title'])) { ?>
                            <a 
                                class="pw-text-button link-list-link color-inherit"
                                target="<?php echo !empty($link_list_link['target']) ? esc_attr($link_list_link['target']) : '_self'; ?>"
                                href="<?php echo esc_url($link_list_link['url']); ?>"
                            >
                                <?php echo esc_html($link_list_link['title']); ?>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        <?php } ?>

                    </div>
                <?php } ?>
                <div class="link-list-wrapper">
                    <?php if (have_rows('links')) { ?>
                        <ul class="mb-0 list-unstyled d-flex row">
                            <?php while (have_rows('links')) { 
                                the_row();
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon');
                                $link_text = get_sub_field('link_text'); 
                            ?>

                                <li class="link-col <?php echo $link_col ?>">
                                    <?php if($list_format === 'big-title') { ?>
                                        <hr>
                                    <?php } ?>
                                   
                                    <article class="single-link-wrapper <?php echo $list_format === 'big-title' ? 'h2' : '' ?>">
                                    <?php if(!empty($link)) { ?>
                                        <a 
                                            class="link-list-link color-inherit"
                                            target="<?php echo !empty($link['target']) ? esc_attr($link['target']) : '_self'; ?>"
                                            href="<?php echo esc_url($link['url']); ?>"
                                        >

                                    <?php } ?>
                                   
                                        <?php if (!empty($icon)) { ?>
                                            <?php echo $icon; ?>
                                        <?php } ?>

                                        <?php if($link_text) {
                                            echo $link_text; 
                                        } elseif(!empty($link['title'])) {
                                            echo $link['title'];  
                                        }  ?>
                                    <?php if(!empty($link)) { ?>
                                        </a>
                                    <?php } ?>
                                    </article>
                                </li>

                            <?php } ?>

                        </ul>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <?php include(locate_template('blocks/partials/button-area.php')); ?>
</section>