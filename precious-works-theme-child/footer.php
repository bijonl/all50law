<?php 
wp_footer(); 
include locate_template('components/variables/footer-variables.php'); ?>

<footer class="site-footer">

    <div class="site-footer-content-container container">

        <div class="site-footer-content-row row">

            <?php
            if ( $footer_logo || $footer_review_note ) {
                ?>
                <div class="footer-logo-col col-12 col-sm-4 col-lg-3">

                    <?php
                    if ( $footer_logo ) {
                        include locate_template( 'components/footer/footer-logo.php' );
                    }

                    if ( $footer_review_note ) {
                        include locate_template( 'components/footer/footer-review-note.php' );
                    }
                    ?>

                </div>
                <?php
            }
            ?>

            <?php
            if ( array_filter( $footer_menu_array ) ) {
                ?>
                <div class="footer-menu-col col-12 col-sm-8 col-lg-5 mx-auto">

                    <div class="d-flex justify-content-between menu-col-wrapper">

                        <?php
                        foreach ( $footer_menu_array as $menu_title => $menu_items ) {

                            if ( empty( $menu_title ) || empty( $menu_items ) ) {
                                continue;
                            }

                            include locate_template( 'components/footer/footer-menu.php' );
                        }
                        ?>

                    </div>

                </div>
                <?php
            }
            ?>

            <?php
            if ( $social_media_footer || $app_store_icons ) {
                ?>
                <div class="social-menu-col col-12 col-sm-6 col-lg-3">

                    <?php
                    if ( have_rows( 'social_media_footer', 'options' ) ) {
                        ?>
                        <nav
                            class="footer-social-col social-media-nav"
                            aria-labelledby="social-links-heading"
                        >
                            <?php include locate_template( 'components/footer/social-icons.php' ); ?>
                        </nav>
                        <?php
                    }
                    ?>

                    <?php
                    if ( have_rows( 'app_store_icons', 'options' ) ) {
                        ?>
                        <nav
                            class="footer-social-col app-store-nav"
                            aria-labelledby="app-store-heading"
                        >

                        <?php include locate_template( 'components/footer/app-store-icons.php' ); ?>

                        </nav>
                        <?php
                    }
                    ?>

                </div>
                <?php
            }
            ?>

        </div>

        <?php
        if ( ! empty( $footer_logo_gallery ) ) {
            ?>
            <div class="row footer-logo-gallery-row justify-content-sm-center justify-content-lg-center justify-content-xl-between">

                <?php include locate_template( 'components/footer/footer-logo-gallery.php' ); ?>

            </div>
            <?php
        }
        ?>

        <?php
        if ( ! empty( $address_note ) ) {
            ?>
            <div class="row footer-address-row">

                <div class="footer-address-col col-sm-12 text-start">

                    <address>
                        <?php include locate_template( 'components/footer/footer-address.php' ); ?>
                    </address>

                </div>

            </div>
            <?php
        }
        ?>

        <?php
        if ( ! empty( $disclaimer_note ) ) {
            ?>
            <div class="row footer-disclaimer-row">

                <div class="footer-disclaimer-col col-sm-12 text-start">

                    <?php include locate_template( 'components/footer/footer-disclaimer.php' ); ?>

                </div>

            </div>
            <?php
        }
        ?>

        <?php
        if ( $copyright_text || have_rows( 'privacy_menu', 'options' ) ) {
            ?>
            <div class="row footer-copyright-row">

                <?php
                if ( $copyright_text ) {
                    ?>
                    <div class="footer-copyright-col col-sm text-start">

                        <?php include locate_template( 'components/footer/copyright.php' ); ?>

                    </div>
                    <?php
                }
                ?>

                <?php
                if ( have_rows( 'privacy_menu', 'options' ) ) {
                    ?>
                    <div class="footer-privacy-menu-col col-sm text-start">

                        <?php include locate_template( 'components/footer/privacy-menu.php' ); ?>

                    </div>
                    <?php
                }
                ?>

            </div>
            <?php
        }
        ?>
    </div>
</footer>