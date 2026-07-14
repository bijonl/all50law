<?php include(locate_template('blocks/partials/global-block-variables.php')); 
$recent_posts = get_field('posts'); 
$post_format = get_field('post_format') ? get_field('post_format') : 'regular' ; 
$is_regular = $post_format === 'regular'; 
$is_slider = $post_format === 'slider'; 
$is_featured = $post_format === 'featured'; 
$is_listing = $post_format === 'listing'; 
$post_list_title = get_field('post_list_title'); 




if(empty($recent_posts)) {
    $posts_args = array(
        'post_type' => 'post', 
        'fields' => 'ids', 
        'posts_per_page' => 3, 
    ); 
    $recent_posts_query = new WP_Query($posts_args); 
    $recent_posts = $recent_posts_query->posts; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php if($has_title_area) { 
        include(locate_template('blocks/partials/title-area.php'));
    } ?>
    <?php if($recent_posts) { ?>
        <?php if($is_regular) { ?>
            <div class="recent-posts-container container">
                <div class="recent-posts-row row">
                    <?php foreach($recent_posts as $id) { ?>
                        <div class="recent-posts-col col-sm-4">
                            <?php include __DIR__ . '/partials/single-post.php'; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

        <?php } elseif($is_slider) { ?>
            <div class="recent-posts-container container">
                <div class="recent-posts-row row">
                    <?php include __DIR__ . '/partials/post-slider.php'; ?>
                </div>
            </div>
        <?php } elseif($is_featured) { ?>
            <div class="recent-posts-container container <?php echo $post_format ?>">
                <div class="recent-posts-row row">
                    <?php include __DIR__ . '/partials/featured-posts.php'; ?>
                </div>
            </div>

        <?php } elseif($is_listing) { ?>
            <div class="recent-posts-container container <?php echo $post_format ?>">
                <div class="recent-posts-row row">
                    <?php if($post_list_title) { ?>
                        <div class="post-list-title">
                            <h4><?php echo $post_list_title ?></h6>
                        </div>

                    <?php } ?>
                     <?php foreach($recent_posts as $id) { ?>
                    <?php include __DIR__ . '/partials/post-listing.php'; ?>
                    <? } ?>
                </div>
            </div>
        <?php } ?>

      
    <?php } ?>
  
</section>