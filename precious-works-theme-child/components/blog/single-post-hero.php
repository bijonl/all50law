 <div class="single-blog-hero-container container">
    <div class="single-blog-hero-row row">
           <div class="single-blog-post-sidebar col d-none">
                <?php include locate_template('components/blog/single-post-footer.php'); ?>
            </div>
        <div class="single-blog-hero-col col-sm-7 mx-auto">
        
            <div class="post-meta-wrapper">
                <?php if (!empty($terms)) { ?>
                    <ul class="term-wrapper">
                        <?php foreach ($terms as $term) {
                            if ($term->term_id === 1) continue; ?>
                            <li class="single-term">
                                <?php echo esc_html($term->name); ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <div class="title-wrapper">
                    <h1 class="mb-0"><?php echo $title ?></h1>
                </div>
                <div class="author-wrapper">
                    <p class="mb-0"><?php echo $author_display_name ?></p>
                </div>
                
            </div>
            <div class="blog-image-wrapper">
                <?php echo $featured_image ? 
                $featured_image : 
                wp_get_attachment_image($default_blog_image, 'full', false) ?>
            </div>
        </div>
    </div>
</div>