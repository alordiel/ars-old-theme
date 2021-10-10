<?php
/*
Template Name: Donate Page Pictures
*/
?>
<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox-page-nav">
        	
            	<ul class="archivebox-nav"><?php wp_list_pages('include=235,256,250&title_li=&sort_column=menu_order'); ?></ul>  
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<div class="entry">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>
				
				</div><!--/post-->

			<?php endwhile; ?>
	
		<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>