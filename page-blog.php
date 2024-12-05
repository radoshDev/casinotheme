<?php get_header();?>


<main>
	<?php get_template_part('templates/banner') ?>
	<div class="content wrap-text">
		<?php the_content();
		?>
	</div>
	
</main>
<?php get_footer() ?>