<?php
$parent_id = wp_get_post_parent_id( get_the_ID() );

if ( $parent_id ) {
    ?>
    <nav aria-label="Breadcrumb">
        <ol class="breadcrumb list-unstyled d-flex flex-wrap mb-0">
            <li class="breadcrumb-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    Home
                </a>
            </li>

            <li class="breadcrumb-item" aria-hidden="true">&gt;</li>

            <li class="breadcrumb-item">
                <?php echo esc_html( get_the_title( $parent_id ) ); ?>
            </li>
        </ol>
    </nav>
    <?php
}
?>