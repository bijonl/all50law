<li class="glide__slide">
    <div class="slide-content-wrapper">
        <div class="slider-text-wrapper">
            <div class="slide-title-wrapper">
                <h5><?php echo $slide_title ?></h5>
            </div>
            <div class="slide-subtitle-wrapper">
                <p class="mb-0"><?php echo $slide_subtitle ?></p>
            </div>
        </div>

        <div class="slide-link-wrapper background-primary">
            <a href="<?php echo $link['url'] ?>"
                target="<?php echo $link['target'] ? $link['target'] : ''?>"
                class="h6 single-slide-link">
                <?php echo $link['title'] ?>
            </a>
        </div>
       
    </div>
</li>
