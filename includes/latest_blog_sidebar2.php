<div class="box">
<?php
	$post_count = 0;
	$posts_per_page = 7;
	//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array( 
	'suppress_filters' => 0, 
	'posts_per_page' => $posts_per_page,
	'meta_key' => 'show_banner',
	'meta_value' => 'No',
	'post_status' => 'publish', 
	/*'paged'=>$paged */
	);
	
	$firspost = get_posts( $args );
	//$count = count($posts);
	//$the_query = new WP_Query('showposts=' . $posts_per_page . '&orderby=post_date&order=desc&suppress_filters=0&meta_key=_show_banner&meta_value=0&post_status=publish&paged=' . $paged . '');
	//$the_query = new WP_Query($args);
	//while ($the_query->have_posts()) : $the_query->the_post();
	foreach ( $firspost as $post ) :
	setup_postdata( $post );
	$post_count++;
	?>
    <?php if ($post_count==3 and function_exists('dynamic_sidebar') && dynamic_sidebar(3)) : ?>
    <div class="fix"></div>
    <?php endif; ?>
    <?php if ($post_count==5 and function_exists('dynamic_sidebar') && dynamic_sidebar(2)) : ?>
    <div class="fix"></div>
    <?php endif; ?> 
		<div class="post<?php if ($post_count==1 or $post_count==3 or $post_count==5 or $post_count==8) {echo ' alignleft';} if ($post_count==7 or $post_count==10) {echo ' alignright';} if ($post_count==2 or $post_count==4 or $post_count==6 or $post_count==9) {echo ' aligncenter floatleft';}?>">
			<div id="post-img">
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
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=280&amp;h=260&amp;zc=1&amp;src=<?php echo $photo; ?>" width="280" height="260" alt="<?php the_title(); ?>" /></a>
            </div>
            <div id="box-right">
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted"><?php _e('Posted on', 'arsofia' ); ?> <?php the_time('d M Y'); ?> | <?php the_category(', ') ?></p>
			</div>
		</div><!--/post-->
        <?php if ($post_count==7 or $post_count==10) {echo '<div class="fix"></div>';} ?>
	<?php //endwhile; wp_reset_query($the_query); 
	endforeach; wp_reset_postdata(); ?>
	<div class="fix"></div>
    
</div><!--/box-->
<div class="box">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
echo $paged;
$post_count = 0;
$args2 = array( 
	'suppress_filters' => 0, 
	'posts_per_page' => 3,
	'meta_key' => 'show_banner',
	'meta_value' => 'No',
	'post_status' => 'publish', 
	'paged'=>$paged,
	'offset' => 7
	);

$the_query2 = new WP_Query($args2);
while ($the_query2->have_posts()) : $the_query2->the_post();
$post_count++; ?>
<div class="post<?php if ($post_count==1 or $post_count==4) {echo ' alignleft';} if ($post_count==3 or $post_count==6) {echo ' alignright';} if ($post_count==2 or $post_count==5) {echo ' aligncenter floatleft';}?>">
			<div id="post-img">
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
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=280&amp;h=260&amp;zc=1&amp;src=<?php echo $photo; ?>" width="280" height="260" alt="<?php the_title(); ?>" /></a>
            </div>
            <div id="box-right">
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted"><?php _e('Posted on', 'arsofia' ); ?> <?php the_time('d M Y'); ?> | <?php the_category(', ') ?></p>
			</div>
		</div><!--/post-->
        <?php if ($post_count==3 or $post_count==6) {echo '<div class="fix"></div>';} ?>

<?php endwhile; wp_reset_query(); ?>
<div class="fix"></div>

</div><!--/box-->