<?php
/**
 * Post Theme Options
 *
 * @package the-corporate-business
 */
$wp_customize->add_section( 'the_corporate_business_post_section' , array(

	'title'      => esc_html__( 'Post Section', 'the-corporate-business' ),
	'capability' => 'edit_theme_options',
	'panel' => 'the_corporate_business_theme_section_panel'

	) );

// Post Options - Hide Date.
	$wp_customize->add_setting(
		'the_corporate_business_post_hide_date',
		array(
			'default'           => false,
			'sanitize_callback' => 'the_corporate_business_sanitize_switch',
		)
	);

	$wp_customize->add_control(
		new the_corporate_business_Toggle_Switch_Custom_Control(
			$wp_customize,
			'the_corporate_business_post_hide_date',
			array(
				'label'   => esc_html__( 'Hide Date', 'the-corporate-business' ),
				'section' => 'the_corporate_business_post_section',
			)
		)
	);

	// Post Options - Hide Author.
	$wp_customize->add_setting(
		'the_corporate_business_post_hide_author',
		array(
			'default'           => false,
			'sanitize_callback' => 'the_corporate_business_sanitize_switch',
		)
	);

	$wp_customize->add_control(
		new the_corporate_business_Toggle_Switch_Custom_Control(
			$wp_customize,
			'the_corporate_business_post_hide_author',
			array(
				'label'   => esc_html__( 'Hide Author', 'the-corporate-business' ),
				'section' => 'the_corporate_business_post_section',
			)
		)
	);

	// Post Options - Hide Time.
	$wp_customize->add_setting(
		'the_corporate_business_post_hide_time',
		array(
			'default'           => false,
			'sanitize_callback' => 'the_corporate_business_sanitize_switch',
		)
	);

	$wp_customize->add_control(
		new the_corporate_business_Toggle_Switch_Custom_Control(
			$wp_customize,
			'the_corporate_business_post_hide_time',
			array(
				'label'   => esc_html__( 'Hide Time', 'the-corporate-business' ),
				'section' => 'the_corporate_business_post_section',
			)
		)
	);