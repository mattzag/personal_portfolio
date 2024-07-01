<?php
/**
 * Footer Theme Options
 *
 * @package the-corporate-business
 */
$wp_customize->add_section( 'the_corporate_business_footer_section' , array(

	'title'      => esc_html__( 'Footer Section', 'the-corporate-business' ),
	'capability' => 'edit_theme_options',
	'panel' => 'the_corporate_business_theme_section_panel'

	) );

	$wp_customize->add_setting( 'the_corporate_business_footertext_setting' , array(

	'default'   => esc_html__('the_corporate_business WordPress Theme by','the-corporate-business'),

	'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',

	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'the_corporate_business_aboutsection_text_control', array(

	'label'      => esc_html__( 'Footer Text', 'the-corporate-business' ),

	'section'    => 'the_corporate_business_footer_section',

	'settings'   => 'the_corporate_business_footertext_setting',    

	) ) );

	$wp_customize->add_setting( 'the_corporate_business_footer_authortext_setting' , array(

	'default'   => esc_html__('Appnotick','the-corporate-business'),

	'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',

	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'the_corporate_business_footerauthor_text_control', array(

	'label'      => esc_html__( 'Author Text', 'the-corporate-business' ),

	'section'    => 'the_corporate_business_footer_section',

	'settings'   => 'the_corporate_business_footer_authortext_setting',    

	) ) );

	$wp_customize->add_setting(
		'the_corporate_business_scroll_to_top',
		array(
			'default'           => false,
			'sanitize_callback' => 'the_corporate_business_sanitize_switch',
		)
	);

	$wp_customize->add_control(
		new the_corporate_business_Toggle_Switch_Custom_Control(
			$wp_customize,
			'the_corporate_business_scroll_to_top',
			array(
				'label'   => esc_html__( 'Hide Scroll to top section', 'the-corporate-business' ),
				'section'    => 'the_corporate_business_footer_section',
			)
		)
	);