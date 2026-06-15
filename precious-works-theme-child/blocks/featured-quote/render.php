<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$quote = get_field('quote'); 
$quote_attribute_line_one = get_field('quote_attribute_line_one');
$quote_attribute_line_two = get_field('quote_attribute_line_two');
$quote_attribute_link = get_field('quote_attribute_link');
$quote_image = get_field('quote_image');


?>

<?php $has_content = 
!empty($content) || 
!empty($quote) || 
!empty($quote_attribute_line_one) || 
!empty($quote_attribute_line_two) || 
!empty($quote_attribute_link) || 
!empty($quote_image) || 
$has_button_area || 
$has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>
    <div class="featured-quote-container container">
        <div class="featured-quote-row row background-primary">
            <div class="featured-quote-col col-lg-6">
                <div class="featured-quote-wrapper d-flex flex-column justify-content-between h-100">
                    <div class="quote-body">
                        <div class="quote-icon-wrapper">
                            <i class="h1 fa-solid fa-quote-left"></i>
                        </div>
                        <div class="quote-text-wrapper">
                            <?php echo $quote ?>
                        </div>
                    </div>
                    <div class="quote-attribute-wrapper">
                        <p class="mb-0 line-one"><?php echo $quote_attribute_line_one ?></p>
                        <p class="mb-0 line-two"><?php echo $quote_attribute_line_two ?></p>
                        
                        <p class="mb-0 line-quote">
                            <a 
                                class="color-inherit"
                                href="<?php echo $quote_attribute_link['url'] ?>"
                                target="<?php echo $quote_attribute_link['target']  ? $quote_attribute_link['target'] : '_self' ?>"
                                >
                                <?php echo $quote_attribute_link['title'] ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="featured-quote-img-col col-lg-6 px-0">
                <div class="image-wrapper">
                    <?php echo wp_get_attachment_image($quote_image['ID'], 'full', false, array('class' => 'w-100 h-auto')) ?>
                </div>
            </div>
        </div>
    </div>
 
    <?php if($disclaimer_text) { ?>
        <div class="disclaimer-wrapper text-center pt-5 w-50 mx-auto">
            <p class="disclaimer-text"><?php echo $disclaimer_text ?></div>
        </div>
    <?php } ?>
</section>