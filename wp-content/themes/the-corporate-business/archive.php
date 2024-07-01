<?php
/** 
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-corporate-business
 */

get_header();
?>
<main id="primary" class="site-main archivepage">
    <div class="blog-div container-fluid arc p-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
                </header><!-- .page-header -->

                <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
            </div>
            <div class="col-lg-4 col-md-4 col-12 ">
                <div class="sidebar-div">
                    <?php 
						// The Loop
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();

								// Your single post content here

							endwhile;
						endif;

						// Display the custom sidebar
						if ( is_active_sidebar( 'sidebar-1' ) ) {
							dynamic_sidebar( 'sidebar-1' );
						} else {
							// You can display a default set of widgets or a message if the custom sidebar is not active.
							// For example: echo '<p>No widgets in the custom sidebar.</p>';
						}
						?>
                </div>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php

get_footer();