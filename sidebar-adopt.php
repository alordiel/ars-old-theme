<div class="col2-half">

	
	<div class="subcol fl hl3-pausa">

		<?php //if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>		
		
			<!--<div class="widget">
			
				<h2 class="hl">RELATED SITES</h2>
				<ul class="list2">
					<?php get_links('-1','<li>','</li>'); ?>
				</ul>
			
			</div> --><!--/widget-->
		
		<?php //endif; ?>
	
	</div><!--/subcol-->
		
	<div class="subcol fr hl3">
        
        <!--<div class="catlist">

			<ul class="cats-list">
				<li>
					<h2><a href="#">Archives</a></h2>
					<ul class="list-alt">
					<?php //wp_get_archives('type=monthly&show_post_count=1') ?>	
					</ul>
				</li>
			</ul>		
		
		</div> --><!--/catlist-->

		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>		
		
			<!--<div class="widget">

					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>					

				
			</div><!--/widget--> -->
		
		<?php endif; ?>
			
	</div><!--/subcol-->
<div class="fix"></div>	
	<?php include('../arsofiav4 - Copy/ads/ads-management.php'); ?>

	<?php //include('../arsofiav4 - Copy/ads/ads-top.php'); ?>
	
<!--	<div class="sideTabs">
			
		<ul class="idTabs">
			<li><a href="#pop">POPULAR</a></li>
			<li><a href="#comm">COMMENTS</a></li>
			<li><a href="#feat">FEATURED</a></li>
			<?php if (function_exists('wp_tag_cloud')) { ?><li><a href="#tagcloud">TAG CLOUD</a></li><?php } ?>
		</ul>
	
	</div>
	
	<div class="fix" style="height:2px;"></div>
	
	<div class="navbox">
		
		<ul class="list1" id="pop">
            <?php include(TEMPLATEPATH . '/includes/popular.php' ); ?>                    
		</ul>

		<ul class="list3" id="comm">
            <?php include(TEMPLATEPATH . '/includes/comments.php' ); ?>                    
		</ul>

		<ul class="list4" id="feat">
			<?php 
				$featuredcat = get_option('woo_featured_category'); // ID of the Featured Category				
				$the_query = new WP_Query('category_name=' . $featuredcat . '&showposts=10&orderby=post_date&order=desc');	
				while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
			?>
			
				<li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
			
			<?php endwhile; ?>		
		</ul>

		<?php if (function_exists('wp_tag_cloud')) { ?>
		
			<span class="list1" id="tagcloud">
				<?php wp_tag_cloud('smallest=10&largest=18'); ?>
			</span>
		
		<?php } ?>
		
	</div>
	 -->
	
	
	<?php //include('../arsofiav4 - Copy/ads/ads-bottom.php'); ?>
	
	<div class="fix"></div>	
</div><!--/col2-->
