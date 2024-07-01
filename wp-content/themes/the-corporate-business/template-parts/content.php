<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-corporate-business
 */

?>
<?php 
  $the_corporate_business_archive_year  = get_the_time('Y'); 
  $the_corporate_business_archive_month = get_the_time('m'); 
  $the_corporate_business_archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="main-box-post">
		<div class="row">
		          <div class="box-image col-lg-6 col-md-6">
		            <?php the_post_thumbnail(); ?>
		          </div>
		    <div class="new-text col-lg-6 col-md-6">
		          <header class="entry-header">
						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
						 ?>
						
		          	<div class="post-info">
		          		<?php $the_corporate_business_date = get_theme_mod('the_corporate_business_post_hide_date',false);
		             if($the_corporate_business_date === false){ ?>
		              <span class="entry-date"><a href="<?php echo esc_url( get_day_link( $the_corporate_business_archive_year, $the_corporate_business_archive_month, $the_corporate_business_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
		            <?php } ?>

		            <?php $the_corporate_business_author = get_theme_mod('the_corporate_business_post_hide_author',false);
		            if($the_corporate_business_author === false){ ?>
		              <span><?php echo esc_html(get_theme_mod('the_corporate_business_meta_field_separator', '|'));?></span><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
		            <?php } ?>

		            <?php $the_corporate_business_comment = get_theme_mod('the_corporate_business_post_comments',false);
		            if($the_corporate_business_comment === false){ ?>
		              <span><?php echo esc_html(get_theme_mod('the_corporate_business_meta_field_separator', '|'));?></span><span class="entry-comments"><?php comments_number( __('0 Comment', 'the-corporate-business'), __('0 Comments', 'the-corporate-business'), __('% Comments', 'the-corporate-business') ); ?> </span>
		            <?php } ?>

		            <?php $the_corporate_business_time = get_theme_mod('the_corporate_business_post_hide_time',false);
		            if($the_corporate_business_time === false){ ?>
		              <span><?php echo esc_html(get_theme_mod('the_corporate_business_meta_field_separator', '|'));?></span><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
		            <?php } ?>
		            <hr>
		          </div>      
		       
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php				
				the_content(

					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'the-corporate-business' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-corporate-business' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			
		    </div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
