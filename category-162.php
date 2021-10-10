<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
		
        		<?php if (is_category()) { ?>
        	
            	<h2><?php echo single_cat_title(); ?></h2>        
            	
				<?php } elseif (is_day()) { ?>
				<h2>Archive | <?php the_time('F jS, Y'); ?></h2>

				<?php } elseif (is_month()) { ?>
				<h2>Archive | <?php the_time('F, Y'); ?></h2>

				<?php } elseif (is_year()) { ?>
				<h2>Archive | <?php the_time('Y'); ?></h2>
				
				<?php } ?>
		
		</div><!--/archivebox-->
<div class="entry">
<p>Animal Rescue Sofia thanks the generous people who make our work possible!</p>

<p>We are a non-profit organization and our budget is based entirely on the trust and support we get from the public.</p>

<p><strong><span style="color: #000000;">We wouldn't be able to help the suffering animals if it wasn't for your donations. It is through your generosity that lives are saved on a daily basis. You are our dogs' and cats' guardian angels!</span></strong></p>
<ul>
	<li><a href="https://arsofia.com/uploads/docs/ars-donors-2013.pdf" target="_blank">See full list of sponsors for 2013</a></li>
	<li><a href="https://arsofia.com/uploads/docs/ars-donors-2012.pdf" target="_blank">See Sponsors in 2012</a>, <a href="https://arsofia.com/uploads/docs/ARS-FULL-LIST-OF-SPONSORS-11.pdf">Sponsors in 2011</a>, <a href="https://arsofia.com/uploads/docs/ARS-FULL-LIST-OF-SPONSORS.pdf" target="_blank">Sponsors in 2010</a></li>
	<li><a href="/?page_id=235" target="_blank">BECOME A SPONSOR OF ANIMAL RESCUE SOFIA</a></li>
</ul>
<p>
We want to specially thank the people who have donated through our collection boxes; everyone who has bought our stuff; everyone who has brought food and goods to the shelter - your help is greatly appreciated! <span style="color: #999999;">(Please, have in mind that we have no way of keeping a record of your names, so you will not be able to find your name on the above list. Bless you for supporting our doggies and kitties!)</span>
</p>
</div>
	<?php query_posts($query_string. '&posts_per_page=20'); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
					<h2><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="posted"><?php _e('Posted on', 'arsofia' ); ?> <?php the_time('d F Y'); ?> 
                    </div>
                			
					<div class="entry">
					</div>				
				</div><!--/post-->

		<?php endwhile; ?>
				<div class="navigation"><?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="floatleft"><?php next_posts_link( __('&laquo; Older Entries', '') ); ?></div>
					<div class="floatright"><?php previous_posts_link( __('Newer Entries &raquo;', '') ); ?></div>
			
			
				
			
				<?php } ?>
			
				</div>	
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>