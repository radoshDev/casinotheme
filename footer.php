<?php 
$copyright_text_default = get_bloginfo('name').' © '. date('Y') .'. All rights reserved.';
$copyright_text = get_theme_mod( 'casinotheme_footer_settings' );

?>

<div class="footer">
	<div class="wrapper footer_container">
		<div class="footer_navigation"></div>
		<div class="footer_copyright">
			<?php echo empty($copyright_text) ? $copyright_text_default : $copyright_text ?>
		</div>
	</div>
</div>

<?php wp_footer() ?>
</body>

</html>