<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Kuza
 */

if ( ! function_exists( 'kuza_minimal_blog_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
function kuza_minimal_blog_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
}
endif;

add_action( 'kuza_minimal_blog_action_doctype', 'kuza_minimal_blog_doctype', 10 );


if ( ! function_exists( 'kuza_minimal_blog_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
function kuza_minimal_blog_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php
}
endif;
add_action( 'kuza_minimal_blog_action_head', 'kuza_minimal_blog_head', 10 );

if ( ! function_exists( 'kuza_minimal_blog_page_start' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function kuza_minimal_blog_page_start() { 
		$loader_enable = kuza_minimal_blog_get_option( 'preloader_loader_enable' );
	?><div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'kuza-minimal-blog' ); ?>
		</a>
		<?php if ($loader_enable==true): ?>
			<div id="loader">
				<div class="loader-container">
					<div id="preloader">
						<?php kuza_minimal_blog_preloader(); ?>
					</div>
				</div>
			</div>
		<?php endif ?>
	<?php
	}
endif;

add_action( 'kuza_minimal_blog_action_before', 'kuza_minimal_blog_page_start', 10 );

if ( ! function_exists( 'kuza_minimal_blog_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function kuza_minimal_blog_header_start() { ?>

		<header id="masthead" class="site-header nav-shrink" role="banner">
			<?php
	}
endif;
add_action( 'kuza_minimal_blog_action_before_header', 'kuza_minimal_blog_header_start' );

if ( ! function_exists( 'kuza_minimal_blog_header_end' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function kuza_minimal_blog_header_end() {

		?></header> <!-- header ends here --><?php
	}
endif;
add_action( 'kuza_minimal_blog_action_header', 'kuza_minimal_blog_header_end', 15 );

if ( ! function_exists( 'kuza_minimal_blog_content_start' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function kuza_minimal_blog_content_start() { 
	?>
	<div id="content" class="site-content">
	<?php 

	}
endif;

add_action( 'kuza_minimal_blog_action_before_content', 'kuza_minimal_blog_content_start', 10 );

if ( ! function_exists( 'kuza_minimal_blog_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function kuza_minimal_blog_footer_start() {
		if( !(is_home() || is_front_page()) ){
			echo '</div>';
		} ?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo"><?php
		if ( true === kuza_minimal_blog_get_option('scroll_top_visible') ) : ?>
			<div class="backtotop"><i class="fa fa-long-arrow-up"></i></div>
		<?php endif;
	} 
endif;
add_action( 'kuza_minimal_blog_action_before_footer', 'kuza_minimal_blog_footer_start' );


if ( ! function_exists( 'kuza_minimal_blog_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function kuza_minimal_blog_footer_end() {?>
		</footer><?php
	}
endif;
add_action( 'kuza_minimal_blog_action_after_footer', 'kuza_minimal_blog_footer_end', 100 );

