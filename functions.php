<?php

function casinotheme_setup()
{
	load_theme_textdomain('casinotheme', get_template_directory_uri() . '/lang');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'menu_header' => __('Header Menu', 'casinotheme'),
		'menu_footer' => __('Footer Menu', 'casinotheme'),
	));
}

add_action('after_setup_theme', 'casinotheme_setup');

function casinotheme_assets()
{
	wp_enqueue_style('casinotheme-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap', array(), null);

	wp_enqueue_style('casinotheme-main', get_template_directory_uri() . '/assets/css/style-min.css');

	wp_enqueue_script('casinotheme_main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
}
}

add_action('wp_enqueue_scripts', "casinotheme_assets");

require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/theme-customize.php';
require_once get_template_directory() . '/inc/class-menu-footer.php';
require_once get_template_directory() . '/inc/shortcodes/index.php';

function casinotheme_debug($args)
{
	echo "<pre>";
	print_r($args);
	echo '</pre>';
}


add_filter('pre_get_document_title', function($title) {
	if (is_front_page()) {
			return 'Your Custom Homepage Title';
	}
	return $title;
});

add_filter('comment_form_default_fields', function($fields) {
	if (isset($fields['url'])) {
		unset($fields['url']); // Remove the 'Website' field
	}
	$fields['author'] = '<p class="comment-form-author">' .
	'<input id="author" placeholder="Your name *" name="author" type="text" value="" required="required" /></p>';

	$fields['email'] = '<p class="comment-form-email">' .
	'<input id="email" placeholder="Your email *" name="email" type="email" value="" required="required" /></p>';

	$fields['cookies'] = '<p class="comment-form-cookies-consent">' .
            '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />' .
            '<label for="wp-comment-cookies-consent">' . __('Save my name and email in this browser for the next time I comment.', 'casinotheme') . '</label>' .
            '</p>';

	return $fields;
});


add_filter('comment_form_defaults', function ($defaults) {
	$defaults['comment_field'] = '<p class="comment-form-comment">' .
			'<textarea id="comment" placeholder="Your comment *" name="comment" rows="4" required="required"></textarea>' .
			'</p>';
	$defaults['title_reply'] = __('Leave a comment', 'casinotheme');
	$defaults['label_submit'] = __('Leave a comment', 'casinotheme');


	return $defaults;
});
