<?php 
/**
 * Customize Register
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function casinotheme_customize_register( $wp_customize ) {
	// Add a new section
	$wp_customize->add_section( 'casinotheme_footer', array(
			'title'       => __( 'Footer', 'casinotheme' ),
			'priority'    => 160,
	) );

	/* Address start */
	$wp_customize->add_setting( 'casinotheme_footer_address_settings', array(
		'capability'        => 'edit_theme_options',
) );

	$wp_customize->add_control( 'casinotheme_footer_address_control', array(
		'label'    => __( 'Footer Address', 'casinotheme' ),
		'description' => __('Add your address to the footer.', 'casinotheme'),
		'section'  => 'casinotheme_footer',
		'settings' => 'casinotheme_footer_address_settings',
		'type'     => 'textarea',
	) );
	/* Address end */

	// Add a new setting
	$wp_customize->add_setting( 'casinotheme_footer_copyright_settings', array(
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
	) );

	// Add a control for the setting
	$wp_customize->add_control( 'casinotheme_footer_copyright_control', array(
			'label'    => __( 'Footer Copyright', 'casinotheme' ),
			'description' => __('Add your copyright to the footer.', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_copyright_settings',
			'type'     => 'textarea',
	) );
}
add_action( 'customize_register', 'casinotheme_customize_register' );


?>