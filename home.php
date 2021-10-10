<?php get_header(); ?>
	<div class="col1">
		<?php if (ICL_LANGUAGE_CODE === 'bg') include(TEMPLATEPATH . '/includes/homepage-banner.php'); ?>
		<?php include(TEMPLATEPATH . '/includes/welcome-message.php'); ?>
		<?php include(TEMPLATEPATH . '/includes/facebook_page_box.php'); ?>
	</div>
	<!--/col1-->
	<?php get_sidebar(); ?>
	<div class="fix"></div>
	<div class="latest-feed colfull">
		<h2 class="latest-title"><?php _e('Latest', 'arsofia'); ?></h2>
		<div class="latest-articles-home">
			<?php
			include(TEMPLATEPATH . '/includes/latest_blog_sidebar.php');
			?>
		</div>
	</div>
	<div class="fix"></div>
<?php get_footer(); ?>