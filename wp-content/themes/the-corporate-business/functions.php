<?php
/**
 * the-corporate-business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the-corporate-business
 */
if (!defined('THE_CORPORATE_BUSINESS_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('THE_CORPORATE_BUSINESS_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_corporate_business_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on the-corporate-business, use a find and replace
	 * to change 'the-corporate-business' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('the-corporate-business', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header' => esc_html__('Header', 'the-corporate-business'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_corporate_business_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'the_corporate_business_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_corporate_business_content_width()
{
	$GLOBALS['content_width'] = apply_filters('the_corporate_business_content_width', 640);
}
add_action('after_setup_theme', 'the_corporate_business_content_width', 0);


function the_corporate_business_custom_content_more($content)
{
	// Check if the content length is greater than 20 words
	$word_count = str_word_count($content);
	if ($word_count > 50) {
		// Display the first 20 words
		$content = wp_trim_words($content, 50, '...');

		// Add a "Read More" link
		$content .= ' <a href="' . get_permalink() . '">' . __('Read More', 'the-corporate-business') . '</a>';
	}

	return $content;
}
add_filter('the_content', 'the_corporate_business_custom_content_more');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function the_corporate_business_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'the-corporate-business'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'the-corporate-business'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'the_corporate_business_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function the_corporate_business_scripts()
{
	wp_enqueue_style('the-corporate-business-style', get_stylesheet_uri(), array(), THE_CORPORATE_BUSINESS_S_VERSION);
	wp_style_add_data('the-corporate-business-style', 'rtl', 'replace');
	wp_enqueue_style('the-corporate-business-bootstrap', get_stylesheet_directory_uri() . "/assets/css/the-corporate-business-bootstrap.min.css", '', THE_CORPORATE_BUSINESS_S_VERSION);
	wp_enqueue_style('the-corporate-business-bootstrap', get_stylesheet_directory_uri() . "/assets/css/custom-controls.css", '', THE_CORPORATE_BUSINESS_S_VERSION);
	wp_enqueue_style('the-corporate-business-fonts', get_stylesheet_directory_uri() . "/assets/the-corporate-business-fonts/fonts.css", '', THE_CORPORATE_BUSINESS_S_VERSION);	

	// js
	wp_enqueue_script('the-corporate-business-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THE_CORPORATE_BUSINESS_S_VERSION, true);
	wp_enqueue_script('the-corporate-business-fontawesome', get_stylesheet_directory_uri() . '/assets/js/fontawesome.js', array(), THE_CORPORATE_BUSINESS_S_VERSION, true);
	wp_enqueue_script('the-corporate-business-jquery.slim.min.js', get_stylesheet_directory_uri() . '/assets/js/the-corporate-business-jquery.slim.min.js', array(), THE_CORPORATE_BUSINESS_S_VERSION, true);
	wp_enqueue_script('the-corporate-business-custom.js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), THE_CORPORATE_BUSINESS_S_VERSION, true);
	wp_enqueue_script('the-corporate-business-bootstrap.min.js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), THE_CORPORATE_BUSINESS_S_VERSION, true);
	wp_enqueue_script('the-corporate-business-bootstrap.bundle.min.js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), THE_CORPORATE_BUSINESS_S_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'the_corporate_business_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// //////// pagination 
if (!function_exists('the_corporate_business_post_pagination')):
	function the_corporate_business_post_pagination()
	{
		global $wp_query;
		$the_corporate_business_pager = 9; // need an unlikely integer

		echo paginate_links(
			array(
				'base' => str_replace($the_corporate_business_pager, '%#%', esc_url(get_pagenum_link($the_corporate_business_pager))),
				'format' => '?paged=%#%',
				'current' => max(1, get_query_var('paged')),
				'total' => $wp_query->max_num_pages
			));
	}
endif;
