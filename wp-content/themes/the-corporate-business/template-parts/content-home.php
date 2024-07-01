<?php 
	$the_corporate_business_homeimg = get_theme_mod('the_corporate_business_homesection_image')?>
					<?php if($the_corporate_business_homeimg == ''){ ?>
						<img class="container-img" src="<?php echo esc_url(get_the_post_thumbnail_url());?>" style="width:100%; height: 600px;">
						 <!-- <?php the_post_thumbnail();?> -->
					<?php }else {?>
						<img class="container-img" src="<?php echo esc_url(get_theme_mod('the_corporate_business_homesection_image','post'))?>" alt="Snow" style="width:100%; height: 600px;">
					<?php } ?>
					<div class="para-container">
						<div class="para-div text-uppercase w3-animate-opacity">
                            
							<?php
							$the_corporate_business_texttitle = get_theme_mod('the_corporate_business_homesection_texttitle');
							if ($the_corporate_business_texttitle != '') {
								?> <h1><?php echo esc_html($the_corporate_business_texttitle);?></h1><?php
							}else{ ?>
								<h1><?php echo get_the_title(); ?></h1><?php
							}
							?>

						</div>
					</div>