<?php
/*
Template Name: Animals
*/
?>
<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h2><?php the_title(); ?></h2>        
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		
            	
                <div id="animals-block">
                <div class="search-selection">
                    	<h3><?php _e('Search Selection:', 'arsofia'); ?> </h3>
                <?php //echo do_shortcode( '[facetwp sort="true"]' ); ?>
                		<?php //echo do_shortcode( '[facetwp selections="true"]' ); ?>
                        </div>
                	<div id="search-tools">
                     <div class="fix"></div>
                    <div class="an-box">
                    <h3><?php _e('Type:', 'arsofia'); ?></h3>
                    <?php //echo do_shortcode( '[facetwp facet="customatype"]' ); ?>
                	</div>
                	<div class="an-box">
                    <h3><?php _e('Gender:', 'arsofia'); ?></h3>
                    <?php //echo do_shortcode( '[facetwp facet="gender"]' ); ?>
                	</div>
                    <?php //if(current_user_can('manage_options')) {?>
                    <div class="an-box">
                    <h3><?php _e('Status:', 'arsofia'); ?></h3>
                    <?php //echo do_shortcode( '[facetwp facet="status"]' ); ?>
                	</div>
                    <?php //}?>
                    <div class="an-box">
                    <h3><?php _e('Size:', 'arsofia'); ?></h3>
                    <?php //echo do_shortcode( '[facetwp facet="size"]' ); ?>
                	</div>
                    <div class="an-box">
                    <h3><?php _e('Age:', 'arsofia'); ?></h3>
                    <?php //echo do_shortcode( '[facetwp sort="true"]' ); ?>
                	</div>
                </div>
                    <div class="box">
                    <h2><?php _e('Search Results', 'arsofia'); ?></h2>
                    <?php echo do_shortcode( '[facetwp template="default"]' ); ?>
                    <?php echo do_shortcode( '[facetwp pager="true"]' ); ?>
                    </div>
                </div>

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