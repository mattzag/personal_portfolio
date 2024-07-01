<?php
get_header();

if (is_front_page() && is_home()) { ?>
    <?php
    /**
     * Template Name: Custom Front Page
     */

    get_header(); ?>
    <main id="primary" class="site-main">
        <div class="blog-div container-fluid p-5">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-12">
                    <?php
                    if (have_posts()) :

                        if (is_home() && !is_front_page()) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;

                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            ?>
                         <div class="row mainrow">
                            <div class="col-lg-6">
                             <?php
                             if (has_post_thumbnail()) {
                                 // Wrap the thumbnail in an anchor tag linking to the post
                                   echo '<a href="' . get_permalink() . '">';
                                   the_post_thumbnail('large', array('class' => 'img-fluid'));
                                   echo '</a>';
                                                       }
                                ?>
                             </div>
                          <div class="col-lg-6">
                               <?php
                               get_template_part( 'template-parts/maincontent1', get_post_type() );
                                ?>
                          </div>
                       </div>
                            <?php
                            		
                          endwhile;
                        the_posts_navigation();
                    
                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;
                    ?>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-div">
                        <?php
                        // Display the custom sidebar
                        if (is_active_sidebar('sidebar-1')) {
                            dynamic_sidebar('sidebar-1');
                        } else {
                            // You can display a default set of widgets or a message if the custom sidebar is not active.
                            // For example: echo '<p>No widgets in the custom sidebar.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>

<?php } elseif (is_front_page() && !is_home()) { ?>
    <main id="primary" class="site-main">
        <?php
        get_template_part('template-parts/customizesection/front', 'home');

        get_template_part('template-parts/customizesection/front', 'services');
        ?>
    </main><!-- #main -->
<?php }

get_footer();
?>
