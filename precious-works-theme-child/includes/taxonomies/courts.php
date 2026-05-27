<?php function register_custom_taxonomies_court() {
    $labels = apply_filters( 'courts_taxonomy_labels', array(
        'name'          => _x( 'Courts', 'taxonomy general name' ),
        'singular_name' => _x( 'Court', 'taxonomy singular name' ),
        'search_items'  => __( 'Search Courts' ),
        'all_items'     => __( 'All Courts' ),
        'edit_item'     => __( 'Edit Court' ),
        'update_item'   => __( 'Update Court' ),
        'add_new_item'  => __( 'Add New Court' ),
        'not_found'     => __( 'No Courts Found!' ),
        'back_to_items' => __( '← Back to Courts' ),
    ));

    $args = apply_filters( 'courts_taxonomy_args', array(
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
        'rewrite'            => array( 'slug' => 'courts' ),
    ));

    register_taxonomy( 'courts', array( 'professionals' ), $args );
}
add_action( 'init', 'register_custom_taxonomies_court' );

