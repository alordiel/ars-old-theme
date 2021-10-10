<div class="box ajaxloadposts">
<?php
	$post_count = 0;
	$posts_per_page = 12;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array( 
	'suppress_filters' => 0, 
	'posts_per_page' => $posts_per_page,
	//'meta_key' => 'show_banner',
	//'meta_value' => 'No',
	'post_status' => 'publish', 
	'paged'=>$paged
	);	
	$firspost = get_posts( $args );
	foreach ( $firspost as $post ) :
	setup_postdata( $post );
	$post_count++;
	?>
		<div class="post<?php if ($post_count==1 or $post_count==4 or $post_count==7 or $post_count==10) {echo ' alignleft';} if ($post_count==3 or $post_count==6 or $post_count==9 or $post_count==12) {echo ' alignright';} if ($post_count==2 or $post_count==5 or $post_count==8 or $post_count==11) {echo ' aligncenter floatleft';}?>">
			<div id="post-img">
         <?php unset($photo);
if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
					  $c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					  $photo =  $c_thumb_url[0];
					}
					else{
					$c_thumb_url = wp_get_attachment_image_src(catch_that_image($post->ID), 'full');
					$photo =  $c_thumb_url[0];
					}
					if (!$photo){
					 		$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
							}
            ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><figure><img src="<?php echo bfi_thumb($photo, array( 'width' => 280, 'height' => 260, 'crop_width' => '280', 'crop_height' => '260'  ) ); ?>" width="280" height="260" alt="<?php the_title(); ?>" /></figure></a>
            </div>
            <div id="box-right">
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<!--<p class="posted"><?php //_e('Posted on', 'arsofia' ); ?> <?php //the_time('d M Y'); ?> | <?php //the_category(', ') ?></p>-->
			</div>
		</div><!--/post-->
        <?php if ($post_count==3 or $post_count==6 or $post_count==9 or $post_count==12) {echo '<div class="fix"></div>';} ?>
	<?php //endwhile; wp_reset_query($the_query); 
	endforeach; wp_reset_postdata(); ?>
            			<div class="navigation">
			<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
            <div class=""><?php next_posts_link( __('&laquo; Older Entries', '') ); ?></div>
            <div class=""><?php previous_posts_link( __('Newer Entries &raquo;', '') ); ?></div>
            <?php } ?>
            </div>
</div><!--/box-->