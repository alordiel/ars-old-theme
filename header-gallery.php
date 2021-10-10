<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head profile="https://gmpg.org/xfn/11">



	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://arsofia.com/xmlrpc.php?rsd" />
<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAATvyYKjxbUVlc17FSyFJJ0hTed5MHyURwCEL0ZzC8J9cN9UPEWhQ-h3foJFbBWSHZICob2kYinkuBRA"></script>
<script type="text/javascript"> 
google.load("jquery", "1.2.3"); 
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/notify.js"></script>

	<?php wp_head(); ?>
	<!--[if lte IE 6]>
	<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/pngfix.js"></script>
	<![endif]-->
	
	<?php include(TEMPLATEPATH . '/includes/stylesheet.php'); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#adopt-columns").show();
	});
</script>
</head>

<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: 'your app id', status: true, cookie: true,
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
	
				<div id="nav-left">
			<ul id="lavaLamp">
				<li class="home-link"><a href="<?php echo get_option('home'); ?>"><?php _e('Home', 'arsofia' ); ?></a></li>
				<li class="about-link"><a href="<?php echo get_option('home'); ?>about-ars"><?php _e('About ARS', 'arsofia' ); ?></a></li>
                <li class="contact-link"><a href="<?php echo get_option('home'); ?>contact"><?php _e('Contact', 'arsofia' ); ?></a></li>
                <li class="links-link"><a href="<?php echo get_option('home'); ?>links"><?php _e('Links', 'arsofia' ); ?></a></li>
                <li class="infobin-link"><a href="#"><?php _e('Info Bin', 'arsofia' ); ?></a>
                	<ul>
                    <li class="library-link"></li>
                    <li class="library-link"><a href="<?php echo get_option('home'); ?>items/library"><?php _e('Library', 'arsofia' ); ?></a></li>
                    <li class="gallery-link"><a href="https://arsofia.com/gallery"><?php _e('Gallery', 'arsofia' ); ?></a></li>
                    <li class="videos-link"><a href="<?php echo get_option('home'); ?>video-gallery"><?php _e('Videos', 'arsofia' ); ?></a></li>
                    <li class="faq-link"><a href="<?php echo get_option('home'); ?><?php _e('our-banners', 'arsofia' ); ?>"><?php _e('Our banners', 'arsofia' ); ?></a></li>
                    <li class="faq-link"><a href="<?php echo get_option('home'); ?>frequently-asked-questions"><?php _e('FAQ', 'arsofia' ); ?></a></li>
                    </ul>
                <li class="newsletter-link"><a href="<?php echo get_option('home'); ?>newsletter"><?php _e('Newsletter', 'arsofia' ); ?></a>
                <li class="campaigns-link"><a href="#" style="color:#F9A31C"><?php _e('Campaigns', 'arsofia' ); ?></a>
                	<ul>
					<li><span><?php _e('Current', 'arsofia' ); ?></span></li>
                    <li><a href="<?php _e('https://arsofia.com/calendar', 'arsofia' ); ?>"><?php _e('2011 Calendar', 'arsofia' ); ?></a></li>
                    <li><a href="<?php _e('https://arsofia.com/shops', 'arsofia' ); ?>"><?php _e('ARS Shops', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?>say-no-to-animal-cruelty"><?php _e('Say NO to cruelty!', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?><?php _e('starving', 'arsofia' ); ?>"><?php _e('Starving dogs', 'arsofia' ); ?></a></li>
					<li><span><?php _e('Past', 'arsofia' ); ?></span></li>
                    <li><a href="<?php echo get_option('home'); ?>one"><?php _e('One Breed', 'arsofia' ); ?></a></li>
					<li><a href="<?php echo get_option('home'); ?>tea"><?php _e('Tea party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?>sangria"><?php _e('Sangrea party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?>beer"><?php _e('Beer party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?><?php _e('food', 'arsofia' ); ?>"><?php _e('Food party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php _e('https://arsofia.com/halloween', 'arsofia' ); ?>"><?php _e('Helloween party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php _e('https://arsofia.com/mojito', 'arsofia' ); ?>"><?php _e('Christmas party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php _e('https://arsofia.com/wine-valentine', 'arsofia' ); ?>"><?php _e('Valentine party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php _e('https://arsofia.com/spring', 'arsofia' ); ?>"><?php _e('Spring Party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?><?php _e('b-day', 'arsofia' ); ?>"><?php _e('B-Day Party', 'arsofia' ); ?></a></li>
                    <li><a href="<?php echo get_option('home'); ?><?php _e('18892/this-saturday-kids-party', 'arsofia' ); ?>"><?php _e('Kids Party', 'arsofia' ); ?></a></li>
					</ul>
                	</li>
                 <li class="blog-link"><a href="<?php echo get_option('home'); ?>items/blog" style="color:#F9A31C; text-transform:uppercase;"><?php _e('Blog', 'arsofia' ); ?></a></li>
			</ul>
		
		</div><!--/nav-left -->

		
	<div id="search-label"><a href="#"><?php _e('Search', 'arsofia' ); ?></a></div>	
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
		<h1><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"></a></h1>
	</div><!--/header -->
	<div id="header_space"></div>	
	<?php include(TEMPLATEPATH . '/includes/front-navigation.php'); ?>
	<div id="columns"><!-- START MAIN CONTENT COLUMNS -->