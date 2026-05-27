<?php if (have_rows('info_tabs')) { ?>

<?php
$uid = 'tabs-' . get_the_ID() . '-' . wp_rand(1000, 9999);
$index = 0;
?>

<div class="d-flex align-items-start">

    <!-- NAV -->
    <div class="nav flex-column nav-pills col-lg-6" id="<?php echo $uid; ?>-tablist" role="tablist" aria-orientation="vertical">

        <?php while (have_rows('info_tabs')) { the_row(); ?>

            <?php
            $tab_title = get_sub_field('tab_title');
            $tab_subtitle = get_sub_field('tab_subtitle');

            $tab_id = $uid . '-' . $index;
            ?>

            <button
                class="text-start nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
                id="<?php echo $tab_id; ?>-tab"
                data-bs-toggle="pill"
                data-bs-target="#<?php echo $tab_id; ?>"
                type="button"
                role="tab"
                aria-controls="<?php echo $tab_id; ?>"
                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
            >
                <h3 class="h5"><?php echo esc_html($tab_title); ?></h3>
                <p><?php echo esc_html($tab_subtitle); ?></p>
            </button>

            <?php $index++; ?>

        <?php }; ?>

    </div>

    <!-- CONTENT -->
    <div class="tab-content col-lg-6" id="<?php echo $uid; ?>-content">

        <?php
        $index = 0;
        reset_rows(); // important: rewinds repeater safely
        ?>

        <?php while (have_rows('info_tabs')) { the_row(); ?>

            <?php
            $image_content = get_sub_field('image_content');
            $tab_content = get_sub_field('tab_content');

            $tab_id = $uid . '-' . $index;
            ?>

            <div
                class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
                id="<?php echo $tab_id; ?>"
                role="tabpanel"
                aria-labelledby="<?php echo $tab_id; ?>-tab"
                tabindex="0"
            >

                <?php
                if (!empty($image_content['id'])) {
                    echo wp_get_attachment_image(
                        $image_content['id'],
                        'full',
                        false,
                        ['class' => 'w-100 h-auto mb-4']
                    );
                }
                ?>

                <?php echo wp_kses_post($tab_content); ?>

            </div>

            <?php $index++; ?>

        <?php }; ?>

    </div>

</div>

<?php }; ?>