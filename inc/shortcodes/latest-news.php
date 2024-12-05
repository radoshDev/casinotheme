<?php

function latest_news_shortcode($atts) {
	// Extract shortcode attributes and set default values
	$atts = shortcode_atts(
			array(
					'title'         => '', 
					'subtitle'      => '', 
					'category_name' => '',          
			),
			$atts,
			'latest_news'
	);

	// Build query arguments
	$query_args = array(
			'post_type'      => 'post',
			'posts_per_page' => 4,
			'post_status'    => 'publish',
	);

	if ($atts['category_name']) {
		$query_args['category_name'] = $atts['category_name'];
	}

	// Fetch posts
	$query = new WP_Query($query_args);


	// Start output buffering
	ob_start();

	// Check if posts exist
	if ($query->have_posts()): ?>
		<section class="latest-news wrapper section-block">
			<p class="latest-news_subtitle content-posts_subtitle"><?php echo esc_html($atts['subtitle']); ?></p>
			<h2 class="latest-news_title content-posts_title"><?php echo esc_html($atts['title']); ?></h2>
			
			<div class="latest-news_grid">
				<?php 
				$counter = 0;
				while ($query->have_posts()): $query->the_post();
					$counter++;
					if ($counter == 1): ?>
						<div class="latest-news_grid_feature">
								<?php get_template_part('templates/post-article-item', null, array(
										'type'    => 'news',
										'feature' => true,
								)); ?>
						</div>
					<?php else: 
						if ($counter == 2): // Open the posts container for the remaining posts ?>
								<div class="latest-news_grid_posts">
						<?php endif; ?>
						
						<?php get_template_part('templates/post-article-item', null, array(
								'type'    => 'news',
								'feature' => false,
						)); ?>
						
						<?php if ($counter == 4): // Close the posts container ?>
								</div>
						<?php endif; ?>
					<?php endif; 
				endwhile; ?>
			</div>
		</section>
	<?php endif;

	// Reset post data
	wp_reset_postdata();

	// Return output buffer contents
	return ob_get_clean();
}

// Register the shortcode
add_shortcode('latest-news', 'latest_news_shortcode');