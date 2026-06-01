<?php
    $per_view = 3;
    $bullet_count = ceil(count($recent_posts) / $per_view);
?>

<div class="recent-posts-glide glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
        <?php foreach($recent_posts as $id) { ?>
            <li class="recent-posts-col glide__slide col-sm-4">
                <?php include __DIR__ . '/single-post.php'; ?>
            </li>
        <?php } ?>
    </ul>
  </div>
    <div class="glide__bullets" data-glide-el="controls[nav]">
        <?php for ($i = 0; $i < $bullet_count; $i++) { ?>
            <button
                class="glide__bullet"
                data-glide-dir="=<?php echo $i * $per_view; ?>"
                aria-label="Go to slide group <?php echo $i + 1; ?>">
            </button>
        <?php }; ?>
    </div>
</div>