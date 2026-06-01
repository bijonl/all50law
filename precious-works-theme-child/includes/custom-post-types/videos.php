<?php
/**
 * videos Custom Post Type
 *
 * This custom post type adds support for videos. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_videos() {
    $labels = apply_filters( 'videos_post_type_labels', array(
        'name'               => 'Videos',
        'singular_name'      => 'Video',
        'menu_name'          => 'Videos',
        'add_new'            => 'Add New Video',
        'add_new_item'       => 'Add Video',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Video',
        'new_item'           => 'New Video',
        'view'               => 'View Video',
        'view_item'          => 'View Video',
        'search_items'       => 'Search Videos',
        'not_found'          => 'No Video',
        'not_found_in_trash' => 'No Videos Found in Trash',
        'parent'             => 'Parent Videos',
    ));

    $args = apply_filters( 'video_post_type_args', array(
        'label'               => 'video',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'videos', $args );
}
add_action( 'init', 'register_custom_post_type_videos' );


// Run once for user permissions

add_action( 'admin_init', 'add_video_caps');
function add_video_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_video' );
        $role->add_cap( 'read_video' );
        $role->add_cap( 'delete_video' );
        $role->add_cap( 'edit_video' );
        $role->add_cap( 'edit_others_video' );
        $role->add_cap( 'publish_video' );
        $role->add_cap( 'read_private_video' );
    }
}