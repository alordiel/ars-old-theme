<script type="text/javascript">
function fbs_click(width, height) {
    var leftPosition, topPosition;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);
    var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
    u=location.href;
    t=document.title;
    window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    return false;
}
</script>
<?php
unset($photo);
if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
$c_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb');
$photo =  $c_thumb_url[0];
}
else{
$photo = catch_that_image($post->ID);
}
if (!$photo){
$photo = 'https://arsofia.com/uploads/2013/02/thank-you-square-ENG.jpg';
}
$wpc_image_url = $photo;
?>
<div id="socialicons" style="border:none;float: left;">
	<ul>
        <li>
        <a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink() ?>&p[title]=<?php the_title(); ?>&p[images][0]=<?php echo $wpc_image_url; ?>" onClick="return fbs_click(400, 300)" target="_blank" rel="nofollow" title="Сподели във Фейбук" class="button_blue button_right button_facebook"><p>f</p><?php _e('SHARE','arsofia'); ?></a>
        </li>
        <li>
        <fb:like href="<?php the_permalink() ?>" layout="button_count" send="false" width="auto" show_faces="false" action="recommend" font="trebuchet ms"></fb:like>
        </li>
        <li>
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="AnimalRescueSF">Tweet</a>
        </li>
	</ul>
</div>
