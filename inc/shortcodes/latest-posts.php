<?php

function latest_posts_shortcode($args) {
	// Parse shortcode attributes
	$atts = shortcode_atts(
			array(
					'category' => '',     // Default is empty
					'per_page' => 5,
					'title' => '',
					'subtitle' => ''      // Default number of posts per page
			),
			$args,
			'latest-post'
	);

	// Query arguments
	$query_args = array(
			'post_type'      => 'post',
			'posts_per_page' => intval($atts['per_page']),
			'category_name'  => sanitize_text_field($atts['category']),
			'post_status'    => 'publish',
	);

	// Create a new query
	$query = new WP_Query($query_args);

	// Initialize output variable
	$output = '';
	$output = '<div class="latest-posts wrapper section-block">';
	if (isset($atts['subtitle'])) {
		$output .= '<p class="latest-posts_subtitle content-posts_subtitle">'.$atts['subtitle'].'</p>';
	}

	if (isset($atts['title'])) {
		$output .= '<h2 class="latest-posts_title content-posts_title">'.$atts['title'].'</h2>';
	}


	// Check if posts exist
	if ($query->have_posts()) {
			$output .= '<div class="latest-posts_grid">';

			while ($query->have_posts()) {
					$query->the_post();

					// Post data
					$title = get_the_title();
					$thumbnail = get_the_post_thumbnail(get_the_ID(), array(400, 400));
					$categories = get_the_category();
					$category = $categories[0];
					$date = get_the_date('M j, Y');

					// Generate HTML for each post
					$output .= '<article class="latest-posts_grid_item">';
					if ($thumbnail) {
							$output .= '<a href="' . get_permalink() . '" class="latest-posts_grid_item_image">' . $thumbnail . '</a>';
					}
					$output .= '<div class="latest-posts_grid_item_content">';
					$output .= '<div class="latest-posts_grid_item_meta"><a href="'.get_category_link($category->term_id).'" class="latest-posts_grid_item_meta_category">' . $category->name . '</a><span class="latest-posts_grid_item_meta_date">' . esc_html($date) . '</span></div>';
					$output .= '<h3 class="latest-posts_grid_item_title"><a href="' . get_permalink() . '">' . esc_html($title) . '</a></h3>';
					$output .= '</div>';
					$output .= '</article>';
			}

			$output .= '</div>';
	} else {
			$output .= '<p class="latest-posts_grid_not-found">No posts found in this category.</p>';
	}
	$output .= '</div>';
	// Reset post data
	wp_reset_postdata();

	return $output;
}

// Register shortcode
add_shortcode('latest-posts', 'latest_posts_shortcode');