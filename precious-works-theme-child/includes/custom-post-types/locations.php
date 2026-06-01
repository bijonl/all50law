<?php
/**
 * Locations Custom Post Type
 *
 * This custom post type adds support for Locations. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_locations() {
    $labels = apply_filters( 'locations_post_type_labels', array(
        'name'               => 'Locations',
        'singular_name'      => 'Location',
        'menu_name'          => 'Locations',
        'add_new'            => 'Add New Location',
        'add_new_item'       => 'Add Location',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Location',
        'new_item'           => 'New Location',
        'view'               => 'View Location',
        'view_item'          => 'View Location',
        'search_items'       => 'Search Locations',
        'not_found'          => 'No Location',
        'not_found_in_trash' => 'No Locations Found in Trash',
        'parent'             => 'Parent Locations',
    ));

    $args = apply_filters( 'location_post_type_args', array(
        'label'               => 'location',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail', 'editor'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'locations', $args );
}
add_action( 'init', 'register_custom_post_type_locations' );


// Run once for user permissions

add_action( 'admin_init', 'add_location_caps');
function add_location_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_location' );
        $role->add_cap( 'read_location' );
        $role->add_cap( 'delete_location' );
        $role->add_cap( 'edit_location' );
        $role->add_cap( 'edit_others_location' );
        $role->add_cap( 'publish_location' );
        $role->add_cap( 'read_private_location' );
    }
}