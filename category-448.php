<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
		
        		<?php if (is_category()) { ?>
        	
            	<h2><?php echo single_cat_title(); ?></h2>        
            	
				<?php } elseif (is_day()) { ?>
				<h2>Archive | <?php the_time('F jS, Y'); ?></h2>

				<?php } elseif (is_month()) { ?>
				<h2>Archive | <?php the_time('F, Y'); ?></h2>

				<?php } elseif (is_year()) { ?>
				<h2>Archive | <?php the_time('Y'); ?></h2>
				
				<?php } ?>
		
		</div><!--/archivebox-->
        <div class="cat-desc"><?php echo category_description(448); ?></div>
         <div class="fix"></div>
	<?php query_posts($query_string); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
					<h2><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div>
                	 <div class="fix"></div>	
					<div class="entry">
						<?php the_content(__('Continue Reading', 'arsofia')); ?>
					</div>				
				</div><!--/post-->

		<?php endwhile; ?>
				<div class="navigation"><?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="floatleft"><?php next_posts_link( __('&laquo; Older Entries', '') ); ?></div>
					<div class="floatright"><?php previous_posts_link( __('Newer Entries &raquo;', '') ); ?></div>
			
			
				
			
				<?php } ?>
			
				</div>	
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>