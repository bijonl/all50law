<?php $video_title = get_field('video_title', $video_id);
$video_subtitle = get_field('video_subtitle', $video_id);
$video_url = get_field('video_url', $video_id);
$video_image = get_post_thumbnail_id($video_id, 'full'); 
$video_embed_url = get_field('video_embed_url', $video_id);
?>