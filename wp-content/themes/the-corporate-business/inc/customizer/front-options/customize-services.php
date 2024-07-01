<?php
/**
 * Service Theme Options
 *
 * @package the-corporate-business
 */
$wp_customize->add_section( 'the_corporate_business_sarvices_section' , array(
    'title'      => esc_html__( 'Services Section', 'the-corporate-business' ),
    'capability' => 'edit_theme_options',
    'panel' => 'the_corporate_business_front_section_panel'
    ) );

    //sarvices Section
    $wp_customize->add_setting( 'the_corporate_business_services_display' , array(
    'default'   => true,
    'sanitize_callback' => 'the_corporate_business_sanitize_switch',
    ) );

    $wp_customize->add_control( new the_corporate_business_Toggle_Switch_Custom_Control( $wp_customize, 'the_corporate_business_services_display_control', array(
    'label'      => esc_html__( 'Display this section', 'the-corporate-business' ),
    'section'    => 'the_corporate_business_sarvices_section',
    'settings'   => 'the_corporate_business_services_display',
    ) ) );

    // icons

    $wp_customize->add_setting( 'the_corporate_business_services_icon1' , array(

    'default'   => 'fa-coins',
    
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    
    ) );
    
    $wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_services_icon1', array(
    
    'label' => esc_html__( 'Service Icon 1', 'the-corporate-business' ),
    
    'section' => 'the_corporate_business_sarvices_section',
    
    'settings'   => 'the_corporate_business_services_icon1',
    
    'type' => 'text',
    
    'extra' =>'Add the fontawesome class ex: "fa-map-marker"'
    
    ) ) );

    //2

    $wp_customize->add_setting( 'the_corporate_business_services_icon2' , array(

    'default'   => 'fa-money-bill',
        
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
        
    ) );
        
    $wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_services_icon2', array(
        
    'label'      => esc_html__( 'Service Icon 2', 'the-corporate-business' ),
        
    'section'    => 'the_corporate_business_sarvices_section',
        
    'settings'   => 'the_corporate_business_services_icon2',
        
    'type' => 'text',       
    
        
    ) ) );

    //3

    $wp_customize->add_setting( 'the_corporate_business_services_icon3' , array(

    'default'   => 'fa-book-open-reader',
            
   'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
            
    ) );
            
    $wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_services_icon3', array(
            
    'label'      => esc_html__( 'Service Icon 3', 'the-corporate-business' ),
            
    'section'    => 'the_corporate_business_sarvices_section',
            
    'settings'   => 'the_corporate_business_services_icon3',
            
    'type' => 'text',
            
    ) ) );

    //4

    $wp_customize->add_setting( 'the_corporate_business_services_icon4' , array(

    'default'   => 'fa-audible',
                
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
                
    ) );
                
    $wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_services_icon4', array(
                
    'label'      => esc_html__( 'Service Icon 4', 'the-corporate-business' ),
                
    'section'    => 'the_corporate_business_sarvices_section',
                
    'settings'   => 'the_corporate_business_services_icon4',
                
    'type' => 'text',
                
    ) ) );

    //5

    $wp_customize->add_setting( 'the_corporate_business_services_icon5' , array(

    'default'   => 'fa-square-parking',
                    
    'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
                    
    ) );
                    
    $wp_customize->add_control( new Custom_Text_Control( $wp_customize, 'the_corporate_business_services_icon5', array(
                    
    'label'      => esc_html__( 'Service Icon 5', 'the-corporate-business' ),
                    
    'section'    => 'the_corporate_business_sarvices_section',
                    
    'settings'   => 'the_corporate_business_services_icon5',
                    
    'type' => 'text',
                    
    ) ) );

    //seperator
    $wp_customize->add_setting('separator_service1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        ));
        $wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator_service1', array(
            'settings'      => 'separator_service1',
            'section'       => 'the_corporate_business_sarvices_section',
        )));

    // title 
    $wp_customize->add_setting('the_corporate_business_servicesection_texttitle1', array(
        'default' => 'Financial Consultation',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control1', array(
        'label' => esc_html__('Service Title 1', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_texttitle1',
        'type' => 'text',
    )));

    // description
    $wp_customize->add_setting('the_corporate_business_servicesection_textdescription1', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control1', array(
        'label' => esc_html__('Description', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_textdescription1',
        'type' => 'textarea',
    )));

    //seperator
    $wp_customize->add_setting('separator_service2', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        ));
        $wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator_service2', array(
            'settings'      => 'separator_service2',
            'section'       => 'the_corporate_business_sarvices_section',
        )));

    // title 
    $wp_customize->add_setting('the_corporate_business_servicesection_texttitle2', array(
        'default' => 'Tax Planning',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control2', array(
        'label' => esc_html__('Service Title 2', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_texttitle2',
        'type' => 'text',
    )));

    // description
    $wp_customize->add_setting('the_corporate_business_servicesection_textdescription2', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control2', array(
        'label' => esc_html__('Description', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_textdescription2',
        'type' => 'textarea',
    )));

    //seperator
    $wp_customize->add_setting('separator_service3', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        ));
        $wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator_service3', array(
            'settings'      => 'separator_service3',
            'section'       => 'the_corporate_business_sarvices_section',
        )));

    // title 
    $wp_customize->add_setting('the_corporate_business_servicesection_texttitle3', array(
        'default' => 'Service Names',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control3', array(
        'label' => esc_html__('Service Title 3', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_texttitle3',
        'type' => 'text',
    )));

    // description
    $wp_customize->add_setting('the_corporate_business_servicesection_textdescription3', array(
        'default' => 'Lorem ipsum dolor consectetur adipiscing elit, sed do agna aliqua.',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control3', array(
        'label' => esc_html__('Description', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_textdescription3',
        'type' => 'textarea',
    )));

    //seperator
    $wp_customize->add_setting('separator_service4', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        ));
        $wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator_service4', array(
            'settings'      => 'separator_service4',
            'section'       => 'the_corporate_business_sarvices_section',
        )));

    // title 
    $wp_customize->add_setting('the_corporate_business_servicesection_texttitle4', array(
        'default' => 'Book keeping Service',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control4', array(
        'label' => esc_html__('Service Title 4', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_texttitle4',
        'type' => 'text',
    )));

    // description
    $wp_customize->add_setting('the_corporate_business_servicesection_textdescription4', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control4', array(
        'label' => esc_html__('Description', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_textdescription4',
        'type' => 'textarea',
    )));

    //seperator
    $wp_customize->add_setting('separator_service5', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        ));
        $wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator_service5', array(
            'settings'      => 'separator_service5',
            'section'       => 'the_corporate_business_sarvices_section',
        )));

    // title 
    $wp_customize->add_setting('the_corporate_business_servicesection_texttitle5', array(
        'default' => 'Auditing Solution',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control5', array(
        'label' => esc_html__('Service Title 5', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_texttitle5',
        'type' => 'text',
    )));

    // description
    $wp_customize->add_setting('the_corporate_business_servicesection_textdescription5', array(
        'default' => 'Lorem ipsum dolor sit amet, dolore magna aliqua.',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control5', array(
        'label' => esc_html__('Description', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_textdescription5',
        'type' => 'textarea',
    )));

    //seperator
    $wp_customize->add_setting('separator_service6', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        ));
        $wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator_service6', array(
            'settings'      => 'separator_service6',
            'section'       => 'the_corporate_business_sarvices_section',
        )));

    // title 
    $wp_customize->add_setting('the_corporate_business_servicesection_texttitle6', array(
        'default' => 'Auditing Solution',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_texttitle_control6', array(
        'label' => esc_html__('Service Title 6', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_texttitle6',
        'type' => 'text',
    )));

    // description
    $wp_customize->add_setting('the_corporate_business_servicesection_textdescription6', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'sanitize_callback' => 'the_corporate_business_sanitise_custom_text',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'the_corporate_business_homesection_textdescription_control6', array(
        'label' => esc_html__('Description', 'the-corporate-business'),
        'section' => 'the_corporate_business_sarvices_section',
        'settings' => 'the_corporate_business_servicesection_textdescription5',
        'type' => 'textarea',
    )));


		