<?php 
$is_feature = $args['feature'] ?? null;
$posts_type = $args['type'] ?? null;

$title = get_the_title();
$thumbnail = get_the_post_thumbnail(get_the_ID(), array(400, 400));
$categories = get_the_category();
$category = $categories[0];

?>
<article class="post-article-item<?php echo $is_feature ? ' feature' : '' ?>">
	<?php if ($thumbnail): ?>
			<a href="<?php echo get_permalink() ?>" class="post-article-item_image"><?php echo $thumbnail ?></a>
	<?php endif; ?>
	<div class="post-article-item_content<?php $posts_type == 'blog' ? ' line' : '' ?>">
		<div class="post-article-item_meta">
			<a href="<?php echo get_category_link($category->term_id) ?>" class="post-article-item_meta_category">
				<?php echo $category->name ?>
			</a>
			<?php if ($is_feature): ?>
				<span class="post-article-item_meta_date">
					<span class="day-of-month"><?php echo get_the_date('j'); ?></span>
					<span class="month"><?php echo get_the_date('M'); ?></span>
				</span>
			<?php else: ?>
				<span class="post-article-item_meta_date dot">
					<?php echo esc_html(get_the_date('M j, Y')) ?>
				</span>
			<?php endif?>
		</div>
		<h3 class="post-article-item_title">
			<a href="<?php echo get_permalink()?>"><?php echo esc_html($title) ?></a>
		</h3>
	</div>
</article>


