<?php
/**
 * Category options.
 *
 * @package Kuza
 */

$default = kuza_minimal_blog_get_default_theme_options();

// Category Author Section
$wp_customize->add_section( 'section_home_layout',
	array(
		'title'      => __( 'Homepage Layout', 'kuza-minimal-blog' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[homepage_layout_options]', array(
	'default'           => $default['homepage_layout_options'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_select',
	'type'				=> 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[homepage_layout_options]', array(
	'label'             => esc_html__( 'Choose HomePage Color Layout', 'kuza-minimal-blog' ),
	'section'           => 'section_home_layout',
	'type'              => 'radio',
	'choices'				=> array( 
		'lite-layout'     => esc_html__( 'Lite HomePage', 'kuza-minimal-blog' ), 
		'dark-layout'     => esc_html__( 'Dark HomePage', 'kuza-minimal-blog' ),
		)
) );



$wp_customize->add_setting('theme_options[homepage_design_layout_options]', 
	array(
	'default' 			=> $default['homepage_design_layout_options'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[homepage_design_layout_options]', 
	array(
	'label'             => esc_html__( 'Choose HomePage Layout', 'kuza-minimal-blog' ),
	'description' => __('Save & Refresh the customizer to see its effect.', 'kuza-minimal-blog'),
	'section'     => 'section_home_layout',   
	'settings'    => 'theme_options[homepage_design_layout_options]',		
	'type'        => 'select',
	'choices'	  => array(  
		'home-fitness'     => esc_html__( 'Fitness HomePage', 'kuza-minimal-blog' ),
		'home-medical'     => esc_html__( 'Medical HomePage', 'kuza-minimal-blog' ), 
		'home-education'     => esc_html__( 'Education HomePage', 'kuza-minimal-blog' ), 
		'home-nature'     => esc_html__( 'Slider HomePage', 'kuza-minimal-blog' ), 
		'home-magazine'     => esc_html__( 'Magazine HomePage', 'kuza-minimal-blog' ),
		'home-blog'     => esc_html__( 'Blog HomePage', 'kuza-minimal-blog' ),
		'home-business'     => esc_html__( 'Business HomePage', 'kuza-minimal-blog' ),
		'home-normal-magazine'     => esc_html__( 'Normal Magazine HomePage', 'kuza-minimal-blog' ), 
		'home-corporate'     => esc_html__( 'Corporate HomePage', 'kuza-minimal-blog' ),  
		'home-normal-blog'     => esc_html__( 'Normal Blog HomePage', 'kuza-minimal-blog' ),  
		'home-minimal-blog'     => esc_html__( 'Minimal Blog HomePage', 'kuza-minimal-blog' ), 
		'home-classic-blog'     => esc_html__( 'Classic Blog HomePage', 'kuza-minimal-blog' ),
		),
	)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[homepage_sidebar_position]', array(
	'default'           => $default['homepage_sidebar_position'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[homepage_sidebar_position]', array(
	'label'             => esc_html__( 'Choose HomePage sidebar Layout', 'kuza-minimal-blog' ),
	'section'           => 'section_home_layout',
	'type'              => 'radio',
	'active_callback'	=> 'kuza_minimal_blog_home_magazine_enable',
	'choices'				=> array( 
		'home-no-sidebar'     => esc_html__( 'No Sidebar', 'kuza-minimal-blog' ), 
		'home-right-sidebar'     => esc_html__( 'Right Sidebar', 'kuza-minimal-blog' ),
		)
) );

