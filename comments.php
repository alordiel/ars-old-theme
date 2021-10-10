<div class="fix"></div>
<div id="facebook_comments">
<h2 class="commh2"><?php _e('Facebook comments', 'arsofia'); ?>:</h3>
<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="580" data-numposts="5" data-adapt-container-width="true" mobile="true"></div>
</div>
<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<?php
	global $bm_comments;
	global $bm_trackbacks;
	
	split_comments( $comments );
?>

<?php if ($comments) : ?>

	
	<?php
		$trackbackcounter = count( $bm_trackbacks );
		$commentcounter = count( $bm_comments );
	?>

	<ol class="commentlist">

	<?php foreach ($bm_comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?> <?php if(function_exists("author_highlight")) author_highlight(); ?>" id="comment-<?php comment_ID() ?>">

         <?php
         	// Determine which gravatar to use for the user
         	$email =  $comment->comment_author_email;
            $grav_url = "https://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=identicon&size=48";
            $usegravatar = get_option('woo_gravatar');
         ?>	
         <span class="gravatar"><?php echo get_avatar( $email, 48 ); ?></span>

			<cite><?php comment_author_link() ?></cite>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('d F, Y') ?>, <?php comment_time() ?></a></small>

			<?php comment_text() ?>

		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

	<?php if ( count( $bm_trackbacks ) > 0 ) { ?>

	<h2 class="commh2"><?php echo $trackbackcounter; ?> Trackbacks For This Post</h2>

	<ol class="commentlist">

	<?php foreach ($bm_trackbacks as $comment) : ?>

		<li class="<?php echo $oddcomment; ?> <?php if(function_exists("author_highlight")) author_highlight(); ?>" id="comment-<?php comment_ID() ?>">

			<cite><?php comment_author_link() ?></cite> Says:
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('d F, Y') ?>, <?php comment_time() ?></small>

			<?php comment_text() ?>

		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

	<?php } ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>

	 <?php else : // comments are closed ?>
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h2 class="commh2"><?php _e('Leave a Reply', 'arsofia' ); ?>:</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p class="alert">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e('Logged in as', 'arsofia' ); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account"><?php _e('Logout &raquo;', 'arsofia' ); ?></a></p>

<?php else : ?>

<p><label for="author"><small><?php _e('Name', 'arsofia' ); ?> <?php if ($req) echo "(required)"; ?></small></label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
</p>

<?php endif; ?>

<p><textarea name="comment" id="comment" style="width:99%;" rows="10" tabindex="4"></textarea></p>

<p><input class="comm-button" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'arsofia' ); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php //do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
