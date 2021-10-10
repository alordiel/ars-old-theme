<?php
/**
 * @var $comments
 * @var $id
 * @var $comment_author
 */

?>
	<div class="fix"></div>
	<div id="facebook_comments">
		<h3 class="commh2"><?php _e('Facebook comments', 'arsofia'); ?>:</h3>
		<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="580" data-numposts="5"
			 data-adapt-container-width="true"></div>
	</div>
<?php // Do not delete these lines
if ('comments.php' === basename($_SERVER['SCRIPT_FILENAME'])) {
	die ('Please do not load this page directly. Thanks!');
}

// if there's a password
if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] !== $post->post_password) {  // and it doesn't match the cookie
	?>
	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
	return;
}

$odd_comment = 'alt';
global $bm_comments;

split_comments($comments);

if ($comments) : ?>

	<ol class="commentlist">

		<?php foreach ($bm_comments as $comment) : ?>

			<li class="<?php echo $odd_comment; ?>" id="comment-<?php comment_ID() ?>">

				<cite><?php comment_author_link() ?></cite>
				<?php if ((int)$comment->comment_approved === 0) : ?>
					<em>Your comment is awaiting moderation.</em>
				<?php endif; ?>
				<br/>

				<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>"
												  title=""><?php comment_date('d F, Y') ?>, <?php comment_time() ?></a></small>
				<?php comment_text() ?>
			</li>

			<?php
			$odd_comment = ('alt' === $odd_comment) ? '' : 'alt';
		endforeach;
		?>

	</ol>


<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' !== $post->comment_status) : ?>
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>

<?php if ('open' === $post->comment_status) : ?>

	<h2 class="commh2"><?php _e('Leave a Reply', 'arsofia'); ?>:</h2>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<p>
			<label for="author"><small><?php _e('Name', 'arsofia'); ?></small></label>
			<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1"/>
		</p>
		<p>
			<label for="comment">Add your comment</label>
			<textarea name="comment" id="comment" rows="5" tabindex="4"></textarea>
		</p>
		<p>
			<input class="comm-button" name="submit" type="submit" id="submit" tabindex="5"
				   value="<?php _e('Submit Comment', 'arsofia'); ?>"/>
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"/>
		</p>
	</form>

<?php endif; ?>
