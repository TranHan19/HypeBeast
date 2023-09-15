<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kuza
 */
?>
<?php 
	$enable_category     = kuza_minimal_blog_get_option( 'latest_category_enable' );
	$enable_author     = kuza_minimal_blog_get_option( 'latest_author_enable' );
	$enable_comment     = kuza_minimal_blog_get_option( 'latest_comment_enable' );
	$enable_read_more_text     = kuza_minimal_blog_get_option( 'latest_read_more_text_enable' );
    $enable_posted_on     = kuza_minimal_blog_get_option( 'latest_posted_on_enable' );
    $enable_video = kuza_minimal_blog_get_option( 'latest_video_enable' );
    $header_font_size = kuza_minimal_blog_get_option( 'latest_font_size');
	$latest_readmore_text = kuza_minimal_blog_get_option( 'latest_readmore_text' );
	$blog_layout_content_type = kuza_minimal_blog_get_option( 'blog_layout_content_type' );
	$content_align = kuza_minimal_blog_get_option( 'archive_content_align' );
 ?>


<?php if ($blog_layout_content_type=='blog-four'){ ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?> style="width: 100%;">
		<div class="post-item">
			<?php if ($enable_category ==true): ?>
				<div class="entry-meta post-cat <?php echo esc_attr($content_align); ?>">
					<?php kuza_minimal_blog_entry_meta(); ?>
				</div><!-- .entry-meta -->
			<?php endif ?>
			<header class="entry-header <?php echo esc_attr($content_align); ?>">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; ">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-meta posted-on <?php echo esc_attr($content_align); ?>">
				<?php
					if ($enable_posted_on ==true):
					 	kuza_minimal_blog_posted_on(); 
					endif; 
					?>
				<?php 
					if ($enable_comment ==true):
					 	kuza_minimal_blog_comment(); 
					endif;
				?>
				<?php 
					if ($enable_author ==true):
					 	kuza_minimal_blog_author(); 
					endif; 
				?>
			</div><!-- .entry-meta -->
			<div class="post-featured-image">
				<div class="featured-image">
			        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
				</div><!-- .featured-post-image -->
			</div>

			<div class="entry-container <?php echo esc_attr($content_align); ?>">
				<div class="entry-content">
					<?php the_excerpt(); ?>
					<?php if (!empty ($latest_readmore_text) && $enable_read_more_text==true): ?>
						<a href="<?php the_permalink();?>" class="read-more-text"><?php echo esc_html($latest_readmore_text);?></a> 
					<?php endif ?>
				</div><!-- .entry-content -->
				
		        <?php if (!empty ($latest_readmore_text) && $enable_read_more_text==false) { ?>
		          	<div class="latest-read-more"><a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($latest_readmore_text);?></a> </div>
	        	<?php } ?>
			</div><!-- .entry-container -->
			
		</div><!-- .post-item -->
	</article><!-- #post-## -->
<?php } elseif($blog_layout_content_type=='blog-six'){ ?>
	<article id="post-<?php the_ID(); ?>">
			
		<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
            <a href="<?php the_permalink(); ?>" class="post-thumbnail-link"></a>
        </div><!-- .featured-image -->
		<div class="entry-container <?php echo esc_attr($content_align); ?>">
			<header class="entry-header">
				<?php if ($enable_category ==true): ?>
					<div class="entry-meta post-cat">
						<?php kuza_minimal_blog_entry_meta(); ?>
					</div><!-- .entry-meta -->
				<?php endif ?>
				
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; ">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->
			

			<div class="entry-content">
				<?php the_excerpt(); ?>
				<?php if (!empty ($latest_readmore_text) && $enable_read_more_text==true): ?>
					<a href="<?php the_permalink();?>" class="read-more-text"><?php echo esc_html($latest_readmore_text);?></a> 
				<?php endif ?>
				<?php if (($enable_posted_on ==true || ($enable_comment ==true) || ($enable_author ==true)) ): ?>
				<div class="entry-meta posted-on">
					<?php 
						if ($enable_comment ==true):
						 	kuza_minimal_blog_comment(); 
						endif;
					?>
					<?php 
						if ($enable_author ==true):
						 	kuza_minimal_blog_author(); 
						endif; ?>
					<?php
						if ($enable_posted_on ==true):
						 	kuza_minimal_blog_posted_on(); 
						endif; 
						?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			</div><!-- .entry-content -->
		</div><!-- .entry-container -->
	</article><!-- #post-## -->

<?php }