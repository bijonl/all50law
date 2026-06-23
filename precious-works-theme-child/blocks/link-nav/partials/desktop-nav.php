<div class="link-nav-container d-none d-lg-block">

    <ul class="list-unstyled d-flex ms-0 mb-0 align-items-center justify-content-between">

        <?php
        if (have_rows('nav_links')) {
            while (have_rows('nav_links')) {
                the_row();

                $nav_link = get_sub_field('nav_link');

                if (empty($nav_link)) {
                    continue;
                }
                ?>

                <li>
                    <a
                        class="link-list-link color-inherit"
                        href="<?php echo esc_url($nav_link['url']); ?>"
                        target="<?php echo esc_attr($nav_link['target'] ?: '_self'); ?>"
                    >
                        <?php echo esc_html($nav_link['title']); ?>
                    </a>
                </li>

                <?php
            }
        }

        if (!empty($button)) {
            ?>
            <li>
                <a
                    class="pw-solid-button color-inherit"
                    href="<?php echo esc_url($button['url']); ?>"
                    target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                >
                    <?php echo esc_html($button['title']); ?>
                </a>
            </li>
            <?php
        }
        ?>

    </ul>

</div>