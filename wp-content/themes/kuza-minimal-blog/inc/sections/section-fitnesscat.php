<?php
    
    $fitnesscat_title    = kuza_minimal_blog_get_option( 'fitnesscat_title' );
    $fitnesscat_subtitle    = kuza_minimal_blog_get_option( 'fitnesscat_subtitle' );
    $enable_small_category     = kuza_minimal_blog_get_option( 'fitnesscat_small_category_enable' );
    $enable_category     = kuza_minimal_blog_get_option( 'fitnesscat_category_enable' );
    $view_more_txt     = kuza_minimal_blog_get_option( 'fitnesscat_see_all_txt' );
    $enable_content     = kuza_minimal_blog_get_option( 'fitnesscat_content_enable' );
    $enable_author     = kuza_minimal_blog_get_option( 'fitnesscat_author_enable' );
    $enable_posted_on     = kuza_minimal_blog_get_option( 'fitnesscat_posted_on_enable' );
    $number_of_fitnesscat_items  = kuza_minimal_blog_get_option( 'number_of_fitnesscat_items' );
    $fitnesscat_category = kuza_minimal_blog_get_option( 'fitnesscat_category' );
    $fitnesscat_header_font_size =kuza_minimal_blog_get_option( 'fitnesscat_section_header_font_size');
    $fitnesscat_subtitle_font_size =kuza_minimal_blog_get_option( 'fitnesscat_subtitle_font_size');
    $header_font_size = kuza_minimal_blog_get_option( 'fitnesscat_font_size');
    $fitnesscat_layout = kuza_minimal_blog_get_option('fitnesscat_layout_option');
    $excerpt_length =kuza_minimal_blog_get_option( 'fitnesscat_excerpt_length');
    $home_layout = kuza_minimal_blog_get_option( 'homepage_design_layout_options');
    $fitnesscat_content_type     = kuza_minimal_blog_get_option( 'fitnesscat_content_type' );
    $number_of_fitnesscat_items  = kuza_minimal_blog_get_option( 'number_of_fitnesscat_items' );
    for( $i=1; $i<=$number_of_fitnesscat_items; $i++ ) :
        $fitnesscat_product_category[] = absint(kuza_minimal_blog_get_option( 'fitnesscat_product_category_'.$i ) );
    endfor;
    $small_category ='';
    if (function_exists('z_taxonomy_image_url') && !empty(z_taxonomy_image_url())){
          $fitnesscat_image = z_taxonomy_image_url(); 
        }
?>
<style> 
        <?php if ($fitnesscat_subtitle_font_size != 0): ?>
            #fitnesscat .section-subtitle{
                font-size:<?php echo esc_html($fitnesscat_subtitle_font_size); ?>px;
            }
        <?php endif ?>
        <?php if ($fitnesscat_header_font_size != 0): ?>
            #fitnesscat .section-title{
                font-size:<?php echo esc_html($fitnesscat_header_font_size); ?>px;
            }
        <?php endif ?>

        <?php if ($header_font_size != 0): ?>
            #fitnesscat .entry-title{
                font-size:<?php echo esc_html($header_font_size); ?>px;
            }
        <?php endif ?>
    </style>
    <div class="section-header">
        <?php if( !empty($fitnesscat_title)):?>
            <h2 class="section-title"><?php echo esc_html($fitnesscat_title);?></h2>
        <?php endif;?>
        <?php if (!empty($fitnesscat_subtitle)): ?>
            <h3 class="section-subtitle"><?php echo esc_html($fitnesscat_subtitle);?></h3>
        <?php endif; ?>
    </div>
<?php if (!empty($fitnesscat_category)): ?>
    <?php if ($enable_small_category==false) {
        $small_category='small-category';
    } ?>
   <div class="fitnesscat-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": false, "arrows":false, "autoplay": true, "fade": false }'>
        <?php if ($fitnesscat_content_type=='post-category'): ?>
            <?php foreach ( $fitnesscat_category as $category ) : ?>
                <article class="fitnesscat-wrapper">
                    <div class="fitnesscat-items">
                        <?php $category_id = get_cat_ID($category); 
                        if (function_exists('z_taxonomy_image_url') && !empty(z_taxonomy_image_url($category))){ ?>
                            <div class="fitnesscat-featured-image" style="background-image: url('<?php echo z_taxonomy_image_url($category); ?>');">  
                               <?php if ($home_layout=='home-fitness' || $home_layout=='home-classic-blog'): ?>
                                    <a href="<?php echo esc_url(get_category_link($category)); ?>" class="post-thumbnail-link"></a>
                                <?php endif ?> 
                                <?php if ($home_layout=='home-minimal-blog'): ?>
                                    <a href="<?php echo esc_url(get_category_link($category)); ?>"><img src="<?php echo z_taxonomy_image_url($category); ?>" /></a>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                        <div class="fitnesscat-category-header">
                            <div class="fitnesscat-category-title">
                                <a href="<?php echo esc_url(get_category_link($category)); ?>">
                                    <?php echo esc_html( get_cat_name($category)); ?>   
                                </a>
                            </div>
                        </div>
                    </div>
                </article><!-- .section-content -->
            <?php endforeach; ?> 
        <?php endif ?>
    </div><!-- .content-wrapper -->
<?php endif; ?>

