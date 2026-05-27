<?php function register_custom_taxonomies_position() {
    $labels = apply_filters( 'positions_taxonomy_labels', array(
        'name'          => _x( 'Positions', 'taxonomy general name' ),
        'singular_name' => _x( 'Position', 'taxonomy singular name' ),
        'search_items'  => __( 'Search Positions' ),
        'all_items'     => __( 'All Positions' ),
        'edit_item'     => __( 'Edit Position' ),
        'update_item'   => __( 'Update Position' ),
        'add_new_item'  => __( 'Add New Position' ),
        'not_found'     => __( 'No Positions Found!' ),
        'back_to_items' => __( '← Back to Positions' ),
    ));

    $args = apply_filters( 'positions_taxonomy_args', array(
        'hierarchical'       => false,
        'labels'             => $labels,
        'show_ui'            => true,
        'meta_box_cb'        => false,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => false,
        'query_var'          => false,
        'show_in_rest'       => true,
        'has_archive'        => true,
        'public'             => false,
        'publicly_queryable' => false,
        'rewrite'            => array( 'slug' => 'positions' ),
    ));

    register_taxonomy( 'positions', array( 'professionals' ), $args );
}
add_action( 'init', 'register_custom_taxonomies_position' );
