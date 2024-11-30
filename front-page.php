<?php
get_header()
?>
<main class="content">
	<?php the_content(); ?>
	<?php get_template_part('templates/subscribe'); ?>
	<?php get_template_part('templates/latest-news'); ?>
	<?php echo do_shortcode('[brands_slider images_id="197,198,199,200"]'); ?>
</main>


<?php get_footer() ?>