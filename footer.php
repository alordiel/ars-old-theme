	<div class="fix"></div>
	</div>
    <div class="fix"></div>
	<div id="footer">
		<p><span class="fl">Copyright &copy; <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>. <span class="designed_bg"><a href="https://arsofia.com/privacy-policy/"><?php _e('Privacy Policy', 'arsofia' ); ?></a>.</span></span></p>
	</div>
</div>

<?php wp_footer(); ?>


<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.ars-animals-gallery li a').removeClass('cboxElement');
    jQuery('.ars-animals-gallery').slickLightbox({
      itemSelector: '> li > a',
      caption: 'caption',
      captionPosition: 'top',
      useHistoryApi: true,
    });
  });
</script>
</body>
</html>