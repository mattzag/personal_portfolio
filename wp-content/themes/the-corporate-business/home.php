<?php
get_header();
?>
	<main id="primary" class="site-main home">	
		<?php
         if ( get_theme_mod( 'the_corporate_business_home_display') === true) {?>
            <section class="header-section" id="homediv">
                <div class="container div-container">
                    <?php $the_corporate_business_the_query = new WP_Query('posts_per_page=1'); ?>

                    <?php while ($the_corporate_business_the_query -> have_posts()) : $the_corporate_business_the_query -> the_post();  ?>
                        <?php 
                            the_post();                        

                            get_template_part('template-parts/content', 'home');                      
                        ?>
                    <?php endwhile;?> 
                    <?php wp_reset_postdata(); ?>  
                </div>          
            </section>
        <?php } ?>

        <?php
         if ( get_theme_mod( 'the_corporate_business_service_display') === true) {?>
            <section class="service-section">
                <div class="container service-div text-center">
                    <?php $the_corporate_business_the_query = new WP_Query('posts_per_page=1'); ?>

                    <?php while ($the_corporate_business_the_query -> have_posts()) : $the_corporate_business_the_query -> the_post();  ?>
                    
                        <?php 
                            the_post();                        

                            get_template_part('template-parts/content', 'service');                      
                        ?>
                    <?php endwhile;?> 
                    <?php wp_reset_postdata(); ?> 
                </div>
            </section>
        <?php }?>


		<div class="container-fluid home">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-12">
					<?php
						if ( have_posts() ) :
							if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						wp_reset_postdata();
					?>
					
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

		

	</main><!-- #main -->

<?php

get_footer();