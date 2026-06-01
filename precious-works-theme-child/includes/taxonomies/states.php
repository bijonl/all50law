<?php function register_custom_taxonomies_state() {
    $labels = apply_filters( 'states_taxonomy_labels', array(
        'name'          => _x( 'States', 'taxonomy general name' ),
        'singular_name' => _x( 'State', 'taxonomy singular name' ),
        'search_items'  => __( 'Search States' ),
        'all_items'     => __( 'All States' ),
        'edit_item'     => __( 'Edit State' ),
        'update_item'   => __( 'Update State' ),
        'add_new_item'  => __( 'Add New State' ),
        'not_found'     => __( 'No States Found!' ),
        'back_to_items' => __( '← Back to States' ),
    ));

    $args = apply_filters( 'states_taxonomy_args', array(
        'hierarchical'       => false,
        'labels'             => $labels,
        'show_ui'            => true,
        'meta_box_cb'        => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => false,
        'query_var'          => false,
        'show_in_rest'       => true,
        'has_archive'        => true,
        'public'             => false,
        'publicly_queryable' => false,
        'rewrite'            => array( 'slug' => 'states' ),
    ));

    register_taxonomy( 'states', array( 'locations' ), $args );
}
add_action( 'init', 'register_custom_taxonomies_state' );
