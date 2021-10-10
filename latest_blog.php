<?php
	//if (is_active_sidebar(3) and is_active_sidebar(2) and is_active_sidebar(1) ) { $posts_per_page = 9; }
	//if (is_active_sidebar(3) and is_active_sidebar(2) and !is_active_sidebar(1) ) { $posts_per_page = 10; }
	if (is_active_sidebar(3) and !is_active_sidebar(2) and !is_active_sidebar(1) )
	include(TEMPLATEPATH . '/includes/latest_blog_sidebar3.php'); 
	if (is_active_sidebar(3) and is_active_sidebar(2) and !is_active_sidebar(1) )
	include(TEMPLATEPATH . '/includes/latest_blog_sidebar2.php');
	?>
	