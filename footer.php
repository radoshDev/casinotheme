<?php 
$copyright_text_default = get_bloginfo('name').' © '. date('Y') .'. All rights reserved.';
$copyright_text = get_theme_mod( 'casinotheme_footer_copyright_settings' );

$address_text = get_theme_mod( 'casinotheme_footer_address_settings' );
$site_description = get_bloginfo('description');

?>

<div class="footer">
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
				<a href="mailto:info@email.com"
					class="footer_nav_info_mail underline_anim hide_underline_on_hover">info@email.com</a></br>
				<a href="tel:+18408412569" class="footer_nav_info_tel" >+1 840 841 25 69</a>
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
			<div class="footer_nav_social">
				<h5 class="footer_nav_title">Get in touch</h5>
				<div class="footer_nav_social_box">
					<a href="#" class="footer_nav_social_box_icon hover-facebook">
						<?php get_template_part('templates/icons/facebook', null, array("size" => 24)) ?>
					</a>
					<a href="#" class="footer_nav_social_box_icon hover-twitter">
						<?php get_template_part('templates/icons/twitter', null, array("size" => 24)) ?>
					</a>
					<a href="#" class="footer_nav_social_box_icon hover-instagram">
						<?php get_template_part('templates/icons/instagram', null, array("size" => 24)) ?>
					</a>
				</div>
			</div>
		</div>
		<div class="footer_copyright">
			<?php echo empty($copyright_text) ? $copyright_text_default : $copyright_text ?>
		</div>
	</div>
</div>

<?php wp_footer() ?>
</body>

</html>