<?php
/*
Template Name Posts: Horses
*/
?>
<?php get_header(); ?>
		<div class="col1">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>		
<?php  
$donsucc = get_query_var( 'donation' );
$donreff = get_query_var( 'donReff' );
//$allowed_host = 'paypal.com';
//$host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
//if(substr($host, 0 - strlen($allowed_host)) == $allowed_host) {
// some code
if ($donsucc=='thank-you' and has_shortcode( $post->post_content, 'donation')) { ?>
<div id="thank-you-message">
	<h3><?php _e('Thank You','arsofia') ?></h3>
    <img class="aligncenter" src="https://files.arsofia.com/uploads/2015/11/thank-you-BG1.jpg" height="230px" width="">
    <p style="padding-top: 36px;"><?php _e('Thank you for making a donation. It will be wisely and carefully spent in the mission to stop the suffering of homeless animals in Sofia. Click <a href="https://arsofia.com/donate/">here</a> for more information.','arsofia') ?></p>
</div>
<script type="text/javascript">
jQuery('#thank-you-message').modal({overlayClose:true});
</script>
<?php } ?>
				<div class="blog" id="post-<?php the_ID(); ?>">
					<div id="archivebox">
					<h1><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                    </div>
                    <?php include(TEMPLATEPATH . '/includes/facebook_recommend_button.php'); // calling social buttons ?> 
        <div class="fix"></div>
					<div class="entry">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>				
				</div>
                <?php //include(TEMPLATEPATH . '/includes/facebook_like_button.php'); // calling social buttons ?>
<div class="fix"></div>
<?php //include(TEMPLATEPATH . '/single_post_nav.php'); ?>
<!--				<div id="respond">
					<?php //comments_template(); ?>
				</div>-->
		<?php endwhile; ?>	
	<?php endif; ?>							
		</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>