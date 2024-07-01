<?php
/**
 * the-corporate-business Theme Customizer
 *
 * @package the-corporate-business
 */
// Custom Controls.
require get_template_directory() . '/inc/custom-controls/custom-controls.php';

// Sanitize callback.
require get_template_directory() . '/inc/customizer/sanitize-callback.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function the_corporate_business_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset ($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector' => '.site-title a',
				'render_callback' => 'the_corporate_business_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector' => '.site-description',
				'render_callback' => 'the_corporate_business_customize_partial_blogdescription',
			)
		);
	}
	require get_template_directory() . '/inc/customizer/theme-options.php';
	require get_template_directory() . '/inc/customizer/front-options.php';
}
add_action('customize_register', 'the_corporate_business_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function the_corporate_business_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function the_corporate_business_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function the_corporate_business_customize_preview_js()
{
	wp_enqueue_script('the-corporate-business-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), THE_CORPORATE_BUSINESS_S_VERSION, true);
}
add_action('customize_preview_init', 'the_corporate_business_customize_preview_js');
function the_corporate_business_custom_control_scripts()
{
	wp_enqueue_style('the-corporate-business-custom-controls-css', get_template_directory_uri() . '/assets/css/custom-controls.css', array(), '1.0', 'all');
	wp_enqueue_script('the-corporate-business-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array('jquery', 'jquery-ui-core', 'jquery-ui-sortable'), '1.0', true);
}
add_action('customize_controls_enqueue_scripts', 'the_corporate_business_custom_control_scripts');
