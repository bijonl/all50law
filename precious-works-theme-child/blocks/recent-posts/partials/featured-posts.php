<?php $count = 1; ?>
<div class="blog-featured-wrapper">
<?php foreach($recent_posts as $id) { ?>
    <?php if($count === 1) { ?>
        <div class="main-featured h-100">
        <?php include __DIR__ . '/single-post.php'; ?>
        </div>
    <?php 
    } ?>

    <?php if($count === 2) { ?>
        <div class="secondary-featured">
    <?php 
    } ?>

    <?php if($count !== 1) { ?>
        <?php include __DIR__ . '/single-post.php'; ?>
    <?php 
    } ?>
    <?php if($count === 3) { ?>
        </div>
    <?php 
    } ?>
    <?php $count++ ?>
<?php } ?>
</div>