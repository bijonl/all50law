<?php function register_custom_taxonomies_degree() {
    $labels = apply_filters( 'degrees_taxonomy_labels', array(
        'name'          => _x( 'Degrees', 'taxonomy general name' ),
        'singular_name' => _x( 'Degree', 'taxonomy singular name' ),
        'search_items'  => __( 'Search Degrees' ),
        'all_items'     => __( 'All Degrees' ),
        'edit_item'     => __( 'Edit Degree' ),
        'update_item'   => __( 'Update Degree' ),
        'add_new_item'  => __( 'Add New degree' ),
        'not_found'     => __( 'No Degrees Found!' ),
        'back_to_items' => __( '← Back to Degrees' ),
    ));

    $args = apply_filters( 'degrees_taxonomy_args', array(
        'hierarchical'       => false,
        'labels'             => $labels,
        'show_ui'            => true,
        'meta_box_cb'        => false,
        'show_in_nav_menus'  => false,
        'show_admin_column'  => false,
        'query_var'          => false,
        'show_in_rest'       => true,
        'has_archive'        => true,
        'public'             => false,
        'publicly_queryable' => false,
        'rewrite'            => array( 'slug' => 'degrees' ),
    ));

    register_taxonomy( 'degrees', array( 'professionals' ), $args );
}
add_action( 'init', 'register_custom_taxonomies_degree' );
