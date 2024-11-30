<?php $anchor = $args['anchor'] ?? null;
?>


<div class="casinotheme_banner">
	<h1><?php the_title()?></h1>
	<?php if ($anchor) echo '<a href="#' . $anchor . '">' ?>
	<?php get_template_part('templates/icons/arrow', 'down') ?>
	<?php if ($anchor) echo '</a>' ?>
</div>