<?php $footer_logo = get_field('footer_logo', 'options');
$footer_logo_note = get_field('footer_logo_note', 'options');
$footer_logo_gallery = get_field('footer_logo_gallery', 'options');
$address_note = get_field('address_note', 'options');
$disclaimer_note = get_field('disclaimer_note', 'options');
$footer_review_note = get_field('footer_review_note', 'options');
$copyright_text = get_field('copyright_text', 'options', false, false);


$footer_column_one_menu_title = get_field('footer_column_one_menu_title', 'options');
$footer_column_two_menu_title = get_field('footer_column_two_menu_title', 'options');
$footer_column_three_menu_title = get_field('footer_column_three_menu_title', 'options');
$footer_menu_one = get_field('footer_menu_one', 'options');
$footer_menu_two = get_field('footer_menu_two', 'options');
$footer_menu_three = get_field('footer_menu_three', 'options');


$footer_menu_array = array(
    $footer_column_one_menu_title => $footer_menu_one, 
    $footer_column_two_menu_title => $footer_menu_two, 
    $footer_column_three_menu_title => $footer_menu_three, 
); 

$social_column_title = get_field('social_column_title', 'options');
$social_media_footer = get_field('social_media_footer', 'options');
$app_store_column_title = get_field('app_store_column_title', 'options');
$app_store_icons = get_field('app_store_icons', 'options'); ?>