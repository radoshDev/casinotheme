<?php 

$query_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 4,
    'category_name'  => 'news',
    'post_status'    => 'publish',
);

$query = new WP_Query($query_args);
?>
<?php if ($query->have_posts()): ?>
<section class="latest-news wrapper section-block">
	<p class="latest-news_subtitle content-posts_subtitle">Our Latest News</p>
	<h2 class="latest-news_title content-posts_title">Best of sports</h2>
	
	<div class="latest-news_grid">
		<?php 
		$counter = 0;
		while ($query->have_posts()): $query->the_post();
			$counter++;
			get_template_part('templates/post-article-item', null, array(
				'type' => 'news', 
				'feature' => $counter == 1)
			);
			?>
		<?php
		endwhile;
		?>
	</div>
</section>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
