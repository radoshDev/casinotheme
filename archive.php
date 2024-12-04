<?php get_header();?>


<main class="content">
	<?php get_template_part('templates/banner') ?>
	<div class="wrapper">
		<?php echo get_the_archive_description();		?>
	</div>
	
</main>
<?php get_footer() ?>