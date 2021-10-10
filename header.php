<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language'); ?>" xmlns:fb="https://www.facebook.com/2008/fbml">
<head profile="https://gmpg.org/xfn/11">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="https://arsofia.com/favicon.ico" >
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_option('home'); ?>touch-icon-iphone-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_option('home'); ?>touch-icon-iphone-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_option('home'); ?>touch-icon-ipad-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_option('home'); ?>touch-icon-ipad-144.png" />
    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_option('home'); ?>touch-icon-iphone-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_option('home'); ?>touch-icon-iphone-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_option('home'); ?>touch-icon-ipad-144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_option('home'); ?>touch-icon-ipad-144.png" />
	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link href='https://fonts.googleapis.com/css?family=Cuprum:400,700|Open+Sans+Condensed:300,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/flipclock.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.lockfixed.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/goalProgress.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.simplemodal.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/slick-lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.lockfixed.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/basic.js"></script>
<script type="text/javascript">

  var clock;
  var clock2;

  jQuery(document).ready( function() {

  	clock = new FlipClock( jQuery('.rehomed-clock'), <?php echo str_replace(' ', '', get_option('rehomedid')); ?>, {
  		clockFace: 'Counter',
  		minimumDigits: 5,
  	});

  	clock2 = new FlipClock( jQuery('.neutered-clock'), <?php echo str_replace(' ', '', get_option('neuteredid')); ?>, {
  		clockFace: 'Counter',
  		minimumDigits: 5,
  	});


  });

</script>      
<link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_url'); ?>/css/expand.css" media="screen" />
<link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_url'); ?>/css/flipclock.css" media="screen" />
<link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_url'); ?>/css/slick.css" media="screen" />
<link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_url'); ?>/css/slick-theme.css" media="screen" />
<link rel="stylesheet" type="text/css"  href="<?php echo bloginfo('template_url'); ?>/css/slick-lightbox.css" media="screen" />
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/js/expand.js"></script>
<?php
if ( is_page_template( 'page-wide.php' ) ) { ?>
<script type="text/javascript">
jQuery(function() {
    jQuery("#columns h4.expand").toggler();
    jQuery("#columns div.shelter-faq").expandAll({trigger: "h3.expand", ref: "h3.expand"});
    jQuery("#columns div.other").expandAll({
      expTxt : "[Show]", 
      cllpsTxt : "[Hide]",
      ref : "ul.collapse",
      showMethod : "show",
      hideMethod : "hide"
    });
    jQuery("#columns div.post").expandAll({
      expTxt : "[Read this entry]", 
      cllpsTxt : "[Hide this entry]",
      ref : "div.collapse", 
      localLinks: "p.top a"    
    });    
});
</script>
<?php } ?>
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery("#acontact").click(function() {
jQuery(".animalcontact").slideToggle('slow', 'linear');
});
});
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154733126-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154733126-1');
</script>


</head>
<body <?php body_class(); ?>>




<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.async=true;
  js.src = "//connect.facebook.net/<?php if(ICL_LANGUAGE_CODE=='en') echo 'en_GB'; else echo 'bg_BG' ?>/sdk.js#xfbml=1&version=v2.5&appId=105722839509031";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));
//
jQuery(document).ready(function(){

	//Examples of how to assign the Colorbox event to elements
	jQuery(".ars-animal-image").colorbox({
		rel:'ars-animal-image',
		maxWidth:'95%', 
		maxHeight:'95%'
	});

	/* Colorbox resize function */
  var resizeTimer;
  function resizeColorBox() {
      if (resizeTimer) clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
              if (jQuery('#cboxOverlay').is(':visible')) {
                      jQuery.colorbox.load(true);
              }
      }, 300)
  }
      		
});
</script>
<div id="page">
	<div id="nav">
		<div id="access">
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        	<div class="my-nav-menu-search fr">		
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label>
					<span class="screen-reader-text"><?php _x( 'Search for:', 'arsofia' ); ?></span>
					<input type="search" class="search-field" placeholder="..." value="<?php echo get_search_query(); ?>" name="s" title="<?php _e('Search', 'arsofia' ); ?>">
				</label>
				<input type="submit" class="search-submit" value="Търсене">
			</form>
		</div>
		</div>
	</div>
	<div id="header">
        <h1><a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>"></a></h1>
            <div id="counters">
            <h4><?php _e('We rehomed', 'arsofia' ); ?>:</h4>
            <div class="rehomed-clock"></div>
            <h4><?php _e('We neutered', 'arsofia' ); ?>:</h4>
            <div class="neutered-clock"></div>
            </div>
	</div>
    <div id="secondary_navigation">
    <?php do_action('wpml_add_language_selector'); ?>
    </div>
    <div class="fix"></div>	 
    <div class="ars-navigation-wrapper">
    <div class="mobile-button">
    <a class="ars-mobile-button" href="#">Menu</a>
    </div>
    <?php wp_nav_menu( array( 'container_class' => 'ars-menu-header', 'theme_location' => 'ars-navigation' ) ); ?>
    </div>
	<div id="columns"><!-- START MAIN CONTENT COLUMNS -->
