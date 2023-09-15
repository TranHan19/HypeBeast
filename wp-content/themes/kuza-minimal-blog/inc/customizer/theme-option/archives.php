<?php
/**
 * Home Page Options.
 *
 * @package Kuza
 */

$default = kuza_minimal_blog_get_default_theme_options();

// Latest Latest Posts Section
$wp_customize->add_section( 'section_home_latest_posts',
	array(
		'title'      => __( 'Blog And Archive', 'kuza-minimal-blog' ),
		'priority'   => 110,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
		)
);

// Latest Posts title
$wp_customize->add_setting('theme_options[latest_posts_title]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_posts_title]', 
	array(
	'label'       => __('Static Blog Page Header Title', 'kuza-minimal-blog'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_posts_title]',		
	'type'        => 'text'
	)
);

// Latest Posts title
$wp_customize->add_setting('theme_options[latest_section_posts_title]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_section_posts_title]', 
	array(
	'label'       => __('Blog Page Header Title', 'kuza-minimal-blog'),
	'description' => __('This Setting works on the Latest posts option chosen as the Homepage Setting.', 'kuza-minimal-blog'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_section_posts_title]',		
	'type'        => 'text'
	)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[archive_content_align]', array(
	'default'           => $default['archive_content_align'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[archive_content_align]', array(
	'label'             => esc_html__( 'Choose Content Align', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'radio',
	'choices'				=> array( 
		'content-right'     => esc_html__( 'Right Side', 'kuza-minimal-blog' ), 
		'content-center'     => esc_html__( 'Center Side', 'kuza-minimal-blog' ), 
		'content-left'     => esc_html__( 'Left Side', 'kuza-minimal-blog' ), 
		'content-justify'     => esc_html__( 'Justify', 'kuza-minimal-blog' ),
		)
) );

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[archive_post_header_title_enable]', array(
	'default'           => $default['archive_post_header_title_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[archive_post_header_title_enable]', array(
	'label'             => esc_html__( 'Enable Archive Header Title', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_category_enable]', array(
	'default'           => $default['latest_category_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_category_enable]', array(
	'label'             => esc_html__( 'Enable Category', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_author_enable]', array(
	'default'           => $default['latest_author_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_author_enable]', array(
	'label'             => esc_html__( 'Enable Author', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_comment_enable]', array(
	'default'           => $default['latest_comment_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_comment_enable]', array(
	'label'             => esc_html__( 'Enable Comment', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );
// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_read_more_text_enable]', array(
	'default'           => $default['latest_read_more_text_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_read_more_text_enable]', array(
	'label'             => esc_html__( 'Enable Read More Text', 'kuza-minimal-blog' ),
	'description' => __('Enable read more text inside content and disable read more button.', 'kuza-minimal-blog'),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );

// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_posted_on_enable]', array(
	'default'           => $default['latest_posted_on_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_posted_on_enable]', array(
	'label'             => esc_html__( 'Enable Author & Date', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[latest_video_enable]', array(
	'default'           => $default['latest_video_enable'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[latest_video_enable]', array(
	'label'             => esc_html__( 'Enable Featured Video', 'kuza-minimal-blog' ),
	'section'           => 'section_home_latest_posts',
	'type'              => 'checkbox',

) );

$wp_customize->add_setting('theme_options[latest_readmore_text]', 
	array(
	'default'           => $default['latest_readmore_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_readmore_text]', 
	array(
	'label'       => __('Button Label', 'kuza-minimal-blog'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_readmore_text]',	
	'type'        => 'text'
	)
);