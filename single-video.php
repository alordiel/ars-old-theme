<?php
/*
Template Name Posts: Video Embed
*/
?>
<?php get_header(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/player/jwplayer.js"></script>
		<div class="col1">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
					<div id="archivebox">
					<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<p class="posted"><?php _e('Posted on', 'arsofia' ); ?> <?php the_time('d F Y'); ?> в <?php the_category(', ') ?> <?php edit_post_link( __('Edit'), ' | ', ''); ?></p>
                    </div>
		<span style="float:left;padding-bottom:0; padding-left:6px; padding-top:8px;"><fb:like layout="button_count" show_faces="true" width="100" font="trebuchet ms" action="recommend" send="true"></fb:like></span>
        <span style=" float:right;padding-bottom:0; padding-left:6px; padding-top:8px;"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="AnimalRescueSF">Tweet</a><script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script></span>
        <div class="fix"></div>
					<div class="entry">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
        
					</div>
				
				</div><!--/post-->
                <p style="padding-bottom:0; padding-left:6px; padding-top:8px; float:left;"><fb:like show_faces="false" action="recommend" width="400" height="80" font="arial"></fb:like></p>
<div class="fix"></div> 
				<div id="respond">
					<?php comments_template(); ?>
				</div>

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>		
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>