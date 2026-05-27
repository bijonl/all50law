<?php
/**
 * Professionals Custom Post Type
 *
 * This custom post type adds support for Professionals. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_professionals() {
    $labels = apply_filters( 'professionals_post_type_labels', array(
        'name'               => 'Professionals',
        'singular_name'      => 'Professional',
        'menu_name'          => 'Professionals',
        'add_new'            => 'Add New Professional',
        'add_new_item'       => 'Add Professional',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Professional',
        'new_item'           => 'New Professional',
        'view'               => 'View Professional',
        'view_item'          => 'View Professional',
        'search_items'       => 'Search Professionals',
        'not_found'          => 'No Professional',
        'not_found_in_trash' => 'No Professionals Found in Trash',
        'parent'             => 'Parent Professionals',
    ));

    $args = apply_filters( 'professional_post_type_args', array(
        'label'               => 'professional',
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

    register_post_type( 'professionals', $args );
}
add_action( 'init', 'register_custom_post_type_professionals' );


// Run once for user permissions

add_action( 'admin_init', 'add_professional_caps');
function add_professional_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_professional' );
        $role->add_cap( 'read_professional' );
        $role->add_cap( 'delete_professional' );
        $role->add_cap( 'edit_professional' );
        $role->add_cap( 'edit_others_professional' );
        $role->add_cap( 'publish_professional' );
        $role->add_cap( 'read_private_professional' );
    }
}