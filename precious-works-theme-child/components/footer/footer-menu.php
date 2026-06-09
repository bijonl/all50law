<nav
    class="footer-menu"
    aria-label="<?php echo esc_attr( $menu_title ); ?>"
>
    <h5 class="footer-menu-title">
        <?php echo esc_html( $menu_title ); ?>
    </h5>

    <ul class="footer-menu-list list-unstyled mb-0 ms-0">
        <?php
        foreach ( $menu_items as $menu_item ) {

            $link = $menu_item['page_links'] ?? null;

            if ( empty( $link ) ) {
                continue;
            }

            $url    = $link['url'] ?? '';
            $title  = $link['title'] ?? '';
            $target = ! empty( $link['target'] ) ? $link['target'] : '_self';

            if ( empty( $url ) || empty( $title ) ) {
                continue;
            }
            ?>

            <li class="footer-menu-item">
                <a
                    class="color-inherit"
                    href="<?php echo esc_url( $url ); ?>"
                    target="<?php echo esc_attr( $target ); ?>"
                    <?php
                    if ( '_blank' === $target ) {
                        echo ' rel="noopener noreferrer"';
                    }
                    ?>
                >
                    <?php echo esc_html( $title ); ?>
                </a>
            </li>

            <?php
        }
        ?>
    </ul>
</nav>