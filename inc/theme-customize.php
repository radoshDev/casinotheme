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
		'label'    => __( 'Address', 'casinotheme' ),
		'description' => __('Add your address to the footer.', 'casinotheme'),
		'section'  => 'casinotheme_footer',
		'settings' => 'casinotheme_footer_address_settings',
		'type'     => 'textarea',
	) );
	/* Address end */

	/* Email start */
	$wp_customize->add_setting( 'casinotheme_footer_email_settings', array(
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'casinotheme_footer_email_control', array(
			'label'    => __( 'Email', 'casinotheme' ),
			'description' => __('Add your email to the footer.', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_email_settings',
			'type'     => 'email',
	) );
	/* Email end */

	/* Phone start */
	$wp_customize->add_setting( 'casinotheme_footer_phone_settings', array(
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'casinotheme_footer_phone_control', array(
			'label'    => __( 'Phone number', 'casinotheme' ),
			'description' => __('Add your phone to the footer.', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_phone_settings',
			'type'     => 'text',
	) );
	/* Phone end */

	/* Facebook link start */
	$wp_customize->add_setting( 'casinotheme_footer_facebook_settings', array(
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'casinotheme_footer_facebook_control', array(
			'label'    => __( 'Facebook link', 'casinotheme' ),
			'description' => __('Add your facebook link or leave blank', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_facebook_settings',
			'type'     => 'text',
	) );
	/* Facebook link end */

	/* Tweeter link start */
	$wp_customize->add_setting( 'casinotheme_footer_tweeter_settings', array(
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'casinotheme_footer_tweeter_control', array(
			'label'    => __( 'Tweeter link', 'casinotheme' ),
			'description' => __('Add your tweeter link or leave blank.', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_tweeter_settings',
			'type'     => 'text',
	) );
	/* Tweeter link end */

	/* Instagram link start */
	$wp_customize->add_setting( 'casinotheme_footer_instagram_settings', array(
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'casinotheme_footer_instagram_control', array(
			'label'    => __( 'Instagram link', 'casinotheme' ),
			'description' => __('Add your instagram link or leave blank.', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_instagram_settings',
			'type'     => 'text',
	) );
	/* Tweeter link end */

	/* Copyright start */
	$wp_customize->add_setting( 'casinotheme_footer_copyright_settings', array(
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'casinotheme_footer_copyright_control', array(
			'label'    => __( 'Copyright', 'casinotheme' ),
			'description' => __('Add your copyright to the footer.', 'casinotheme'),
			'section'  => 'casinotheme_footer',
			'settings' => 'casinotheme_footer_copyright_settings',
			'type'     => 'textarea',
	) );
	/* Copyright end */
}
add_action( 'customize_register', 'casinotheme_customize_register' );


?>