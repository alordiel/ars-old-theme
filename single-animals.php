<?php get_header(); ?>
<?
global $wp_embed;

?>
<div class="colfull">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>		
		<div class="blog" id="post-<?php the_ID(); ?>">
			<?php //include(TEMPLATEPATH . '/includes/facebook_recommend_button.php'); // calling social buttons ?> 
		<div class="fix"></div>
			<div class="entry">
            <div class="ars-animal-info">
                <h1>
					<?php if (ICL_LANGUAGE_CODE == "en") the_field('animal_name_en'); elseif(ICL_LANGUAGE_CODE == "bg") the_field('animal_name_bg'); ?>
                </h1>
                <h2 class="ars-animal-dob">
                	<?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <?php the_field('animal_bd_en'); ?> 
                    <?php elseif((ICL_LANGUAGE_CODE == "bg")): ?>
                    <?php the_field('animal_bd_bg'); ?>
                    <?php endif; ?>
                </h2>
            </div>
            <div class="ars-animals-description">
            	<?php if (ICL_LANGUAGE_CODE == "en") the_field('animal_description_en'); elseif((ICL_LANGUAGE_CODE == "bg")) the_field('animal_description_bg'); ?>
            </div>
                <h3 class="">
                	<?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    Videos
                    <?php elseif((ICL_LANGUAGE_CODE == "bg")): ?>
                    Видео
                    <?php endif; ?>
                </h3>
            <?php
            // Videos
            if( have_rows('_ars_video_repeater') ): ?>
            <div class="ars-video-wrapper">
             <?php  while ( have_rows('_ars_video_repeater') ) : the_row(); ?>
            	<div class="ars-single-video">
                	<div class="ars-video-content">
                        <?php echo $post_embed = $wp_embed->run_shortcode('[embed]' . get_sub_field('_ars_video') . '[/embed]'); ?>
                    </div>
                    <div class="ars-video-desc">
                    <?php if (ICL_LANGUAGE_CODE == "en") the_sub_field('_ars_video_description_en'); else the_sub_field('_ars_video_description_bg'); ?>
                    </div>
            	</div>
              <?php endwhile; ?>
            
            <?php else: ?>
             <?php //echo 'no videos'; ?>
			 <?php endif; ?>
            </div>
                <h3 class="">
                	<?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    Gallery
                    <?php elseif((ICL_LANGUAGE_CODE == "bg")): ?>
                    Галерия
                    <?php endif; ?>
                </h3>
              <ul class="ars-animals-gallery">
            <?php  while ( have_rows('ars_gallery') ) : the_row(); ?>
            	<?php if(ICL_LANGUAGE_CODE == "en"){ 
				$ars_desc = get_sub_field('ars_image_desc_en');
				}
				elseif(ICL_LANGUAGE_CODE == "bg"){
					 $ars_desc = get_sub_field('ars_image_desc_bg');
				}
				$image_attributes = wp_get_attachment_image_src( get_sub_field('ars_image'), 'thumbnail' );
				$link_attributes = wp_get_attachment_image_src( get_sub_field('ars_image'), 'full' );
				?>
            	<li>
                  <a data-caption="<?php echo esc_html($ars_desc); ?>" class="ars-animal-image" href="<?php echo $link_attributes[0]; ?>">
                       <img width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" src="<?php echo $image_attributes[0]; ?>" alt="" />
                  </a>
                          <p>
						  <?php echo $ars_desc; ?>
                          </p>
                </li>
            <?php endwhile; ?>
              </ul>
            
			</div>				
		</div>
		<?php include(TEMPLATEPATH . '/includes/facebook_like_button.php'); // calling social buttons ?>
		<p class="posted"> <?php the_time('d F Y'); ?> | <?php the_category(', ') ?></p>
<div class="fix"></div>
<?php include(TEMPLATEPATH . '/single_post_nav.php'); ?>
<?php endwhile; ?>	
<?php endif; ?>							
</div>
<?php get_footer(); ?>