<?php
/**
 * Header Theme Options
 *
 * @package the-corporate-business
 */
$wp_customize->add_section('the_corporate_business_home_section', array(

	'title' => esc_html__('Home Section', 'the-corporate-business'),
	'capability' => 'edit_theme_options',
	'panel' => 'the_corporate_business_front_section_panel'
));

//home Section
$wp_customize->add_setting('the_corporate_business_home_display', array(
	'default' => true,
	'sanitize_callback' => 'the_corporate_business_sanitize_switch',
));

$wp_customize->add_control(new the_corporate_business_Toggle_Switch_Custom_Control($wp_customize, 'the_corporate_business_home_display_control', array(
	'label' => esc_html__('Display this section', 'the-corporate-business'),
	'section' => 'the_corporate_business_home_section',
	'settings' => 'the_corporate_business_home_display',
)));

// title 
$wp_customize->add_setting('the_corporate_business_homesection_texttitle', array(
	'default' => 'Empowering',
	'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control', array(
	'label' => esc_html__('Title', 'the-corporate-business'),
	'section' => 'the_corporate_business_home_section',
	'settings' => 'the_corporate_business_homesection_texttitle',
	'type' => 'text',
)));

// subtitle 
$wp_customize->add_setting('the_corporate_business_homesection_subtexttitle', array(
	'default' => 'Financial Success, One Number at a Time',
	'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_subtexttitle_control', array(
	'label' => esc_html__('Sub Title', 'the-corporate-business'),
	'section' => 'the_corporate_business_home_section',
	'settings' => 'the_corporate_business_homesection_subtexttitle',
	'type' => 'textarea',
)));

// description
$wp_customize->add_setting('the_corporate_business_homesection_textdescription', array(
	'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control', array(
	'label' => esc_html__('Description', 'the-corporate-business'),
	'section' => 'the_corporate_business_home_section',
	'settings' => 'the_corporate_business_homesection_textdescription',
	'type' => 'textarea',
)));

//Image
$wp_customize->add_setting( 'the_corporate_business_homesection_image', array(

    'sanitize_callback' => 'the_corporate_business_sanitise_custom_url',

    'capability' => 'edit_theme_options',

    'type' => 'theme_mod',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'the_corporate_business_homesection_image', array(

    'label'      => esc_html__( 'Image', 'the-corporate-business' ),

    'section'    => 'the_corporate_business_home_section',

    'settings'   => 'the_corporate_business_homesection_image',
) ) ); 

$wp_customize->add_setting( 'the_corporate_business_homesection_gridimage', array(

		'sanitize_callback' => 'the_corporate_business_sanitise_custom_url',
	
		'capability' => 'edit_theme_options',
	
		'type' => 'theme_mod',
) );
	
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'the_corporate_business_homesection_gridimage', array(
	
		'label'      => esc_html__( 'Grid Image', 'the-corporate-business' ),
	
		'section'    => 'the_corporate_business_home_section',
	
		'settings'   => 'the_corporate_business_homesection_gridimage',
) ) ); 

// Icon 1
$wp_customize->add_setting( 'the_corporate_business_homesection_icon1' , array(
    'default'   => 'fa-square',            
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',            
) );
                
$wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_homesection_icon1', array(             
    'label'      => esc_html__( 'Home Icon 1', 'the-corporate-business' ),          
    'section'    => 'the_corporate_business_home_section',          
    'settings'   => 'the_corporate_business_homesection_icon1',           
    'type' => 'text',            
) ) );

// Icon 2
$wp_customize->add_setting( 'the_corporate_business_homesection_icon2' , array(

    'default'   => 'fa-square',
                
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
                
) );
                
$wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_homesection_icon2', array(
                
    'label'      => esc_html__( 'Home Icon 2', 'the-corporate-business' ),
                
    'section'    => 'the_corporate_business_home_section',
                
    'settings'   => 'the_corporate_business_homesection_icon2',
                
    'type' => 'text',
                
) ) );

// Icon 3
$wp_customize->add_setting( 'the_corporate_business_homesection_icon3' , array(

    'default'   => 'fa-square',
                
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
                
) );
                
$wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_homesection_icon3', array(
                
    'label'      => esc_html__( 'Home Icon 3', 'the-corporate-business' ),
                
    'section'    => 'the_corporate_business_home_section',
                
    'settings'   => 'the_corporate_business_homesection_icon3',
                
    'type' => 'text',
                
) ) );


