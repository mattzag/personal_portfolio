
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-corporate-business
 */

?>
<div class="maincontent">
     <header class="pb-3">
    <h2 class="page-title mb-0">
        <?php
        // Wrap the post title in an anchor tag linking to the post
        echo '<a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>';
        ?>
    </h2>
    <div class="post-details">
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
</header>
<?php the_content(); ?>
</div>
