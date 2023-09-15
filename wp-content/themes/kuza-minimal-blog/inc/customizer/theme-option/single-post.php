<?php 
/**
 * Theme Options.
 *
 * @package Kuza
 */

$default = kuza_minimal_blog_get_default_theme_options();

// Single Post Setting Section starts
$wp_customize->add_section('section_single_post', 
	array(    
	'title'       => __('Single Post Option', 'kuza-minimal-blog'),
	'panel'       => 'theme_option_panel'    
	)
);

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_post_header_image_as_header_image_enable]', array(
	'default'           => $default['single_post_header_image_as_header_image_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_post_header_image_as_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image As Header Image', 'kuza-minimal-blog' ),
	'description' => __('If this option is Enable then Display Header Image as Header Image Otherwise display Featured Image as Header Image  ', 'kuza-minimal-blog'),
	'section'           => 'section_single_post',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[single_post_category_enable]', array(
	'default'           => $default['single_post_category_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_post_category_enable]', array(
	'label'             => esc_html__( 'Enable Category', 'kuza-minimal-blog' ),
	'section'           => 'section_single_post',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[single_post_author_enable]', array(
	'default'           => $default['single_post_author_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_post_author_enable]', array(
	'label'             => esc_html__( 'Enable Author', 'kuza-minimal-blog' ),
	'section'           => 'section_single_post',
	'type'              => 'checkbox',
) );

// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[single_post_posted_on_enable]', array(
	'default'           => $default['single_post_posted_on_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_post_posted_on_enable]', array(
	'label'             => esc_html__( 'Enable Date', 'kuza-minimal-blog' ),
	'section'           => 'section_single_post',
	'type'              => 'checkbox',

) );

// Add Single Post Pagimation enable setting and control.
$wp_customize->add_setting( 'theme_options[single_post_pagination_enable]', array(
	'default'           => $default['single_post_pagination_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_post_pagination_enable]', array(
	'label'             => esc_html__( 'Enable Pagination', 'kuza-minimal-blog' ),
	'section'           => 'section_single_post',
	'type'              => 'checkbox',

) );

// Add Single Post Comment enable setting and control.
$wp_customize->add_setting( 'theme_options[single_post_comment_enable]', array(
	'default'           => $default['single_post_comment_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_post_comment_enable]', array(
	'label'             => esc_html__( 'Enable Comment', 'kuza-minimal-blog' ),
	'section'           => 'section_single_post',
	'type'              => 'checkbox',

) );