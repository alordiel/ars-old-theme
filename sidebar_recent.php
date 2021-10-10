 	 <?php 
  	 $RecentQuery = "posts_per_page=8";
	 ?>
     <h2><?php _e('Latest', 'arsofia'); ?></h2>
     <ul class="related-cat">
     <?php query_posts($RecentQuery);  if (have_posts()) : while (have_posts()) : the_post();?>
   <?php unset($photo);
if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
					  $c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb');
					  $photo =  $c_thumb_url[0];
					}
					else{
					$photo = catch_that_image($post->ID);
					}
					if (!$photo){
					 		$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
							}
						?>
     <li>
     <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo bfi_thumb($photo, array( 'width' => 48, 'height' => 48, 'crop_width' => '48', 'crop_height' => '48'  ) ); ?>" width="48" height="48"><?php the_title(); ?></a>
     </li>
     <?php endwhile; ?>
     <?php endif; ?>
     <?php wp_reset_query($RecentQuery); ?>	
     </ul>
