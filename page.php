<?php get_header() ?>

<main class="wrapper content">
	<h1><?php the_title() ?></h1>
	<?php the_content(); 
	comments_template();
	?>
</main>

<?php get_footer() ?>