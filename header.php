<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>

	<div class="header">
		<div class="wrapper header_container" id="header-mobile">
			<div class="header_logo">
				<a href="<?php echo get_home_url() ?>">
					<img src="<?php echo get_site_icon_url() ?>" alt="<?php echo get_bloginfo('name') ?>" />
				</a>
			</div>
			<?php wp_nav_menu(array(
				'theme_location' => 'menu_header',
				'container' => false,
				'menu_class' => 'header_menu'
				)) ?>
			<div class="header_tools">
				<a href="<?php echo home_url('search/') ?>" class="header_tools_search" id="header_search">
					<?php get_template_part('templates/icons/search', 'icon', array("size" => 26)) ?>
				</a>
				<div role="button" class="header_tools_burger">
					<div id="mobile-menu-burger">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
			</div>
		</div>
	</div>

