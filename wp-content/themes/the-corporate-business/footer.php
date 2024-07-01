<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-corporate-business
 */

?>

<footer id="colophon" class="site-footer">
	<div class="copyright">
		<?php if (!get_theme_mod('the_corporate_business_footer_text_setting') != '') { ?>
				<a href="<?php echo esc_url(__('https://wordpress.org/', 'the-corporate-business')); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf(esc_html__('Proudly powered by %s', 'the-corporate-business'), 'WordPress');
					?>
				</a>
				<span class="sep mr-1"> | </span>
				<span>
					<?php
					/* translators: 1: Theme name,  */
					printf(esc_html(get_theme_mod('the_corporate_business_footertext_setting', 'The Corporate Business WordPress Theme by')));
					?>
					<?php
					/* translators: 1: Theme author. */
					echo esc_html(get_theme_mod('the_corporate_business_footer_authortext_setting', 'Appnotick'));

					?>
				</span>
		<?php } ?>
	</div>


	<?php $the_corporate_business_scroll = get_theme_mod('the_corporate_business_scroll_to_top', false);
	if ($the_corporate_business_scroll === false) { ?> 
			<a href="#" class="scrollup"><i id="scrolltop" class="<?php echo esc_attr(get_theme_mod('the_corporate_business_scroll_to_top_icon', 'fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll Up', 'the-corporate-business'); ?></span></a>
	<?php } ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
