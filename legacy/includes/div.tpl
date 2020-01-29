<div id="blog">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- <?php the_date('','<body>','</body>'); ?> -->

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	 <h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	<div class="meta"><blogsmall>Posted by: <?php the_tags(__('Tags: '), ', ', ' &#8212; '); ?> <?php the_author() ?> on <?php the_time('l, F jS, Y') ?> <?php edit_post_link(__('Edit This')); ?> </blogsmall></div>
	<div class="feedback">
		<blogsmall><?php wp_link_pages(); ?>
		<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
		<?php _e("Filed under:"); ?> <?php the_category(',') ?> </blogsmall>
	</div>

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div>