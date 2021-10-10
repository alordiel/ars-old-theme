<div class="box">

	<?php
		include(TEMPLATEPATH . '/includes/version.php');
		
		//$the_query = new WP_Query('cat=-'. $ex_feat . ',-' . $ex_vid . '&showposts=' . $showposts . '&orderby=post_date&order=desc');
		$the_query = new WP_Query('cat=5&showposts=6&orderby=post_date&order=desc');
		
		$counter = 0; $counter2 = 0;
				
		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
	?>
	
		<?php $counter++; $counter2++; ?>
				
		<div class="post <?php if ($counter == 1) { echo 'fl'; } else { echo 'fr'; $counter = 0; } ?>">
		
			<?php if ( get_post_meta($post->ID, 'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
				
				<img width="100" height="57" src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=57&amp;w=100&amp;zc=1&amp;q=95" alt="" class="th" />			
				
			<?php } else { ?> <!-- DISPLAY THE DEFAULT IMAGE, IF CUSTOM FIELD HAS NOT BEEN COMPLETED -->
				
				<img src="<?php bloginfo('template_directory'); ?>/images/no-img-thumb.jpg" alt="" class="th" />
				
			<?php } ?> 
		
			<h2><?php the_category(', ') ?></h2>
			<h3><a title="<?php _e('Permanent Link to', 'arsofia' ); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted"><?php _e('Posted on', 'arsofia' ); ?> <?php the_time('d F Y'); ?></p>
			<p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?> <span class="continue"><a title="<?php _e('Permanent Link to', 'arsofia' ); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>"><?php _e('Continue Reading', 'arsofia' ); ?></a></span></p>
			
		</div><!--/post-->
		
		<?php if ( !($counter2 == 6) && ($counter == 0) ) { echo '<div style="clear:both;"></div> '; ?> <?php } ?>
	
	<?php endwhile; ?>
	
	<div class="fix" style="height:20px"></div>
	
</div><!--/box-->