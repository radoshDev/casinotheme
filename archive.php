<?php get_header();

$category_content = get_the_archive_description();
$category = get_queried_object();

?>


<main>
	<?php get_template_part('templates/banner') ?>
	<div class="content wrap-text">
		<?php 
			if (empty($category_content)) {
				echo do_shortcode('[latest-posts category="'.$category->slug.'" per_page="6"]');
			} else {
				echo $category_content;	
			}
		?>
	</div>
	
</main>
<?php get_footer() ?>