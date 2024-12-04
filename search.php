<?php get_header() ?>

<main class="wrapper content search-page">
	<h1 class="page-title">
		<?php printf(esc_html__('Search Results for: %s', 'casinotheme'), '<span>' . get_search_query() . '</span>'); ?>
	</h1>

	<?php get_search_form(); ?>

	<?php if (have_posts()) : ?>
		<div class="grid-result">
		<?php
		while (have_posts()) :
		the_post();
		get_template_part('templates/post-article-item', null, ['type' => 'search']);
		?>
		
		<?php
		endwhile;
		?>
	</div>
	<?php
	the_posts_navigation();
	else :
		
	?>
	<h3><?php printf(esc_html__('We\'re sorry, but your search "%s" did not match', 'casinotheme'), get_search_query())?></h3>
	<?php
	endif;
	?>
</main>

<?php get_footer() ?>