<?php
    $mustread_title       = kuza_minimal_blog_get_option( 'mustread_title' );
    $mustread_content_type     = kuza_minimal_blog_get_option( 'mustread_content_type' );
    $enable_category     = kuza_minimal_blog_get_option( 'mustread_category_enable' );
    $enable_content     = kuza_minimal_blog_get_option( 'mustread_content_enable' );
    $enable_author     = kuza_minimal_blog_get_option( 'mustread_author_enable' );
    $enable_posted_on     = kuza_minimal_blog_get_option( 'mustread_posted_on_enable' );
    $number_of_mustread_items  = kuza_minimal_blog_get_option( 'number_of_mustread_items' );
    $mustread_category = kuza_minimal_blog_get_option( 'mustread_category' );
    $header_font_size = kuza_minimal_blog_get_option( 'mustread_font_size');
    $number_of_mustread_column = kuza_minimal_blog_get_option('number_of_mustread_column');
    $content_align = kuza_minimal_blog_get_option('mustread_content_align');
    $excerpt_length =kuza_minimal_blog_get_option( 'mustread_excerpt_length');

    $see_more_txt     = kuza_minimal_blog_get_option( 'mustread_see_all_txt' );
    $see_more_url     = kuza_minimal_blog_get_option( 'mustread_see_all_url' );

    for( $i=1; $i<=$number_of_mustread_items; $i++ ) :
        $mustread_page_posts[] = absint(kuza_minimal_blog_get_option( 'mustread_page_'.$i ) );
        $mustread_post_posts[] = absint(kuza_minimal_blog_get_option( 'mustread_post_'.$i ) );
    endfor;

?>
        <?php if( !empty($mustread_title)):?>
            <div class="section-header">
                <?php if (!empty($mustread_title)): ?>
                    <h2 class="section-title"><?php echo esc_html($mustread_title);?></h2>
                <?php endif; ?>
            </div>       
        <?php endif;?>   

        <div class="must-read-wrapper col-<?php echo esc_attr($number_of_mustread_column); ?> ">
            
          <?php  $args = array (

                'posts_per_page' =>absint( $number_of_mustread_items ),              
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => 1,
                'ignore_sticky_posts' => true, 
                );
                if ( absint( $mustread_category ) > 0 ) {
                    $args['cat'] = absint( $mustread_category );
                }
                $loop = new WP_Query($args);                        
                if ( $loop->have_posts() ) :
                    $i=0;  
                    while ($loop->have_posts()) : $loop->the_post(); $i++;?>        
                        <article>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-featured-image">
                                    <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'blog-thumbnails');?>');">
                                        <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                                        <?php $homepage_video_url = get_post_meta( get_the_ID(), 'kuza-video-url', true ); ?>
                                        <?php if (!empty($homepage_video_url)): ?>
                                           <a href="<?php the_permalink();?>"> <div class="homepage-video-icon"><i class="fa fa-play"></i></div></a>
                                        <?php endif ?>
                                    </div><!-- .featured-image -->
                                </div>
                            <?php endif; ?>
                            <div class="entry-container <?php echo esc_attr($content_align); ?>">
                                <?php if (($enable_category==true) ) : ?>
                                    <div class="entry-meta">
                                        <?php kuza_minimal_blog_entry_meta(); ?>
                                    </div><!-- .entry-meta -->
                                <?php endif; ?>
                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: <?php echo esc_attr($header_font_size); ?>px; " ><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                </header>
                                <?php if (($enable_posted_on==true) || ($enable_author==true)) : ?>
                                    <div class="entry-meta">
                                        <?php 
                                            if (($enable_posted_on==true)) {
                                                kuza_minimal_blog_posted_on();
                                            } 
                                            if (($enable_author==true)) {
                                                kuza_minimal_blog_author();
                                            }
                                         ?>
                                    </div><!-- .entry-meta -->
                                <?php endif; ?>
                                <?php if (($enable_content==true)) : ?>
                                    <div class="entry-content">
                                        <?php 
                                            $excerpt = kuza_minimal_blog_the_excerpt( $excerpt_length );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>
                                    </div><!-- .entry-content -->
                                <?php endif; ?>
                                
                            </div><!-- .entry-container -->
                        </article>

                    <?php endwhile;?>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>