<?php
/**
 * Front Options
 *
 * @package the-corporate-business
 */

$wp_customize->add_panel(
    'the_corporate_business_front_section_panel',
    [
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('The Corporate Business Section', 'the-corporate-business'),
    ]
);

//Header Section.
require get_template_directory() . '/inc/customizer/front-options/customize-header.php';

//Service Section.
require get_template_directory() . '/inc/customizer/front-options/customize-services.php';

