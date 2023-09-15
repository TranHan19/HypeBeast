<?php
/**
 * Category List options.
 *
 * @package Kuza
 */

$default = kuza_minimal_blog_get_default_theme_options();

// Category List Author Section
$wp_customize->add_section( 'section_home_fitnesscat',
	array(
		'title'      => __( 'Category List', 'kuza-minimal-blog' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		'active_callback' => 'kuza_minimal_blog_fitnesscat_design_enable',
		)
);

$wp_customize->add_setting( 'theme_options[disable_fitnesscat_section]',
	array(
		'default'           => $default['disable_fitnesscat_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kuza_minimal_blog_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kuza_Minimal_Blog_Switch_Control( $wp_customize, 'theme_options[disable_fitnesscat_section]',
    array(
		'label' 			=> __('Enable/Disable Category List Section', 'kuza-minimal-blog'),
		'section'    		=> 'section_home_fitnesscat',
		'settings'  		=> 'theme_options[disable_fitnesscat_section]',
		'on_off_label' 		=> kuza_minimal_blog_switch_options(),
    )
) );

//Skills Section title
$wp_customize->add_setting('theme_options[fitnesscat_title]', 
	array(
	'default'           => $default['fitnesscat_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[fitnesscat_title]', 
	array(
	'label'       => __('Section Title', 'kuza-minimal-blog'),
	'section'     => 'section_home_fitnesscat',   
	'settings'    => 'theme_options[fitnesscat_title]',
	'active_callback' => 'kuza_minimal_blog_fitnesscat_active',		
	'type'        => 'text'
	)
);

//Skills Section Subtitle
$wp_customize->add_setting('theme_options[fitnesscat_subtitle]', 
	array(
	'default'           => $default['fitnesscat_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_textarea_field'
	)
);

$wp_customize->add_control('theme_options[fitnesscat_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'kuza-minimal-blog'),
	'section'     => 'section_home_fitnesscat',   
	'settings'    => 'theme_options[fitnesscat_subtitle]',
	'active_callback' => 'kuza_minimal_blog_fitnesscat_active',		
	'type'        => 'textarea'
	)
);

// Setting  Team Category.
$wp_customize->add_setting( 'theme_options[fitnesscat_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_category_list',
	)
);
$wp_customize->add_control(
	new Kuza_Minimal_Blog_Dropdown_Multiple_Chooser( $wp_customize, 'theme_options[fitnesscat_category]',
		array(
		'label'    => __( 'Select Categories', 'kuza-minimal-blog' ),
		'description' => __('Press Ctrl and select categories for multiple categories', 'kuza-minimal-blog'),
		'section'  => 'section_home_fitnesscat',
		'settings' => 'theme_options[fitnesscat_category]',
		'type'           	=> 'dropdown_multiple_chooser',
		'choices'  => kuza_minimal_blog_category_choices(),
		'active_callback' => 'kuza_minimal_blog_fitnesscat_active',		
		)
	)
);


