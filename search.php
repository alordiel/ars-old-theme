<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h2><em><?php _e('Search Results', 'arsofia' ); ?>: </em> "<?php printf(__('\'%s\''), $s) ?>"</h2>        
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
                
					
					<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    					<p class="posted" style="width:100%;margin-top:8px;margin-bottom:12px;"><?php the_time('d F Y'); ?></p>
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
		
					<div class="entry" style="float:right;width:72%;">
						<?php the_excerpt('<span class="continue">Continue Reading</span>'); ?> 
					</div>
                    <div class="fix"></div>
				
				</div><!--/post-->

		<?php endwhile; ?>
		
		<div class="navigation">
		
			<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
			
				<div class="floatleft"><?php next_posts_link( __('&laquo; Older Entries', '') ); ?></div>
				<div class="floatright"><?php previous_posts_link( __('Newer Entries &raquo;', '') ); ?></div>
			
			<?php } ?>
			
		</div>	
		
		<?php else : ?>

		<div id="archivebox">
        	
            	<h2><em>Search Results |</em> None Found!</h2>
            	<div class="archivefeed">Sorry! Your search yielded no results. Please search again.</div>				
		
		</div><!--/archivebox-->				
	<?php endif; ?>							

		</div><!--/col1-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>	
