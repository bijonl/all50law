<!-- Modal -->
<div
    class="single-video-modal-wrapper modal fade"
    id="video-<?php echo $video_uid; ?>"
    tabindex="-1"
    aria-labelledby="modal-title-<?php echo $video_uid; ?>"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <h2
                id="modal-title-<?php echo $video_uid; ?>"
                class="visually-hidden">
                <?php echo esc_html($display_title); ?>
            </h2>

            <div class="close-button-wrapper d-flex justify-content-end mt-3 me-3">

                <button
                    type="button"
                    class="close-button border-0 bg-transparent"
                    data-bs-dismiss="modal"
                    aria-label="Close video">

                    <i class="fa-solid fa-x" aria-hidden="true"></i>

                </button>

            </div>

            <div class="modal-body">
                <?php echo $video_embed_url; ?>
            </div>
        </div>
    </div>
</div>