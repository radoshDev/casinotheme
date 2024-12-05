<?php 
$site_description = get_bloginfo('description');

$address_text = get_theme_mod( 'casinotheme_footer_address_settings' );
$email = get_theme_mod( 'casinotheme_footer_email_settings' );
$phone = get_theme_mod( 'casinotheme_footer_phone_settings' );
$facebook_link = get_theme_mod( 'casinotheme_footer_facebook_settings' );
$tweeter_link = get_theme_mod( 'casinotheme_footer_tweeter_settings' );
$instagram_link = get_theme_mod( 'casinotheme_footer_instagram_settings' );


$copyright_text_default = get_bloginfo('name').' © '. date('Y') .'. All rights reserved.';
$copyright_text = get_theme_mod( 'casinotheme_footer_copyright_settings' );
?>

<footer class="footer">
	<div class="wrapper footer_container">
		<div class="footer_nav">
			<div class="footer_nav_logo">
				<a href="<?php echo get_home_url() ?>">
					<img src="<?php echo get_site_icon_url() ?>" alt="<?php echo get_bloginfo('name') ?>" />
				</a>
				<?php if ($site_description): ?>
					<p class="footer_nav_logo_description"><?php echo get_bloginfo('description') ?></p>
				<?php endif; ?>
			</div>
			<div class="footer_nav_info">
				<h5 class="footer_nav_title">Office</h5>
				<div class="footer_nav_info_address">
					<?php echo $address_text;?>
				</div>
				<?php if ($email) : ?>
					<a href="mailto:<?php echo $email; ?>"
						class="footer_nav_info_mail underline_anim hide_underline_on_hover"><?php echo $email; ?></a>
				<?php endif; ?>
				<?php if ($phone) : ?>
					<a href="tel:<?php echo preg_replace('/[^\d+]/', '', $phone); ?>" class="footer_nav_info_tel" ><?php echo $phone; ?></a>
				<?php endif; ?>
			</div>
			<div class="footer_nav_links">
				<h5 class="footer_nav_title">Links</h5>
				<?php wp_nav_menu(array(
					'theme_location' => 'menu_footer',
					'container' => false,
					'menu_class' => 'footer_nav_links_menu',
					'walker' => new CasinoTheme_Menu_Footer()
				)) ?>
			</div>
			<?php if ($facebook_link || $tweeter_link || $instagram_link) : ?>
			<div class="footer_nav_social">
				<h5 class="footer_nav_title">Get in touch</h5>
				<div class="footer_nav_social_box">
					<?php if ($facebook_link) : ?>
						<a href="<?php echo $facebook_link;?>" target="_blank" class="footer_nav_social_box_icon hover-facebook">
							<?php get_template_part('templates/icons/facebook', null, array("size" => 24)) ?>
						</a>
					<?php endif; ?>
					<?php if ($tweeter_link) : ?>
						<a href="<?php echo $tweeter_link; ?>" target="_blank" class="footer_nav_social_box_icon hover-twitter">
							<?php get_template_part('templates/icons/twitter', null, array("size" => 24)) ?>
						</a>
					<?php endif; ?>
					<?php if ($instagram_link) : ?>
						<a href="<?php echo $instagram_link; ?>" target="_blank" class="footer_nav_social_box_icon hover-instagram">
							<?php get_template_part('templates/icons/instagram', null, array("size" => 24)) ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="footer_copyright">
			<?php echo empty($copyright_text) ? $copyright_text_default : $copyright_text ?>
		</div>
	</div>
</footer>

<?php wp_footer() ?>
</body>

</html>