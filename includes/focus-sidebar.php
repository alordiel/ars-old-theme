<?php
	//if (is_home()) {
	//$posts_per_page = 2;
	//$offset=1;
	//}
	$args = array(
	'posts_per_page'	=> 1,
	'post_type'		=> 'post',
	'meta_key'		=> 'show_banner',
	'meta_value'	=> 'Yes',
	'suppress_filters' => 0,
	'post_status' => 'publish',
	'orderby'          => 'date',
	'order'            => 'DESC',
);
	$fposts = get_posts( $args );
	foreach ( $fposts as $post ) :
	setup_postdata( $post ); 
	$img_id = get_post_meta( $post->ID, '-banner_image', true );
	$img_url = $img_id != '' ? wp_get_attachment_url( $img_id ) : 'https://files.arsofia.com/uploads/2020/11/ARS_2021-01-555x800.jpg';
	?>
  <?php if ( get_post_meta( $post->ID, 'show_banner', true ) ) : ?>
    <div class="activities_widget" style="margin-bottom:24px">
        <h2 class="cry-for-help"><span><?php echo get_post_meta( $post->ID, '_focus_banner_title', true ) ?></span></h2>
        <div class="widget">
            <a href="<?php the_permalink(); ?>" rel="bookmark" class="widget_sp_image-image-link" title="<?php the_title(); ?>">
                <img width="310" class="" src="<?php echo $img_url; ?>" />
            </a>
        </div>
          </div>
        <?php endif; ?>
            <?php endforeach; 
wp_reset_postdata(); ?>
<?php //echo do_shortcode( '[olimometer id=5]' ); ?>