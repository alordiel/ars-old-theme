<?php
/**
 * Enable ACF 5 early access
 * Requires at least version ACF 4.4.12 to work
 */
define('ACF_EARLY_ACCESS', '5');
//

//images
add_image_size('full-left-col', 600, 800, false);
add_image_size('half-left-col', 290, 600, false);
add_filter('image_size_names_choose', 'my_custom_sizes');

function my_custom_sizes($sizes)
{
	return array_merge($sizes, array(
		'full-left-col' => __('600px Left Column'),
		'half-left-col' => __('290px Half Column'),
	));
}

//
function cptui_register_my_cpts()
{

	/**
	 * Post Type: Animals.
	 */

	$labels = array(
		"name" => __("Animals", ""),
		"singular_name" => __("Animal", ""),
	);

	$args = array(
		"label" => __("Animals", ""),
		"labels" => $labels,
		"description" => "Shelter cats and dogs.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "animal", "with_front" => true),
		"query_var" => true,
		"supports" => array("title", "custom-fields", "revisions", "thumbnail", "author", "page-attributes", "post-formats"),
	);

	register_post_type("animals", $args);

	/**
	 * Post Type: Articles.
	 */

	$labels = array(
		"name" => __("Articles", ""),
		"singular_name" => __("Article", ""),
		"menu_name" => __("Articles", ""),
		"all_items" => __("All Articles", ""),
		"add_new" => __("Add new", ""),
		"add_new_item" => __("Article", ""),
		"edit" => __("Edit", ""),
		"edit_item" => __("Edit Article", ""),
		"new_item" => __("New Article", ""),
		"view" => __("View", ""),
		"view_item" => __("View Article", ""),
		"search_items" => __("Search Article", ""),
		"not_found" => __("No Article found", ""),
		"not_found_in_trash" => __("No Article in Trash", ""),
		"parent_item_colon" => __("Parent Article", ""),
	);

	$args = array(
		"label" => __("Articles", ""),
		"labels" => $labels,
		"description" => "ARS Wiki",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "wiki", "with_front" => true),
		"query_var" => true,
		"menu_position" => 6,
		"supports" => array("title", "editor", "excerpt", "revisions", "thumbnail", "author", "page-attributes"),
	);

	register_post_type("knowledgebase", $args);
}

add_action('init', 'cptui_register_my_cpts');
function cptui_register_my_taxes()
{

	/**
	 * Taxonomy: Sections.
	 */

	$labels = array(
		"name" => __("Sections", ""),
		"singular_name" => __("Section", ""),
	);

	$args = array(
		"label" => __("Sections", ""),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Sections",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array('slug' => 'section', 'with_front' => true,),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy("section", array("knowledgebase"), $args);
}

add_action('init', 'cptui_register_my_taxes');

include_once('functions/BFI_Thumb.php');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
// Removes a class from the body_class array
add_filter('body_class', 'remove_class');
function remove_class($classes)
{
	// search the array for the class to remove
	$unset_key = array_search('blog', $classes);
	if (false !== $unset_key) {
		// unsets the class if the key exists
		unset($classes[$unset_key]);
	}

	// return the $classes array
	return $classes;
}

function add_query_vars_filter($vars)
{
	$vars[] = "donation";
	return $vars;
}

add_filter('query_vars', 'add_query_vars_filter');
function disable_wp_emojicons()
{

	// all actions related to emojis
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

	// filter to remove TinyMCE emojis
	add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}

add_action('init', 'disable_wp_emojicons');
function disable_emojicons_tinymce($plugins): array
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	}

	return array();
}

load_theme_textdomain('arsofia', TEMPLATEPATH);

add_shortcode('donation', 'fnDonatePosts');
function fnDonatePosts($attr, $content)
{
	ob_start();
	get_template_part('donationembed');
	return ob_get_clean();
}

add_shortcode('donation-horses', 'fnDonatehorses');
function fnDonatehorses($attr, $content)
{
	ob_start();
	get_template_part('donationembed_horses');
	return ob_get_clean();
}

add_action('admin_menu', 'add_global_custom_options');
function add_global_custom_options()
{
	add_dashboard_page('Rehomed/Neutered', 'Rehomed/Neutered', 'manage_options', 'rehomed-neutered', 'global_custom_options');
}

function global_custom_options()
{
	?>
	<div class="wrap">
		<h2>Counter Numbers</h2>
		<form method="post" action="options.php">
			<?php wp_nonce_field('update-options') ?>
			<p><strong>Rehomed Number:</strong><br/>
				<input type="text" name="rehomedid" size="20" value="<?php echo get_option('rehomedid'); ?>"/>
			</p>
			<p><strong>Neutered Number:</strong><br/>
				<input type="text" name="neuteredid" size="20" value="<?php echo get_option('neuteredid'); ?>"/>
			</p>
			<p><input type="submit" name="Submit" value="Save Numbers"/></p>
			<input type="hidden" name="action" value="update"/>
			<input type="hidden" name="page_options" value="rehomedid,neuteredid"/>
		</form>
	</div>
	<?php
}

//Goal Shorcode
function shortcode_goal($atts)
{
	$atts = shortcode_atts(array(
		'amount' => '000',
		'curramount' => '000',
		'textafter' => '000',
	), $atts, 'goalprogress');

	$output = "<p>";
	$output .= "<script type='text/javascript'>";
	$output .= "jQuery(document).ready(function(){";
	$output .= "jQuery('#goal-progress').goalProgress({";
	$output .= "goalAmount:" . $atts['amount'] . ",";
	$output .= "currentAmount:" . $atts['curramount'] . ",";
	$output .= "textBefore: ' ',";
	$output .= "textAfter:'" . $atts['textafter'] . "'";
	$output .= "}); });";
	$output .= "</script>";
	$output .= "<div class='goal-progress' id='goal-progress'></div>";
	$output .= "</p>";

	return $output;

}

add_shortcode('goalprogress', 'shortcode_goal');
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// This theme uses wp_nav_menu()
register_nav_menus(array(
	'primary' => __('Primary Navigation', 'arsofia'),
	'secondary' => __('Secondary Navigation', 'arsofia'),
	'ars-navigation' => __('ARS Navigation', 'arsofia'),
	'ars-navigation-бг' => __('ARS Навигация', 'arsofia')
));
function remove_head_links()
{
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}

add_action('init', 'remove_head_links');
function my_facetwp_sort_options($options, $params)
{

	$meta_query = array(
		'key' => 'an_status',
		'value' => 'Adopted',
		'compare' => '!='
	);

	$label_default = (ICL_LANGUAGE_CODE === "bg") ? 'Всички' : 'All';
	$label1 = (ICL_LANGUAGE_CODE === "bg") ? '0-6 месеца' : '0-6 months';
	$label2 = (ICL_LANGUAGE_CODE === "bg") ? '6-18 месеца' : '6-18 months';
	$label3 = (ICL_LANGUAGE_CODE === "bg") ? '1,5 - 3 години' : '1,5-3 years';
	$label4 = (ICL_LANGUAGE_CODE === "bg") ? '3-8 години' : '3-8 years';
	$label5 = (ICL_LANGUAGE_CODE === "bg") ? '9+ години' : '9+ years';

	return array(
		'default' => array(
			'label' => $label_default,
			'query_args' => array(),
		),
		'0m-6m' => array(
			'label' => $label1,
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'DESC',
				'meta_query' => array(
					array(
						'key' => 'date_of_birth',
						'value' => array(date("Y-m-d", strtotime("-6 months")), date("Y-m-d", strtotime("-0 months"))),
						'type' => 'DATE',
						'compare' => 'BETWEEN'
					),
					$meta_query
				)
			)
		),
		'6m-18m' => array(
			'label' => $label2,
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'DESC',
				'meta_query' => array(
					array(
						'key' => 'date_of_birth',
						'value' => array(date("Y-m-d", strtotime("-18 months")), date("Y-m-d", strtotime("-6 months"))),
						'type' => 'DATE',
						'compare' => 'BETWEEN'
					),
					$meta_query
				)
			)
		),
		'18m-3y' => array(
			'label' => $label3,
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'DESC',
				'meta_query' => array(
					array(
						'key' => 'date_of_birth',
						'value' => array(date("Y-m-d", strtotime("-3 years")), date("Y-m-d", strtotime("-18 months"))),
						'type' => 'DATE',
						'compare' => 'BETWEEN'
					),
					$meta_query
				)
			)
		),
		'3y-8y' => array(
			'label' => $label4,
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'DESC',
				'meta_query' => array(
					array(
						'key' => 'date_of_birth',
						'value' => array(date("Y-m-d", strtotime("-8 years")), date("Y-m-d", strtotime("-3 years"))),
						'type' => 'DATE',
						'compare' => 'BETWEEN'
					),
					$meta_query
				)
			)
		),
		'9y' => array(
			'label' => $label5,
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'DESC',
				'meta_query' => array(
					array(
						'key' => 'date_of_birth',
						'value' => array(date("Y-m-d", strtotime("-100 years")), date("Y-m-d", strtotime("-9 years"))),
						'type' => 'DATE',
						'compare' => 'BETWEEN'
					),
					$meta_query
				)
			)
		)
	);
}

add_filter('facetwp_sort_options', 'my_facetwp_sort_options', 10, 2);

function my_facetwp_sort_html($html, $params): string
{
	$html_outpur = '<select class="facetwp-sort-select">';
	foreach ($params['sort_options'] as $key => $atts) {
		$html_outpur .= '<option value="' . $key . '" >' . $atts['label'] . '</option>';
	}
	$html_outpur .= '</select>';
	return $html_outpur;
}

add_filter('facetwp_sort_html', 'my_facetwp_sort_html', 10, 2);

//manage_edit-my-post-type_sortable_column;
add_filter('manage_edit-animals_columns', 'my_extra_animals_columns');
function my_extra_animals_columns($columns)
{
	$columns['an_status'] = __('Status', 'arsofia');
	return $columns;
}

add_action('manage_animals_posts_custom_column', 'my_animals_column_content', 10, 2);
function my_animals_column_content($column_name, $post_id)
{
	if ('an_status' !== $column_name) {
		return;
	}
	//Get number of slices from post meta
	$slices = get_post_meta($post_id, 'an_status', true);
	echo $slices;
}

add_filter('manage_edit-animals_sortable_columns', 'my_sortable_animals_column');
function my_sortable_animals_column($columns)
{
	$columns['an_status'] = 'an_status';
	return $columns;
}

// fb opengraph
function wpc_fb_opengraph()
{

	global $post;

	unset($photo);

	if (has_post_thumbnail()) {

		$c_thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb');
		$photo = $c_thumb_url !== false ? $c_thumb_url[0] : false;

	} else if (!empty($post)) {

		$photo = catch_that_image($post->ID);

	}

	if (!isset($photo)) {
		$photo = 'https://arsofia.com/uploads/2013/02/thank-you-square-ENG.jpg';
	}

	$wpc_image_url = $photo;
	?>
	<meta property="fb:admins" content="1665386944"/>
	<meta property="fb:app_id" content="105722839509031">
	<?php if (is_singular()) { ?>
	<link rel="image_src" href="<?php echo $wpc_image_url; ?>"/>
	<meta property="og:image" content="<?php echo $wpc_image_url; ?>"/>
	<meta property="og:url" content="<?php echo get_permalink(get_the_ID()); ?>"/>
	<meta property="og:title" content="<?php the_title(); ?>"/>
	<meta property="og:description" content="<?php echo htmlspecialchars(strip_tags(get_the_excerpt($post->ID))); ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<?php } else { ?>
	<meta property="og:title" content="<?php wp_title('') ?>"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="https://arsofia.com/uploads/2013/02/thank-you-square-ENG.jpg"/> <?php } ?>
<?php }

add_action('wp_head', 'wpc_fb_opengraph');

if (!isset($content_width)) {
	$content_width = 600;
}

// OTHER FUNCTIONS
add_theme_support('post-thumbnails');

/**
 * This crazy function should search the post (by post ID) for and image and the first that is found will be passed as featured or whatsoever
 *
 * @param int $id
 * @return string
 */
function catch_that_image(int $id): string
{

	$post = get_post($id);

	if (empty($post)) {
		return '';
	}

	preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if (count($matches [1])) {
		$first_img = $matches [1] [0];
		$first_img_part = substr($first_img, -12);
		if (strpos($first_img_part, 'x') !== false) {
			return str_replace($first_img_part, '', $first_img) . '.jpg';
		}
	}
	return '';
}

// Thumbnails
function easy_add_thumbnail()
{

	global $post;

	$already_has_thumb = has_post_thumbnail();

	if (!$already_has_thumb) {

		$attached_image = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1");
		$category = get_the_category();

		if ($attached_image) {
			foreach ($attached_image as $attachment_id => $attachment) {
				add_post_meta($post->ID, '_thumbnail_id', $attachment_id, true);
			}
		} elseif (!empty($category) && $category[0]->term_id === 17) {
			add_post_meta($post->ID, '_thumbnail_id', 2926, true);
		} elseif (!empty($category) && $category[0]->term_id === 1093) {
			add_post_meta($post->ID, '_thumbnail_id', 23014, true);
		} else {
			add_post_meta($post->ID, '_thumbnail_id', 22952, true);
		}

	}
}

add_action('the_post', 'easy_add_thumbnail');
if (function_exists('register_sidebar')) {
	register_sidebars(3, array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div><!--/widget-->',
		'before_title' => '<h2 class="hl">',
		'after_title' => '</h2>',
	));
}

$bm_comments = [];

function split_comments($source)
{
	if ($source) {
		foreach ($source as $comment) {

			global $bm_comments;

			if ($comment->comment_type !== 'trackback' && $comment->comment_type !== 'pingback') {
				$bm_comments[] = $comment;
			}
		}
	}
}

// CDN shortcode
function slick_slider_embed($attributes): string
{

	extract(shortcode_atts([], $attributes), EXTR_OVERWRITE);


	global $post;
	$attachments = get_posts(array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => 'any',
		'post_parent' => $post->ID
	));

	$output = '<script type="text/javascript">';
	$output .= 'jQuery(document).ready(function() {';
	$output .= 'jQuery(".main-slider-' . $post->ID . '").slick({';
	$output .= 'slidesToScroll: 1,';
	//$output .='variableWidth: true,';
	$output .= 'infinite: true,';
	$output .= 'slidesToShow: 1,';
	$output .= 'dots: false,';
	$output .= 'centerMode: false,';
	$output .= 'adaptiveHeight: true,';
	$output .= 'responsive: [';
	$output .= '{';
	$output .= 'breakpoint: 1010,';
	$output .= 'settings: {';
	$output .= 'arrows: true';
	$output .= '}';
	$output .= '}';
	$output .= ']';
	$output .= '';
	$output .= '';
	$output .= '});';
	$output .= '});';
	$output .= '</script>';
	$output .= '<div class="main-slider-' . $post->ID . '">';
	if ($attachments) {
		foreach ($attachments as $attachment) {
			//echo apply_filters( 'the_title' , $attachment->post_title );
			$output .= '<div class="main-slider-image">';
			$image_attributes = wp_get_attachment_image_src($attachment->ID, 'medium');
			if ($image_attributes) :
				$output .= '<img src="' . $image_attributes[0] . '" width="' . $image_attributes[1] . '" height="' . $image_attributes[2] . '" />';
				$output .= '<div class="sickslider-desc"><p>';
				$output .= $attachment->post_excerpt;
				$output .= '</p></div>';
				$output .= '';
				$output .= '';
			endif;
			$output .= '</div>';
		}
	}

	$output .= '</div>';

	return $output;
}

add_shortcode('slickslider', 'slick_slider_embed');
function pippin_add_taxonomy_filters()
{
	global $typenow;

	// an array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array('section');

	// must set this to the post type you want the filter(s) displayed on
	if ($typenow === 'knowledgebase') {

		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if (count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Show All $tax_name</option>";
				foreach ($terms as $term) {
					echo '<option value=' . $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
				}
				echo "</select>";
			}
		}
	}
}

add_action('restrict_manage_posts', 'pippin_add_taxonomy_filters');


add_action('wp_enqueue_scripts', 'add_main_theme_styles_and_scripts');
function add_main_theme_styles_and_scripts()
{
	wp_enqueue_style(
		'general-css',
		get_template_directory_uri() . '/css/general.css',
		'',
		filemtime(TEMPLATEPATH . '/css/general.css')
	);
}
