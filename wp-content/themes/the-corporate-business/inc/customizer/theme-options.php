<?php
/**
 * Theme Options
 *
 * @package the-corporate-business
 */

$wp_customize->add_panel(
        'the_corporate_business_theme_section_panel',
        [
           'priority' => 30,
           'capability' => 'edit_theme_options',
           'title' => esc_html__('Theme Option Section', 'the-corporate-business'),
        ]
    );

//Post Section.
require get_template_directory() . '/inc/customizer/theme-options/customize-posts.php';

//Footer Section.
require get_template_directory() . '/inc/customizer/theme-options/customize-footer.php';

