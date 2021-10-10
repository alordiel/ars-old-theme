<?php
/*
Template Name: Page Donate Resting
*/
?>
<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/includes/donate-shelter-test.php'); ?>
<div class="fix"></div>
<div class="col1-half">
		<?php if (have_posts()) : ?>
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