<?php
/*
Template Name: Wiki Page
*/
global $post;
?>
<?php get_header(); ?>

		<div class="colfull">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h2><?php the_title(); ?></h2> 
                 <?php
				 get_template_part( 'facebook_like_button_wiki');
				 ?>      
                <div class="fix"></div>	
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<div class="entry-wide col1 entry-wiki">
                    <?php 
					$content_post = get_post(56800);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					//echo $content;
					?>
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>
                    <?php get_sidebar('wiki'); ?>
				
				</div><!--/post-->

			<?php endwhile; ?>
	
		<?php endif; ?>
         <?php //if (function_exists('dynamic_sidebar') && dynamic_sidebar('pakb-main') ) : ?><?php //endif; ?>		
                <?php get_template_part( 'facebook_like_button_wiki'); ?>	    
		</div><!--/col1-->

<?php get_footer(); ?>