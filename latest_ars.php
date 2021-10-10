<div class="box">
 <h2><?php _e('Latest from the blog', 'arsofia'); ?> <span class="small-all"><a href="<?php echo get_option('home'); ?>items/blog" title="<?php _e('Read Blog', 'arsofia'); ?>"><?php _e('Read Blog', 'arsofia'); ?></a></span></h2>
	<?php
		$the_query = new WP_Query('cat=51&showposts=5&orderby=post_date&order=desc');
				
		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
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
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=140&amp;h=140&amp;zc=1&amp;src=<?php echo $photo; ?>" width="140" height="140" alt="<?php the_title(); ?>" /></a>
            </div>
            <div id="box-right">
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted"><?php _e('Posted on', 'arsofia' ); ?> <?php the_time('d F Y'); ?></p>
			<?php the_excerpt(); ?>
			</div>
		</div><!--/post-->
	<?php endwhile; ?>
	<?php wp_reset_query($the_query); ?>
     <h2><span class="small-all"><a href="<?php echo get_option('home'); ?>items/blog" title="<?php _e('Read Blog', 'arsofia'); ?>"><?php _e('Read Blog', 'arsofia'); ?></a></span></h2>
	<div class="fix"></div>
	
</div><!--/box-->