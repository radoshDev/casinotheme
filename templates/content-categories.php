<?php
// $categories = get_categories((array(
// 	'taxonomy' => 'product_cat'
// )));

?>

<div class="container-fluid pt-5">
	<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
	<div class="row px-xl-5 pb-3">
		<?php echo do_shortcode('[product_categories]') ?>
	</div>
</div>