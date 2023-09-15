<?php
/**
 * Header options.
 *
 * @package Kuza
 */

$default = kuza_minimal_blog_get_default_theme_options();

// Header Author Section
$wp_customize->add_section( 'section_home_header',
	array(
		'title'      => __( 'Header Options', 'kuza-minimal-blog' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[header_layout_options]', array(
	'default'           => $default['header_layout_options'],
	'sanitize_callback' => 'kuza_minimal_blog_sanitize_select',
	'type'				=> 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[header_layout_options]', array(
	'label'             => esc_html__( 'Choose Header Layout', 'kuza-minimal-blog' ),
	'section'           => 'section_home_header',
	'type'              => 'radio',
	'choices'				=> array( 
		'header-one'     => esc_html__( 'Header One(Normal)', 'kuza-minimal-blog' ), 
		'header-two'     => esc_html__( 'Header Two(blog Style)', 'kuza-minimal-blog' ), 
		'header-three'     => esc_html__( 'Header Three(Header Ads)', 'kuza-minimal-blog' ), 
		'header-four'     => esc_html__( 'Header Four(Transparent)', 'kuza-minimal-blog' ), 
		'header-five'     => esc_html__( 'Header Five(Header Contact Info)', 'kuza-minimal-blog' ), 
        'header-six'     => esc_html__( 'Header Six(Modern Header', 'kuza-minimal-blog' ),
		)
) );

$wp_customize->add_setting( 'theme_options[disable_header_background_section]',
	array(
		'default'           => $default['disable_header_background_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kuza_minimal_blog_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kuza_Minimal_Blog_Switch_Control( $wp_customize, 'theme_options[disable_header_background_section]',
    array(
		'label' 			=> __('Enable/Disable Header Background Image', 'kuza-minimal-blog'),
		'section'    		=> 'section_home_header',
		 'settings'  		=> 'theme_options[disable_header_background_section]',
		'on_off_label' 		=> kuza_minimal_blog_switch_options(),
		'active_callback'	=> 'kuza_minimal_blog_header_background_image'
    )
) );

// header title setting and control
$wp_customize->add_setting( 'theme_options[header_background_image]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[header_background_image]', array(
	'label'           	=> esc_html__( 'Select Header Background', 'kuza-minimal-blog' ),
	'section'        	=> 'section_home_header',
	'settings'    		=> 'theme_options[header_background_image]',	
	'active_callback' 	=> 'kuza_minimal_blog_header_background_image',
) ) );

// header Ads image setting and control
$wp_customize->add_setting( 'theme_options[header_ads_image]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[header_ads_image]', array(
	'label'           	=> esc_html__( 'Select Header Ads Image', 'kuza-minimal-blog' ),
	'section'        	=> 'section_home_header',
	'settings'    		=> 'theme_options[header_ads_image]',
	'active_callback'	=> 'kuza_minimal_blog_header_three',
) ) );

// Header Ads Url
$wp_customize->add_setting('theme_options[header_ads_image_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control('theme_options[header_ads_image_url]', 
	array(
	'label'       => esc_html__('Header Ads Url', 'kuza-minimal-blog'),
	'section'     => 'section_home_header',   
	'settings'    => 'theme_options[header_ads_image_url]',	
	'type'        => 'url',
	'active_callback'	=> 'kuza_minimal_blog_header_three',
	)
);

// Header contact enable control and setting
$wp_customize->add_setting( 'theme_options[show_header_contact_info]', array(
    'default'           =>  $default['show_header_contact_info'],
    'sanitize_callback' => 'kuza_minimal_blog_sanitize_switch_control',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
) );

$wp_customize->add_control( new Kuza_Minimal_Blog_Switch_Control( $wp_customize, 'theme_options[show_header_contact_info]', array(
    'label'             => __( 'Show Contact Info', 'kuza-minimal-blog' ),
    'section'           => 'section_home_header',
    'settings'         => 'theme_options[show_header_contact_info]',
    'on_off_label'      => kuza_minimal_blog_switch_options(),
) ) );

/** Location */
$wp_customize->add_setting( 'theme_options[header_location_text]', array(
    'default'           => $default['header_location_text'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_location_text]',
    array(
        'label'           => __( 'Location Title Text', 'kuza-minimal-blog' ),
        'section'         => 'section_home_header',
        'active_callback' => 'kuza_minimal_blog_header_five',
    )
);
$wp_customize->add_setting( 'theme_options[header_location_address]', array(
    'default'           => $default['header_location_address'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_location_address]',
    array(
        'label'           => __( 'Address', 'kuza-minimal-blog' ),
        'description'     => __( 'Enter Location.', 'kuza-minimal-blog' ),
        'section'         => 'section_home_header',
        'active_callback' => 'kuza_minimal_blog_header_five',
    )
);

/** Phone */
$wp_customize->add_setting( 'theme_options[header_phone_text]', array(
    'default'           => $default['header_phone_text'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_phone_text]',
    array(
        'label'           => __( 'Phone Title Text', 'kuza-minimal-blog' ),
        'section'         => 'section_home_header',
        'active_callback' => 'kuza_minimal_blog_header_five',
    )
);

$wp_customize->add_setting( 'theme_options[header_phone_contact]', array(
    'default'           => $default['header_phone_contact'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_phone_contact]',
    array(
        'label'           => __( 'Contact', 'kuza-minimal-blog' ),
        'description'     => __( 'Enter phone number.', 'kuza-minimal-blog' ),
        'section'         => 'section_home_header',
        'active_callback' => 'kuza_minimal_blog_header_five',
    )
);

/** Email */
$wp_customize->add_setting( 
    'theme_options[header_email_text]', 
    array(
        'default'           => $default['header_email_text'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_email_text]',
    array(
        'label'           => __( 'Email Title Text', 'kuza-minimal-blog' ),
        'section'         => 'section_home_header',
        'active_callback' => 'kuza_minimal_blog_header_five',
    )
);
$wp_customize->add_setting( 
    'theme_options[header_email_address]', 
    array(
        'default'           => $default['header_email_address'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_email_address]',
    array(
        'label'           => __( 'Email', 'kuza-minimal-blog' ),
        'description'     => __( 'Enter valid email address.', 'kuza-minimal-blog' ),
        'section'         => 'section_home_header',
        'active_callback' => 'kuza_minimal_blog_header_five',
    )
);