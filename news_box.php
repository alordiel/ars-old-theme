<div class="news-box">
	<div id="left-box" class="fl" style="padding:0">
 <h2><a href="<?php echo get_option('home'); ?><?php _e('items/the-farm-newsflash', 'arsofia'); ?>" title="<?php _e('All news from The Farm', 'arsofia'); ?>"><?php _e('The Farm Newsflash', 'arsofia'); ?></a></h2>
	<?php
		include(TEMPLATEPATH . '/includes/version.php');
		
		$the_query = new WP_Query('cat=27&showposts=6&orderby=post_date&order=desc');	
		while ($the_query->have_posts()) : $the_query->the_post();
	?>		
		<div class="post">
			<div id="post-img">
            <?php unset($photo);
					if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
					  $c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb');
					  $photo =  $c_thumb_url[0];
					}
					else{
					$photo = catch_that_image($post->ID);
					}
					if (!$photo){
					 		$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
							}
            ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><figure><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=100&amp;h=100&amp;zc=1&amp;src=<?php echo $photo; ?>" alt="<?php the_title(); ?>" /></figure></a>
            </div>
            <div id="news-box-right">
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted" style="float:left"><?php the_time('d F Y'); ?></p>
			</div>
		</div><!--/post-->
	<?php endwhile; ?>
	<?php wp_reset_query($the_query); ?>
	<div class="fix" style="height:20px"></div>
</div>
	<div id="right-box" class="fr" style="padding:0">
     <h2><a href="<?php echo get_option('home'); ?>items/news" title="<?php _e('All news', 'arsofia'); ?>"><?php _e('News', 'arsofia'); ?></a></h2>
	<?php
		include(TEMPLATEPATH . '/includes/version.php');
		$the_query = new WP_Query('cat=5&showposts=6&orderby=post_date&order=desc');
		while ($the_query->have_posts()) : $the_query->the_post();

	?>		
		<div class="post">
			<div id="post-img">
            <?php unset($photo);
					if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
					  $c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb');
					  $photo =  $c_thumb_url[0];
					}
					else{
					$photo = catch_that_image($post->ID);
					}
					if (!$photo){
					 		$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
							}
            ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><figure><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=100&amp;h=100&amp;zc=1&amp;src=<?php echo $photo; ?>" /></figure></a>
            </div>
            <div id="news-box-right">
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted" style="float:left"><?php the_time('d F Y'); ?></p>
			</div>
		</div><!--/post-->
	<?php endwhile; ?>
	<?php wp_reset_query($the_query); ?>
	<div class="fix" style="height:20px"></div>
    </div>	
</div><!--/box-->