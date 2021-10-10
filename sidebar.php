<div class="col2">
<?php if (is_home()) { ?>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1)) : ?>
    <?php endif; ?> 
<?php } ?>

<?php if (!is_home()) { ?>
<?php include(TEMPLATEPATH . '/includes/focus-sidebar.php'); ?> 
 <?php } ?>
<?php if (!is_home()) { ?>
			<div class="recent-widget">
			<?php include(TEMPLATEPATH . '/sidebar_recent.php'); ?> 
			</div>            
<?php } ?>
<?php if (!is_home()) { ?>
    <div class="activities_widget">
    <h2><?php _e('Dashboard', 'arsofia'); ?></h2>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>	
    <?php endif; ?><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>	
    <?php endif; ?>
    
    </div>
<?php } ?>
</div>
<div class="fix"></div>