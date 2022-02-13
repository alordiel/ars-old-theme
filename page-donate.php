<?php
/*
Template Name: Page Donate
*/
?>
<?php get_header(); ?>
	<div class="col1">
		<div class="fix"></div>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $donsucc = get_query_var( 'donation' );
			if ( $donsucc === 'thank-you' ) { ?>
				<div id="thank-you-message">
					<h3><?php _e( 'Thank You', 'arsofia' ) ?></h3>
					<img class="aligncenter" src="https://arsofia.com/wp-content/uploads/2015/11/thank-you-BG1.jpg"
						 height="230px" width="">
					<p style="padding-top: 36px;"><?php _e( 'Thank you for making a donation. It will be wisely and carefully spent in the mission to stop the suffering of homeless animals in Sofia.', 'arsofia' ) ?></p>
				</div>
				<script type="text/javascript">
					jQuery('#thank-you-message').modal({overlayClose: true});
				</script>
			<?php } ?>
				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
					<div class="entry">
						<?php the_content( '<span class="continue">Continue Reading</span>' ); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
