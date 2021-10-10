<?php
/*
Template Name: Wide Page
*/
?>
<?php get_header(); ?>

		<div class="colfull">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h2><?php the_title(); ?></h2>
                <div class="shelter-nav">
                <div class="box-b-link-recent">
     <a class="post-title rightarrow" href="<?php the_permalink() ?>#dream-farm"><?php _e('An ARS Shelter','arsofia') ?></a>
     |
     <a class="post-title rightarrow" href="<?php the_permalink() ?>#donate-shelter"><?php _e('Donate Today','arsofia') ?></a>
     |
     <a class="post-title rightarrow" href="<?php the_permalink() ?>#faq-shelter"><?php _e('Frequently Asked Questions','arsofia') ?></a>
     |
     <a class="post-title rightarrow" href="<?php the_permalink() ?>#ashelter"><?php _e('Our Donors','arsofia') ?></a>
     |
     <img src="https://arsofia.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.png"/>
     <a class="post-title rightarrow" href="https://arsofia.com/tierheim/" target="_blank"><?php _e('Read in German','arsofia') ?></a>
     </div>
                </div> 
                 <?php include(TEMPLATEPATH . '/includes/facebook_recommend_shelter.php'); // calling social buttons ?>      
                <div class="fix"></div>	
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<div class="entry-wide">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>
				
				</div><!--/post-->

			<?php endwhile; ?>
	
		<?php endif; ?>			
<div class="box-b-link-recent" style="text-align: center;font-size: 20px;">
     <a class="post-title rightarrow" href="<?php the_permalink() ?>#page"><?php _e('Scroll to top','arsofia') ?></a>
                </div>
                <?php include(TEMPLATEPATH . '/includes/facebook_recommend_shelter.php'); // calling social buttons ?>	    
		</div><!--/col1-->

<?php get_footer(); ?>