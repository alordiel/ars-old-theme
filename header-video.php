<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language'); ?>" xmlns:fb="https://www.facebook.com/2008/fbml">
<head profile="https://gmpg.org/xfn/11">
<meta property="fb:admins" content="1665386944"/>
<meta property="fb:app_id" content="105722839509031">
    <title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Search Results', 'arsofia' ); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Tag Archive&nbsp;|&nbsp;', 'arsofia' ); ?><?php  single_tag_title("", true); } } ?>
    </title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="shortcut icon" href="../arsofiav4 - Copy/favicon.ico" >
	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://arsofia.com/xmlrpc.php?rsd" />
	<?php wp_head(); ?>
<script src="https://arsofia.com/wp-content/plugins/contact-form-7/scripts.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/player/flowplayer-3.2.11.min.js"></script>
    <script type="text/javascript">
		jQuery(function() {

			var $tabs = jQuery('#fragments').tabs();
	
			jQuery(".ui-tabs-panel").each(function(i){
	
			  var totalSize = jQuery(".ui-tabs-panel").size() - 1;
	
			  if (i != totalSize) {
			      next = i + 2;
		   		  jQuery(this).append("<a href='#' class='next-tab mover' rel='" + next + "'></a>");
			  }
	  
			  if (i != 0) {
			      prev = i;
		   		  jQuery(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'></a>");
			  }
   		
			});
	
			jQuery('.next-tab, .prev-tab').click(function() { 
		           $tabs.tabs('select', jQuery(this).attr("rel"));
		           return false;
		       });
       

		});
    </script>
	<!--[if lte IE 6]>
	<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/pngfix.js"></script>
	<![endif]-->
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery-ui-1.7.custom.min.js"></script>
<script type="text/javascript">
	jQuery(function() {
		jQuery("#fragments").tabs();
	});
	jQuery(document).ready(function() {
  jQuery("#search-label").click(function()
  {
    jQuery("#nav-right").toggle();
  });
});
</script>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/wp-includes/js/jquery/jquery.validate.pack.js"></script>  
<script type="text/javascript" src="https://arsofia.com/wp-includes/js/jquery/jquery.form.js" ></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/tabs.js"></script>			
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery.cookie.js"></script>	
	<?php include(TEMPLATEPATH . '/includes/stylesheet.php'); ?>
</head>

<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '105722839509031', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<?php
	$template_path = get_bloginfo('template_directory');
	$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.jpg';
?>

<div id="page">
	
	<div id="nav"> <!-- START TOP NAVIGATION BAR -->
	
		<div id="access">
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!--/nav-left -->

		
	<div id="search-label">
    <a href="#"><?php _e('Search', 'arsofia' ); ?></a>
    </div>	
	</div><!--/nav-->
	
	<div id="header"><!-- START LOGO LEVEL WITH RSS FEED -->
	<div id="nav-right">	
        <?php ?>	
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				
				<div id="search">
					<input type="text" value="<?php _e('Search here...', 'arsofia' ); ?>" onclick="this.value='';" name="s" id="s" />
					<input name="" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/styles/<?php echo "$style_path"; ?>/ico-go.png" value="Go" class="btn"  />
				</div><!--/search -->
				
			</form>
		
		</div><!--/nav-right -->
        <?php
		$rehomed_id = 20646;
		$post_rehomed_id = get_post($rehomed_id); 
		$rehomed_value = $post_rehomed_id->post_content;
		$neutered_id = 20648;
		$post_neutered_id = get_post($neutered_id); 
		$neutered_value = $post_neutered_id->post_content;
		?> 
        <h1><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"></a></h1>
            <div id="counters">
            <span id="counter_rehomed"><?php echo $rehomed_value; ?> <?php _e('Rehomed', 'arsofia' ); ?></span>
            <span id="counter_neutered"><?php echo $neutered_value; ?> <?php _e('Neutered', 'arsofia' ); ?></span>
            </div>
	</div><!--/header -->
    <div id="secondary_navigation">
    <?php wp_nav_menu( array( 'container_class' => 'secondary-menu-header', 'theme_location' => 'secondary' ) ); ?>
    </div>
    <div class="fix"></div>	
	<?php include(TEMPLATEPATH . '/includes/front-navigation.php'); ?>
	<div id="columns"><!-- START MAIN CONTENT COLUMNS -->