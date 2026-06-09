<?php
if ( have_rows( 'privacy_menu', 'option' ) ) { ?>
    <nav class="footer-privacy-nav" aria-label="Privacy and legal links">
        <ul class="footer-privacy-menu list-unstyled d-flex flex-wrap gap-3 mb-0 justify-content-end">

            <?php
            while ( have_rows( 'privacy_menu', 'option' ) ) {
                the_row();

                $page_links = get_sub_field( 'page_links' );

                if ( ! $page_links ) {
                    continue;
                }

                $url    = $page_links['url'] ?? '';
                $title  = $page_links['title'] ?? '';
                $target = ! empty( $page_links['target'] ) ? $page_links['target'] : '_self';

                if ( empty( $url ) || empty( $title ) ) {
                    continue;
                }
                ?>

                <li class="footer-privacy-menu-item disclaimer-text mb-0">
                    <a
                        class="color-inherit"
                        href="<?php echo esc_url( $url ); ?>"
                        target="<?php echo esc_attr( $target ); ?>"
                        <?php echo ( '_blank' === $target ) ? 'rel="noopener noreferrer"' : ''; ?>
                    >
                        <?php echo esc_html( $title ); ?>
                    </a>
                </li>

                <?php
            }
            ?>
        </ul>
    </nav>
    <?php
}
?>