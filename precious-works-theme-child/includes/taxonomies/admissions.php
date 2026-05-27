<?php function register_custom_taxonomies_admissions() {
    $labels = array(
        'name'          => _x( 'Admissions', 'taxonomy general name' ),
        'singular_name' => _x( 'Admission', 'taxonomy singular name' ),
        'search_items'  => __( 'Search Admissions' ),
        'all_items'     => __( 'All Admissions' ),
        'edit_item'     => __( 'Edit Admission' ),
        'update_item'   => __( 'Update Admission' ),
        'add_new_item'  => __( 'Add New Admission' ),
        'not_found'     => __( 'No Admissions Found!' ),
        'back_to_items' => __( '← Back to Admissions' ),
    );

    $labels = apply_filters( 'admissions_taxonomy_labels', $labels );

    $args = array(
        'hierarchical'       => false,
        'labels'             => $labels,
        'show_ui'            => true,
        'meta_box_cb'        => false,
        'show_in_nav_menus'  => false,
        'query_var'          => false,
        'show_admin_column'  => false,
        'has_archive'        => true,
        'show_in_rest'       => false,
        'public'             => false,
        'publicly_queryable' => false,
        'rewrite'            => false,
    );

    $args = apply_filters( 'admissions_taxonomy_args', $args );

    register_taxonomy( 'admissions', array( 'professionals' ), $args );
}
add_action( 'init', 'register_custom_taxonomies_admissions' );
