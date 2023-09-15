<?php
/**
 * Featured Posts options.
 *
 * @package Kuza
 */

$default = kuza_minimal_blog_get_default_theme_options();

// Featured Posts Section
$wp_customize->add_section( 'section_home_galleryview',
	array(
		'title'      => __( 'Featured Posts', 'kuza-minimal-blog' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		'active_callback' => 'kuza_minimal_blog_galleryview_design_enable',
		)
);

$wp_customize->add_setting( 'theme_options[disable_galleryview_section]',
	array(
		'default'           => $default['disable_galleryview_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kuza_minimal_blog_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kuza_Minimal_Blog_Switch_Control( $wp_customize, 'theme_options[disable_galleryview_section]',
    array(
		'label' 			=> __('Enable/Disable Featured Posts Section', 'kuza-minimal-blog'),
		'section'    		=> 'section_home_galleryview',
		 'settings'  		=> 'theme_options[disable_galleryview_section]',
		'on_off_label' 		=> kuza_minimal_blog_switch_options(),
    )
) );

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[galleryview_content_align]', array(
	'default'           => $default['galleryview_content_align'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[galleryview_content_align]', array(
	'label'             => esc_html__( 'Choose Content Align', 'kuza-minimal-blog' ),
	'section'           => 'section_home_galleryview',
	'type'              => 'radio',
	'active_callback' => 'kuza_minimal_blog_galleryview_active',
	'choices'				=> array( 
		'content-right'     => esc_html__( 'Right Side', 'kuza-minimal-blog' ), 
		'content-center'     => esc_html__( 'Center Side', 'kuza-minimal-blog' ), 
		'content-left'     => esc_html__( 'Left Side', 'kuza-minimal-blog' ), 
		'content-justify'     => esc_html__( 'Justify', 'kuza-minimal-blog' )
		)
) );

//Featured Posts Section title
$wp_customize->add_setting('theme_options[galleryview_title]', 
	array(
	'default'           => $default['galleryview_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[galleryview_title]', 
	array(
	'label'       => __('Section Title', 'kuza-minimal-blog'),
	'section'     => 'section_home_galleryview',   
	'settings'    => 'theme_options[galleryview_title]',
	'active_callback' => 'kuza_minimal_blog_galleryview_active',		
	'type'        => 'text'
	)
);
	
// Add content enable setting and control.
$wp_customize->add_setting( 'theme_options[galleryview_content_enable]', array(
	'default'           => $default['galleryview_content_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[galleryview_content_enable]', array(
	'label'             => esc_html__( 'Enable Content', 'kuza-minimal-blog' ),
	'section'           => 'section_home_galleryview',
	'type'              => 'checkbox',
	'active_callback' => 'kuza_minimal_blog_galleryview_active',
) );


// Number of items
$wp_customize->add_setting('theme_options[galleryview_excerpt_length]', 
	array(
	'default' 			=> $default['galleryview_excerpt_length'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[galleryview_excerpt_length]', 
	array(
	'label'       => __('Excerpt Length', 'kuza-minimal-blog'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 1000.', 'kuza-minimal-blog'),
	'section'     => 'section_home_galleryview',   
	'settings'    => 'theme_options[galleryview_excerpt_length]',		
	'type'        => 'number',
	'active_callback' => 'kuza_minimal_blog_galleryview_active',
	'input_attrs' => array(
			'min'	=> 0,
			'max'	=> 1000,
			'step'	=> 1,
		),
	)
);

// Setting Category.
$wp_customize->add_setting( 'theme_options[galleryview_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Kuza_Minimal_Blog_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[galleryview_category]',
		array(
		'label'    => __( 'Select Category', 'kuza-minimal-blog' ),
		'section'  => 'section_home_galleryview',
		'settings' => 'theme_options[galleryview_category]',	
		'active_callback' => 'kuza_minimal_blog_galleryview_active',		
		)
	)
);
