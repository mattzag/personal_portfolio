<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-corporate-business
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'the-corporate-business'); ?></a>
	<header id="masthead" class="site-header">
		<div class="header-logo">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()):
					?>
						<div class="business-box">
	                        <div class="business-title-container">
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
	                        </div>
	                      </div>

						  <!-- <h1 class="site-title box"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1> -->
						  
						<?php
				else:
					?>
						<div class="business-box">
	                        <div class="business-title-container">
							<p class="site-title p-2"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
	                        </div>
	                      </div>
				
						<?php
				endif;?>
			</div>
				<?php
				$the_corporate_business_description = get_bloginfo('description', 'display');
				if ($the_corporate_business_description || is_customize_preview()):
					?>
						<p class="site-description"><?php echo $the_corporate_business_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped  ?></p>
				<?php endif; ?>
		</div>
		
		<nav id="site-navigation" class="main-navigation justify-content-center">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							 <span></span>
							<span></span>
							<span></span>
							</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu_id' => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
