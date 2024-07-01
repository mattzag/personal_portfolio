<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package the-corporate-business
 */

get_header();
?>
<main id="primary" class="site-main searchpage pt-5">
		<?php
            $the_corporate_business_theme_lay = get_theme_mod( 'the_corporate_business_theme_options','Right Sidebar');
            if($the_corporate_business_theme_lay == 'Left Sidebar'){ ?>
                <div class="row m-3">
                    <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-8 col-md-8">
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','the-corporate-business'), esc_html( get_search_query() ) ); ?></h1> 
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            <?php }else if($the_corporate_business_theme_lay == 'Right Sidebar'){ ?>
                <div class="row m-3">
                    <div id="our-services" class="services col-lg-8 col-md-8"> 
                        <h1 class="entry-title"><?php /* translators: %s: search term */
                        printf( esc_html__( 'Results For: %s','the-corporate-business'), esc_html( get_search_query() ) ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>                       
                      
                    </div>
                    <div class="col-lg-4 col-md-4 widget-area search_sidebar" id="sidebar">
                        <?php dynamic_sidebar('sidebar-1');?>
                            
                        </div>
                </div>
            <?php } ?>
			<div class="clearfix"></div>

	</main><!-- #main -->

<?php
get_footer();
