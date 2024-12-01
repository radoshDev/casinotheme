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
