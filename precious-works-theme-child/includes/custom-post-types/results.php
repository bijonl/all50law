<?php
/**
 * results Custom Post Type
 *
 * This custom post type adds support for results. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_results() {
    $labels = apply_filters( 'results_post_type_labels', array(
        'name'               => 'Results',
        'singular_name'      => 'Result',
        'menu_name'          => 'Results',
        'add_new'            => 'Add New Result',
        'add_new_item'       => 'Add Result',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Result',
        'new_item'           => 'New Result',
        'view'               => 'View Result',
        'view_item'          => 'View Result',
        'search_items'       => 'Search Results',
        'not_found'          => 'No Result',
        'not_found_in_trash' => 'No Results Found in Trash',
        'parent'             => 'Parent Results',
    ));

    $args = apply_filters( 'result_post_type_args', array(
        'label'               => 'result',
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

    register_post_type( 'results', $args );
}
add_action( 'init', 'register_custom_post_type_results' );


// Run once for user permissions

add_action( 'admin_init', 'add_result_caps');
function add_result_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_result' );
        $role->add_cap( 'read_result' );
        $role->add_cap( 'delete_result' );
        $role->add_cap( 'edit_result' );
        $role->add_cap( 'edit_others_result' );
        $role->add_cap( 'publish_result' );
        $role->add_cap( 'read_private_result' );
    }
}