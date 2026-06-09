<?php
if ( ! empty( $address_note ) ) {
    ?>
    <div class="address-note-wrapper disclaimer-text wysiwyg">
        <?php echo wp_kses_post( $address_note ); ?>
    </div>
    <?php
}
?>