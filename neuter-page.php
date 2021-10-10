<?php
/*
Template Name: Neuter Page
*/
?>
<?php get_header(); ?>

		<div class="col1-half">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox-page-nav">
        	
            	<?php //wp_list_pages('include=250,235,256&title_li=&sort_column=menu_order'); ?> 
                <h2><?php the_title(); ?></h2>    
		
		</div>
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<div class="entry">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>
				
				</div>

			<?php endwhile; ?>
	
		<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar('half'); ?>

<?php get_footer(); ?>