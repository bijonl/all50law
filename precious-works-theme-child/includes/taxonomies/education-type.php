<?php function register_custom_taxonomies_education() {
    $labels = apply_filters( 'education_taxonomy_labels', array(
        'name'          => _x( 'Schools', 'taxonomy general name' ),
        'singular_name' => _x( 'School', 'taxonomy singular name' ),
        'search_items'  => __( 'Search School' ),
        'all_items'     => __( 'All School' ),
        'edit_item'     => __( 'Edit School' ),
        'update_item'   => __( 'Update School' ),
        'add_new_item'  => __( 'Add New School' ),
        'not_found'     => __( 'No School Found!' ),
        'back_to_items' => __( '← Back to Schools' ),
    ));

    $args = apply_filters( 'education_taxonomy_args', array(
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
        'rewrite'            => array( 'slug' => 'education' ),
    ));

    register_taxonomy( 'education', array( 'professionals' ), $args );
}
add_action( 'init', 'register_custom_taxonomies_education' );

