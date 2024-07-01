
<?php if (!get_theme_mod('the_corporate_business_home_display', true)) {
    return;
} ?>
<section id="hero">
    <div class="box-grid">    
        <div class="main-content">        
            <div class="pb-5 d-flex w-100">
                <i class="fa-solid <?php echo esc_html( get_theme_mod('the_corporate_business_homesection_icon1', __('fa-square','the-corporate-business'))) ?> sq-icon1"></i>
                <i class="fa-solid <?php echo esc_html( get_theme_mod('the_corporate_business_homesection_icon2', __('fa-square','the-corporate-business'))) ?> sq-icon2"></i> 
                <i class="fa-solid <?php echo esc_html( get_theme_mod('the_corporate_business_homesection_icon3', __('fa-square','the-corporate-business'))) ?> sq-icon3"></i>
            </div>  
            <?php $the_corporate_business_image = get_theme_mod('the_corporate_business_homesection_gridimage');?>
            <?php if($the_corporate_business_image == ''){?>
                <img class="co-image" src='<?php echo esc_url(get_template_directory_uri() . "/assets/images/grid1.png"); ?>'>
            <?php }else { ?>
                <img class="co-image" src='<?php echo esc_url(get_theme_mod('the_corporate_business_homesection_gridimage')); ?>'>
                
            <?php } ?>
            <!-- <img src="/assets/images/grid.jpg" class="co-image"> -->
                    
        <?php
        $the_corporate_business_texttitle = get_theme_mod('the_corporate_business_homesection_texttitle', 'Empowering');
        if (!empty ($the_corporate_business_texttitle)) {
            echo '<h1>' . esc_html($the_corporate_business_texttitle) . '</h1>';
        } else {
            echo '<h1>' . esc_html(get_the_title()) . '</h1>';
        }
        ?>
        <?php
         $the_corporate_business_subtexttitle = get_theme_mod('the_corporate_business_homesection_subtexttitle', 'Financial Success, One Number at a Time');
         if (!empty ($the_corporate_business_subtexttitle)) {
             echo '<p class="pt-1">' . esc_html($the_corporate_business_subtexttitle) . '</p>';
         }
         ?>
         <?php
         $the_corporate_business_textdescription = get_theme_mod('the_corporate_business_homesection_textdescription', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
         if (!empty ($the_corporate_business_textdescription)) {
             echo '<p class="pt-4" >' . esc_html($the_corporate_business_textdescription) . '</p>';
         }
         ?>
        </div>
        <?php $the_corporate_business_image = get_theme_mod('the_corporate_business_homesection_image');?>
        <?php if($the_corporate_business_image == ''){?>
            <div class="image-main" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . "/assets/images/main.jpg"); ?>'); background-repeat: no-repeat;background-size:cover; width: 450px;height: 550px;position:relative;">
                </div>
        <?php }else { ?>
            <div class="image-main" style="background-image: url('<?php echo esc_url(get_theme_mod('the_corporate_business_homesection_image')); ?>'); background-repeat: no-repeat;background-size:cover; width: 450px;height: 550px;position:relative;">
            </div>
        <?php } ?>
 
    
    
    <?php $the_corporate_business_image = get_theme_mod('the_corporate_business_homesection_image');?>
        <?php if($the_corporate_business_image == ''){?>
            <div class="image-area" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . "/assets/images/main.jpg"); ?>'); background-repeat: no-repeat;background-size:cover; height: 695px; width: 612px;">
             </div>
        <?php }else { ?>
            <div class="image-area" style="background-image: url('<?php echo esc_url(get_theme_mod('the_corporate_business_homesection_image')); ?>'); background-repeat: no-repeat;background-size:cover; height: 695px; width: 612px;">
            </div>
        <?php } ?>
</div>
</section>