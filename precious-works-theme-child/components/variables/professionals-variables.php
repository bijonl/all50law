<?php
// This array holds all the sections that will go on the bio page. -->
// This will be needed for the tabs navigation buildout. -->

// Detail Page
$biography_content_section_title  = get_field( 'biography_content_section_title', 'options' );
$experience_content_section_title = get_field( 'experience_content_section_title', 'options' );
$news_content_section_title       = get_field( 'news_content_section_title', 'options' );
$insights_content_section_title   = get_field( 'insights_content_section_title', 'options' );
$blog_content_section_title       = get_field( 'blog_content_section_title', 'options' );
// Listing Page
$professional_listing_intro_statement  = get_field( 'professional_listing_intro_statement', 'options', false, false );
$professional_listing_navigation_label = get_field( 'professional_listing_navigation_label', 'options' );
$staff_listing_navigation_label        = get_field( 'staff_listing_navigation_label', 'options' );


?>
<?php
// This array will output the tabbed sections of the professional detail page.
if ( is_singular( 'professionals' ) ) {
	$content_section = array(
		'bio'        => $biography_content_section_title,
		'experience' => $experience_content_section_title,
		'news'       => $news_content_section_title,
		'insights'   => $insights_content_section_title,
		'blog-posts' => $blog_content_section_title,
	);
} else {
	$content_section = array(
		'attorneys' => $professional_listing_navigation_label,
		'staff'     => $staff_listing_navigation_label,
	);
}

$title                         = get_the_title( $id );
$prefix                        = get_field( 'prefix', $id );
$permalink                     = get_the_permalink( $id );
$first_name                    = get_field( 'first_name', $id );
$middle_name                   = get_field( 'middle_name', $id );
$non_legal_professional        = get_field( 'non_legal_professional', $id );
$last_name                     = get_field( 'last_name', $id );
$suffix                        = get_field( 'suffix', $id );
$abstract                      = get_field( 'abstract', $id );
$introduction                  = get_field( 'introduction', $id );
$maiden_name                   = get_field( 'maiden_name', $id );
$professional_email            = get_field( 'professional_email', $id );
$email_disclaimer_page         = get_field( 'email_disclaimer_page', 'options' );
$thumbnail_image               = get_field( 'thumbnail_image', $id );
$featured_image_id             = get_post_thumbnail_id($id);
$default_professional_headshot = get_field( 'default_professional_headshot', 'options' );
$professional_headshot_id      = get_post_thumbnail_id( $id );
$office_direct_dials           = get_field( 'office_direct_dials', $id );
$phone_number                  = get_field('phone_number', $id);
if ( $office_direct_dials ) {
	$phone_number = $office_direct_dials[0]['phone_number'];
}

$slug                     = get_post_field( 'post_name', $id );
$professional_email_link  = '';
$professional_email_link .= $email_disclaimer_page;
$professional_email_link .= '?professional=' . $slug;
// $professional_email_link .= '&id='.$id;


$professional_narrative    = get_field( 'professional_narrative', $id );
$custom_supplemental_information = get_field( 'custom_supplemental_information', $id );
$memberships                     = get_field( 'memberships' );
$awards_and_rankings             = get_field( 'awards_and_rankings' );
$introduction                    = get_field( 'introduction', $id, false, false );
$recognition_section_title       = get_field( 'recognition_section_title', 'options' );
$membership_section_title        = get_field( 'membership_section_title', 'options' );

$full_name = '';
if ( $prefix ) {
	$full_name .= $prefix;
}
if ( $first_name ) {
	$full_name .= ' ';
	$full_name .= $first_name;
}
if ( $middle_name ) {
	$full_name .= ' ';
	$full_name .= $middle_name;
}
if ( $last_name ) {
	$full_name .= ' ';
	$full_name .= $last_name;
}
if ( $suffix ) {
	$full_name .= ', ';
	$full_name .= $suffix;
}



$position_category = get_field( 'position_category', $id );
$additional_title  = get_field( 'additional_title', $id );
$position_override = get_field( 'position_override', $id );
$position_string   = '';

if ( $position_category ) {
	$term             = get_term_by( 'id', $position_category, 'positions' );
	$position_string .= $term->name;
}

if ( $position_override ) {
	$position_string = $position_override;
}
if ( $additional_title ) {
	$position_string .= ', ' . $additional_title;
}
