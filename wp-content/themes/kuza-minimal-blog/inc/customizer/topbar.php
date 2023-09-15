<?php

$default = kuza_minimal_blog_get_default_theme_options();
/**
* Add Header Top Panel
*/
$wp_customize->add_panel( 'header_top_panel', array(
    'title'          => __( 'Header social', 'kuza-minimal-blog' ),
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
) );



/** Header social links section */
$wp_customize->add_section(
    'header_social_links_section',
    array(
        'title'    => __( 'Header Social Links', 'kuza-minimal-blog' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);


for( $i=1; $i<=4; $i++ ){

    // Setting social_links.
    $wp_customize->add_setting('theme_options[header_social_link_'.$i.']', array(
            'sanitize_callback' => 'esc_url_raw',
        ) );

    $wp_customize->add_control('theme_options[header_social_link_'.$i.']', array(
        'label'             => esc_html__( 'Social Links', 'kuza-minimal-blog' ),
        'section'           => 'header_social_links_section',
        'type'              => 'url',
    ) );
}



