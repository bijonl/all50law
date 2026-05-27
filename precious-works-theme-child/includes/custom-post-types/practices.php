<?php
/**
 * practices Custom Post Type
 *
 * This custom post type adds support for practices. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_practices() {
    $labels = apply_filters( 'practices_post_type_labels', array(
        'name'               => 'Practices',
        'singular_name'      => 'Practice',
        'menu_name'          => 'Practices',
        'add_new'            => 'Add New Practice',
        'add_new_item'       => 'Add Practice',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Practice',
        'new_item'           => 'New Practice',
        'view'               => 'View Practice',
        'view_item'          => 'View Practice',
        'search_items'       => 'Search Practices',
        'not_found'          => 'No Practice',
        'not_found_in_trash' => 'No Practices Found in Trash',
        'parent'             => 'Parent Practices',
    ));

    $args = apply_filters( 'practice_post_type_args', array(
        'label'               => 'practice',
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

    register_post_type( 'practices', $args );
}
add_action( 'init', 'register_custom_post_type_practices' );


// Run once for user permissions

add_action( 'admin_init', 'add_practice_caps');
function add_practice_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_practice' );
        $role->add_cap( 'read_practice' );
        $role->add_cap( 'delete_practice' );
        $role->add_cap( 'edit_practice' );
        $role->add_cap( 'edit_others_practice' );
        $role->add_cap( 'publish_practice' );
        $role->add_cap( 'read_private_practice' );
    }
}