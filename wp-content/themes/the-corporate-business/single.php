<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package the-corporate-business
 */

get_header();
?>

<main id="primary" class="site-main singlepage">
	<div class="blog-div container-fluid p-5">
		<div class="row">
	  		<div class="col-lg-12 col-md-12 col-12">
			  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <div class="archive-info">
           
                <!-- // Output additional archive information, such as date, author, category, etc. -->
			<span class="date">Published on: <?php the_time('F j, Y'); ?></span>
			<span class="author">by <?php the_author(); ?></span>
			
        </div>
    
		</header>
			    <div class="row">
				 <!-- <div class="col-lg-1">
                 </div> -->
			      <div class="entry-content col-lg-8">
                    <?php
                      // Exclude the featured image from the content
                     echo get_the_content();
                      ?>
					  <span class="categories">Categories: <?php the_category(', '); ?></span>
		
						<!-- /////////// -->
					  <?php
                        if (has_post_thumbnail()) {
                        the_post_thumbnail('full'); // You can specify the image size here
                          }
                        ?>
						<!-- //////// comment box -->
						<div class="pt-5">
						<?php
		          while ( have_posts() ) :
			         the_post();
			        //   get_template_part( 'template-parts/content', get_post_type() );
		             	// If comments are open or we have at least one comment, load up the comment template.
			             if ( comments_open() || get_comments_number() ) :
			              	comments_template();
			             endif;

	               	endwhile; // End of the loop.
	         	?>
				        </div>
                   </div>
				  <div class="col-lg-4 single_sidebar p-4">
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
									// get_template_part('/custom-template.php');
                                } else {
                                // You can display a default set of widgets or a message if the custom sidebar is not active.
                                // For example: echo '<p>No widgets in the custom sidebar.</p>';
                                        }
                                         ?>
							</div>
						</div>
					</div>
                </div>
				<?php
				the_post_navigation(
			          	array(
				                 	'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'the-corporate-business' ) . '</span> <span class="">%title</span>',
					                 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'the-corporate-business' ) . '</span> <span class="">%title</span>',
				            )
		            	);
                        ?>
	            </div>
	

                     <footer class="entry-footer">
                      <?php
                           // Output additional meta information, tags, categories, etc.
                        ?>
                    </footer>
              </article><!-- #post-<?php the_ID(); ?> -->

		</div>
	</div>
	
</main><!-- #main -->
<?php
get_footer();

