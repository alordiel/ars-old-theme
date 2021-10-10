<div class="box" style="border-top:none">
	<div id="adopt-columns">
     <?php $post_count = 1; $frag_count = 1;?>
     <h2 style="background-color: #846344;"><?php _e('Looking for a home', 'arsofia'); ?></h2>
     <div id="fragments">
   	        <ul style="display:none">
                <li><a href="#fragment-1">1</a></li>
        		<li><a href="#fragment-2">2</a></li>
                <li><a href="#fragment-3">3</a></li>
    	   		</ul>
     <div id="fragment-1">
     <?php query_posts('cat=54&showposts=10');  if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="adopt-column">		
                        <div id="slide-image" style="float:left">
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
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=150&amp;h=100&amp;zc=1&amp;src=<?php echo $photo; ?>" alt="<?php the_title(); ?>" /></a>
                 </div>

                	
			  <?php //the_excerpt(); ?>
		</div> 
        <?php if ($post_count == 5) { $frag_count++; $post_count = 1; echo '</div><div id="fragment-' . $frag_count . '">'; } else { $post_count++; } ?>  
          		<?php endwhile; ?> 
				<?php endif; ?>
                </div>
                <?php wp_reset_query(); ?>	
                </div><!-- end fragments -->
                <div style="clear:both;"></div>
               
     </div> <!-- end columns -->
</div><!--/box-->