<?php get_header();
$author_id = get_the_author_meta('ID');
$custom_avatar = get_user_meta($author_id, 'sabox-profile-image', true);
$author_image = $custom_avatar ?? get_avatar_url($author_id, ['size' => 120]);

?>


<main class="content">
	<?php get_template_part('templates/banner') ?>
	<div class="wrapper content author-page">
		<div class="author-avatar">
    	<img src="<?php echo $author_image; ?>" alt="Author Avatar" width="120" height="120">
    </div>
		<p class="author-description">
			<?php echo get_the_author_meta('description');?>
		</p>
		<div class="author-posts">
        <?php if (have_posts()) : ?>
						<?php echo do_shortcode('[latest-posts title="'.'Recent Posts by '.get_the_author().'" author="'.$author_id.'" per_page="8"]') ?>
        <?php else : ?>
            <p>No posts found for this author.</p>
        <?php endif; ?>
    </div>
	</div>
	
</main>
<?php get_footer() ?>