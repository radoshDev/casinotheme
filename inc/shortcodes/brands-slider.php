<?php

function brands_slider_shortcode($atts) {
	// Extract the `images_id` attribute and provide a default value
	$atts = shortcode_atts(
		array(
			'images_id' => '', // Comma-separated image IDs
		),
		$atts,
		'brands_slider'
	);
	
	// Convert the `images_id` string to an array
	$images_id = explode(',', $atts['images_id']);
	$images_id = array_map('trim', $images_id); // Trim any extra whitespace
	
	ob_start();
	?>

	<section class="brands section-block">
			<div class="brands_slider">
					<?php
					foreach ($images_id as $img_id) {
							echo wp_get_attachment_image($img_id, "thumbnail", true, array('class' => 'brands_slider_slide'));
					}
					?>
			</div>
			<div aria-hidden="true" class="brands_slider">
					<?php
					foreach ($images_id as $img_id) {
							echo wp_get_attachment_image($img_id, "thumbnail", true, array('class' => 'brands_slider_slide'));
					}
					?>
			</div>
	</section>

	<?php
	// Get the buffered content and clean the buffer
	return ob_get_clean();
}

// Register the shortcode
add_shortcode('brands-slider', 'brands_slider_shortcode');