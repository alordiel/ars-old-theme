<?php
global $post;
?>
<div id="socialicons">   
	<ul>
        <li>
        <div class="fb-like" data-href="<?php echo get_permalink(get_the_ID()); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </li>
        <li>
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="AnimalRescueSF"></a>      
        </li>
	</ul>
</div>