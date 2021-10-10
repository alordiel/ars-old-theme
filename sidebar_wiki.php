<?php if (!defined('ABSPATH')) {
	exit;
} ?>
<?php global $post;
$wiki_id = $post->ID;
$term = get_the_terms($post, 'section');
$term_id = $term[0]->term_id;
?>
<?php
$wiki_args = array(
	'post_type' => 'knowledgebase',
	'tax_query' => array(
		array(
			'taxonomy' => 'section',
			'field' => 'ID',
			'terms' => $term_id,
		),
	),
	'posts_per_page' => -1,
	'post_status' => 'publish',
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'suppress_filters' => true
);

$wiki_loop = new WP_Query($wiki_args);
?>
<title>get_the_ID()get_the_ID()</title>

<ul class="related-cat wiki-sidebar-list">
	<?php unset($photo);
	if (current_theme_supports('post-thumbnails') && has_post_thumbnail()) {
		$c_thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb');
		$photo = $c_thumb_url[0];
	} else {
		$photo = catch_that_image($post->ID);
	}
	if (!$photo) {
		$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
	}
	?>
	<?php while ($wiki_loop->have_posts()) : $wiki_loop->the_post(); ?>
		<?php unset($photo);
		if (current_theme_supports('post-thumbnails') && has_post_thumbnail()) {
			$c_thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb');
			$photo = $c_thumb_url[0];
		} else {
			$photo = catch_that_image($post->ID);
		}
		if (!$photo) {
			$photo = get_bloginfo('template_directory') . '/images/no-img-thumb.jpg';
		}
		?>
		<?php if (get_the_ID() === $wiki_id): ?>
			<li class="wiki-list-item current"><h1><a class="current-hrf" href="<?php the_permalink(); ?>"
													  rel="bookmark" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a></h1></li>
		<?php else: ?>
			<li class="wiki-list-item"><a class="hrf" href="<?php the_permalink(); ?>" rel="bookmark"
										  title="<?php the_title(); ?>"><?php the_title(); ?>
				</a></h1> </li>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php wp_reset_query($wiki_loop); ?>
</ul>
