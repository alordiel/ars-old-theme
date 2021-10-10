<div id="nav-below" class="article-navigation">
    <div class="nav-previous">
    <?php
    $prev_post = get_previous_post(true);
   	unset($photo);
	if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() && is_object($prev_post)) {
    	$c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($prev_post->ID), 'related-post-thumb');
    	$photo =  $c_thumb_url[0];
	}
    if (!empty( $prev_post )): ?>
      <a href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="<?php echo $photo; ?>" class="screenshot"><?php echo $prev_post->post_title; ?></a>
    <?php endif; ?>
    </div>   
    <div class="nav-next">
    <?php
    $next_post = get_next_post(true);
	unset($photo);
	if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() && is_object($prev_post) && property_exists($next_post, 'ID')) {
    	$c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'related-post-thumb');
    	$photo =  $c_thumb_url[0];
	}
    if (!empty( $next_post )): ?>
      <a href="<?php echo get_permalink( $next_post->ID ); ?>" rel="<?php echo $photo; ?>" class="screenshot"><?php echo $next_post->post_title; ?></a>
    <?php endif; ?>
    </div>
</div>