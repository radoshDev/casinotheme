<?php get_header();?>


<main class="content">
	<?php get_template_part('templates/banner') ?>
	<div class="content wrap-text">
		<?php the_content();
		?>
	</div>
	
</main>
<?php get_footer() ?>