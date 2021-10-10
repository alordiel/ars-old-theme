	<div id="video-frame">
	<div id="loader"></div>
		<div class="video-right">
		
		<h2><?php _e('RECENT VIDEOS', 'arsofia' ); ?></h2>
		<p><?php _e('Click below to view videos...', 'arsofia' ); ?></p>
		
		<?php $videocat = get_option('woo_video_category'); // ID of the Video Category ?>
		
		<?php query_posts('showposts=6&orderby=date&order=DESC&category_name=' . $videocat); ?>
	
		<?php if (have_posts()) : ?>
		
			<ul class="idTabs">
	
			<?php while (have_posts()) : the_post(); ?>	
		
				<li><a href="#video-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
			
			<?php endwhile; ?>
			
			</ul>	
		
		<?php endif; ?>
	
		</div><!--/video-right -->

	<?php if (have_posts()) : ?>
	
		<div class="video-left">

		<?php while (have_posts()) : the_post(); ?>	
	
			<div id="video-<?php the_ID(); ?>">
				<?php the_content(sprintf( __( 'Read the rest of this entry &raquo;', 'arsofia' ) )); ?>
			</div>
		
		<?php endwhile; ?>
		
		</div><!--/video-left -->
	
	<?php endif; ?>
	
	</div><!--/video-frame -->