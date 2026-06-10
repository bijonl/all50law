<?php
$video_uid = 'video-modal-' . $block['id'];

if ( 'url' === $button_url_type ) {

    $link = get_field( 'practice_hero_button_link', 'options' );

    if ( ! empty( $link ) ) {

        $url    = $link['url'] ?? '';
        $title  = ! empty( $practice_hero_button_text ) ? $practice_hero_button_text : ( $link['title'] ?? '' );
        $target = ! empty( $link['target'] ) ? $link['target'] : '_self';

        if ( ! empty( $url ) && ! empty( $title ) ) {
            ?>
            <a
                class="link-wrapper"
                href="<?php echo esc_url( $url ); ?>"
                target="<?php echo esc_attr( $target ); ?>"
                <?php
                if ( '_blank' === $target ) {
                    echo 'rel="noopener noreferrer"';
                }
                ?>
            >
                <?php echo esc_html( $title ); ?>
            </a>
            <?php
        }
    }

} elseif ( 'video-modal' === $button_url_type ) {

    if ( ! empty( $video_modal_iframe ) && ! empty( $practice_hero_button_text ) ) {
        ?>

        <button
            type="button"
            class="link-wrapper btn btn-link border-0 d-flex align-items-center background-transparent"
            data-bs-toggle="modal"
            data-bs-target="#video-<?php echo esc_attr( $video_uid ); ?>"
            aria-haspopup="dialog"
            aria-controls="video-<?php echo esc_attr( $video_uid ); ?>"
        >
            <?php echo esc_html( $practice_hero_button_text ); ?>
                <span class="ms-2" aria-hidden="true">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="18"
                        viewBox="0 0 16 18"
                        fill="none"
                        focusable="false"
                    >
                        <path
                            d="M0 0V18L16 9L0 0Z"
                            fill="currentColor"
                        />
                    </svg>
                </span>
        </button>
        <?php $video_embed_url = $video_modal_iframe ?>
        <?php include(locate_template('blocks/video-list/partials/video-modal-content.php')); ?>


        <?php
    }
}
?>