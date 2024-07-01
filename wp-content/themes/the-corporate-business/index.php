<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-corporate-business
 */

get_header();
?>

<main id="primary" class="site-main index1">
    <div class="blog-div container-fluid p-5">
        <div class="row">
            <div class="col-lg-9">
                <?php
                // Query for recent post
                $the_corporate_business_recent_posts_query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 1,
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                ));

                if ($the_corporate_business_recent_posts_query->have_posts()) :
                    while ($the_corporate_business_recent_posts_query->have_posts()) : $the_corporate_business_recent_posts_query->the_post();
                ?>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="blog-grid grid-layout">
                                    <?php get_template_part('template-parts/content', get_post_type()); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <?php
                                // Query for the next post (to be displayed beside the recent post)
                                $the_corporate_business_next_post_query = new WP_Query(array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 2,
                                    'offset'         => 1, // Skip the recent post
                                    'order'          => 'DESC',
                                    'orderby'        => 'date',
                                ));

                                if ($the_corporate_business_next_post_query->have_posts()) :
                                    while ($the_corporate_business_next_post_query->have_posts()) : $the_corporate_business_next_post_query->the_post();
                                ?>
                                        <div class="blog-grid grid-layout">
                                            <?php get_template_part('template-parts/content', get_post_type()); ?>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo 'No next post found.';
                                endif;
                                ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No recent posts found.';
                endif;
                ?>

                <div class="row">
                    <?php
                    // Query for previous posts
                    $the_corporate_business_previous_posts_query = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => -1000,
                        'offset'         => 3, // Skip the recent and next posts
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                    ));

                    if ($the_corporate_business_previous_posts_query->have_posts()) :
                        $post_index = 0;

                        while ($the_corporate_business_previous_posts_query->have_posts()) : $the_corporate_business_previous_posts_query->the_post();
                            if ($post_index % 3 === 0 && $post_index > 0) {
                                // Close the previous row before every third post (excluding the first post)
                                echo '</div><div class="row">';
                            }
                    ?>
                            <div class="col-lg-4">
                                <div class="blog-grid grid-layout">
                                    <?php get_template_part('template-parts/content', get_post_type()); ?>
                                </div>
                            </div>
                    <?php
                            $post_index++;
                        endwhile;

                        // Close the last row if it's not complete
                        echo '</div>';

                        wp_reset_postdata();
                    else :
                        echo 'No previous posts found.';
                    endif;
                    ?>
                </div>


            <div class="col-lg-3">
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
?>
