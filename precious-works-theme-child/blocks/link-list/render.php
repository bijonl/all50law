<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$link_list_title = get_field('link_list_title');
$link_list_link = get_field('link_list_link');
$link_list_subtitle = get_field('link_list_subtitle');
$links = get_field('links');
$links_per_row = get_field('links_per_row'); 
$list_format = get_field('list_format') ? get_field('list_format') : 'regular';
$two_column_format = $list_format === 'two-column'; 
$link_col = 'col-lg-4';
if($links_per_row === '3') {
    $link_col = 'col-lg-4'; 
} else if($links_per_row === '4') {
    $link_col = 'col-xl-3 col-lg-4 col-sm-6 col-12'; 
} else if($links_per_row === '2') {
    $link_col = 'col-lg-6';  
} elseif($two_column_format) {
    $link_col = '';  
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
            <?php if(!$two_column_format) { ?>
                <div class="link-list-col col-12">
            <?php } ?> 
                <?php if (!empty($link_list_title) || !empty($link_list_link)) { ?>
                    <div class="link-list-title-wrapper <?php echo $two_column_format ? 'col-sm-6' : 'flex-column flex-sm-row d-flex align-items-center justify-content-between' ?>">
                        <?php if (!empty($link_list_title)) { ?>
                            <h3 class="<?php echo $two_column_format ? 'h3' : 'h5' ?> mb-0">
                                <?php echo esc_html($link_list_title); ?>
                            </h3>
                        <?php } ?>
                        <?php if (!empty($link_list_subtitle)) { ?>
                            <p class="mb-0 mt-4">
                                <?php echo esc_html($link_list_subtitle); ?>
                            </p>
                        <?php } ?>
                        <?php if (!empty($link_list_link) && !empty($link_list_link['url']) && !empty($link_list_link['title'])) { ?>
                            <a 
                                class="pw-text-button w-100 pb-3 pb-sm-0 justify-content-end link-list-link color-inherit order-first order-sm-last"
                                target="<?php echo !empty($link_list_link['target']) ? esc_attr($link_list_link['target']) : '_self'; ?>"
                                href="<?php echo esc_url($link_list_link['url']); ?>"
                            >
                                <?php echo esc_html($link_list_link['title']); ?>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        <?php } ?>

                    </div>
                <?php } ?>
                <div class="link-list-wrapper <?php echo $two_column_format ? 'col-sm-6' : '' ?>">
                    <?php if (have_rows('links')) { ?>
                        <ul class="mb-0 list-unstyled <?php echo $two_column_format ? 'd-block' : 'd-flex' ?> row">
                            <?php while (have_rows('links')) { 
                                the_row();
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon');
                                $link_text = get_sub_field('link_text'); 
                                $link_subtitle = get_sub_field('link_subtitle'); 
                            ?>

                                <li class="link-col <?php echo $link_col ?>">
                                    <?php if($list_format === 'big-title') { ?>
                                        <hr>
                                    <?php } ?>
                                   
                                    <article class="single-link-wrapper <?php echo $list_format ?>-single-link">
                                    <?php if(!empty($link)) { ?>
                                        <a 
                                            class="link-list-link color-inherit"
                                            target="<?php echo !empty($link['target']) ? esc_attr($link['target']) : '_self'; ?>"
                                            href="<?php echo esc_url($link['url']); ?>"
                                        >

                                    <?php } ?>
                                   
                                        <?php if (!empty($icon)) { ?>
                                            <div class="icon-wrapper">
                                                <?php echo $icon; ?>
                                            </div>
                                        <?php } ?>

                                        <?php if($link_text) { ?>
                                            <div class="title-wrapper <?php echo $list_format === 'big-title' ? 'h2' : '' ?>">
                                                <?php echo $link_text; ?>
                                            </div>
                                        <?php } elseif(!empty($link['title'])) { ?>
                                            <div class="title-wrapper <?php echo $list_format === 'big-title' ? 'h2' : '' ?>">
                                                <?php echo $link['title']; ?>
                                            </div>
                                        <?php }  ?>
                                        <?php if($link_subtitle) {  ?>
                                           <p class='mb-0'> <?php echo $link_subtitle; ?></p> 
                                        <?php } ?>
                                    <?php if(!empty($link)) { ?>
                                        </a>
                                    <?php } ?>
                                    </article>
                                </li>

                            <?php } ?>

                        </ul>
                    <?php } ?>

                </div>
            <?php if(!$two_column_format) { ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>