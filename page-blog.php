<?php get_header();
	$posts_id = 'latest-posts';
?>


<main class="content">
	<?php get_template_part('templates/banner', null, array('anchor' => $posts_id)) ?>
	<div class="wrapper">
		<?php the_content();
		do_shortcode('[latest-post]');
		?>
	</div>
	
</main>
<?php get_footer() ?>