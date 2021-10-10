<?php get_header(); ?>
	
	<?php include(TEMPLATEPATH . '/includes/front-navigation.php'); ?>
		<div class="col1">
			<?php include(TEMPLATEPATH . '/includes/welcome-message.php'); ?>
			<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

			<?php
				
				//$showvideo = get_option('woo_show_video');

				//if($showvideo){ include(TEMPLATEPATH . '/includes/video.php'); }
				 include(TEMPLATEPATH . '/includes/video_ex.php');
			?>

			<?php
				
				$layout = get_option('woo_layout');

				include('../arsofiav5/layouts'.$layout);
				
			?>

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>