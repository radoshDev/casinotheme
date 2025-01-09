<?php get_header();
// Get the featured image URL
$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Fetches the featured image URL

$categories = get_the_category();
$category = !empty($categories) ? esc_html($categories[0]->name) : null;

$author_id = get_the_author_meta('ID');
$custom_avatar = get_user_meta($author_id, 'sabox-profile-image', true);

$author_url = get_author_posts_url($author_id);

$author = $author_id ? (object) [
    'name' => get_the_author_meta('display_name', $author_id),
    'image' => $custom_avatar ?? get_avatar_url($author_id, ['size' => 96]),
	'url' => $author_url
] : null;

$publish_date = get_the_date('U'); 

$title = get_the_title();
$permalink = get_the_permalink();
?>


<main class="content">
	<?php get_template_part('templates/banner', null, [
    'image_url' => $image_url,
    'category' => $category,
    'author' => $author,
    'publish_date' => $publish_date,
]) ?>
	<div class="wrapper">
		<?php 
        the_content();
        get_template_part(
            'templates/share-on-social-media', 
            null, 
            array("show-title" => true, 'post-title' => $title, 'post-url' => $permalink)
        );	
        comments_template();
        ?>
	</div>
</main>
<?php get_footer() ?>