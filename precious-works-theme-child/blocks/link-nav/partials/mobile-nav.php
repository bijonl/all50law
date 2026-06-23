<div class="mobile-nav-container d-lg-none">

    <label for="page-nav-select" class="visually-hidden">
        Page Navigation
    </label>

    <select
        id="page-nav-select"
        class="form-select page-nav-select"
    >
        <option value="">
            Jump to Section
        </option>

        <?php
        if (have_rows('nav_links')) {
            while (have_rows('nav_links')) {
                the_row();

                $nav_link = get_sub_field('nav_link');

                if (empty($nav_link)) {
                    continue;
                }
                ?>

                <option value="<?php echo esc_url($nav_link['url']); ?>">
                    <?php echo esc_html($nav_link['title']); ?>
                </option>

                <?php
            }
        }
        ?>
    </select>

    <?php if (!empty($button)) {
            ?>
            <li class="list-unstyled">
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

</div>