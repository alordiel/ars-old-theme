<div id="rehomed">
<?php
$args = array(
	'posts_per_page'	=> 1,
	'post_type'		=> 'post',
	'meta_key'		=> 'show_banner',
	'meta_value'	=> 'Yes',
	'suppress_filters' => 0
);
$fposts = get_posts( $args );
foreach ( $fposts as $post ) :
setup_postdata( $post ); ?>
<?php if ( get_post_meta( $post->ID, 'show_banner', true ) ) : ?>
<h2 class="cry-for-help"><span><?php echo get_post_meta( $post->ID, '_focus_banner_title', true ) ?></span></h2>
    <div id="onfocus">
    <?php unset($photo);
if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
					  $c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					  $photo =  $c_thumb_url[0];
					}
					else{
					$photo = catch_that_image($post->ID);
					}
					if (!$photo){
					 		$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
							}
            ?>
    	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumb.php?w=600&amp;h=370&amp;zc=1&amp;src=<?php echo $photo; ?>" width="600" height="370" alt="<?php the_title(); ?>" /></a>
        <div id="onfocus-title">
            <span>
                <h2>
                <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                <span></span>
                </h2>
            </span>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; 
wp_reset_postdata(); ?>
</div>