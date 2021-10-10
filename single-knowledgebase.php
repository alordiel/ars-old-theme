<?php get_header(); ?>

<div class="col1 floatright col1-wiki">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="blog" id="post-<?php the_ID(); ?>">
  <h1 class="hidden-wiki"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    <div class="entry">
      <?php the_content('<span class="continue">Continue Reading</span>'); ?>
    </div>
  </div>
  <?php include(TEMPLATEPATH . '/includes/facebook_like_button.php'); // calling social buttons ?>
    <p class="wiki-meta">
      <span class="wiki-posted">
	  <?php _e('Last Edit:', 'arsofia'); ?><?php the_modified_time('d F Y'); ?>   
        |
      <?php _e('Published:', 'arsofia'); ?><?php the_time('d F Y'); ?>
        <?php the_category(', ') ?>
      </span>
    </p>
  <div class="fix"></div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_sidebar('knowledgebase'); ?>
<?php get_footer(); ?>
