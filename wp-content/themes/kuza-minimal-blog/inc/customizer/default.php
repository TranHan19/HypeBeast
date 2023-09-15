<?php
/**
 * Default theme options.
 *
 * @package Kuza
 */


if ( ! function_exists( 'kuza_minimal_blog_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	
	function kuza_minimal_blog_get_default_theme_options() {

		$theme_data = wp_get_theme();
		$defaults = array();

		$defaults['show_header_contact_info'] 	= true;
		$defaults['disable_homepage_content_section'] 			= true;
		$defaults['show_topbar'] 			= true;
		$defaults['topbar_layout_option'] 			= 'contact-info-option';
	    $defaults['header_email']             	= __( 'info@sensationaltheme.com','kuza-minimal-blog' );
	    $defaults['header_phone' ]            	= __( '+1-541-754-3010','kuza-minimal-blog' );
	    $defaults['header_location' ]           = __( 'London, UK','kuza-minimal-blog' );
	    $defaults['enable_header_contact_info'] 	= true;
	    $defaults['header_email_text']             	= __( 'Email ID','kuza-minimal-blog' );
	    $defaults['header_phone_text' ]            	= __( 'Free Call','kuza-minimal-blog' );
	    $defaults['header_location_text' ]           = __( 'Visit Us','kuza-minimal-blog' );
	    $defaults['header_email_address']             	= __( 'info@sensationaltheme.com','kuza-minimal-blog' );
	    $defaults['header_phone_contact' ]            	= __( '+1-541-754-3010','kuza-minimal-blog' );
	    $defaults['header_location_address' ]           = __( 'London, UK','kuza-minimal-blog' );
	    $defaults['show_header_social_links'] 	= true;
	    $defaults['header_social_links']		= array();
	    $defaults['disable_header_background_section'] = false;
	    $defaults['show_header_search'] 	= true;
	    $defaults['show_current_date'] 	= true;


	    $defaults['menu_text_hover'] 	= 'menu-hover-none';
	    $defaults['header_text_hover'] 	= 'title-hover-none';
	    $defaults['preloader_loader_enable'] 	= false;
	    $defaults['preloader_loader_options'] 	= 'loader-none';
	    $defaults['header_text_transform_options'] 	= 'none';
	    $defaults['header_text_decoration_options'] 	= 'none';
	    $defaults['header_font_style_options'] 	= 'none';
	    $defaults['header_text_design'] 	= false;
	    $defaults['homepage_layout_options']			= 'lite-layout';
	    $defaults['header_layout_options']			= 'header-two';
	    $defaults['homepage_design_layout_options']			= 'home-minimal-blog';
	    $defaults['homepage_sidebar_position']			= 'home-right-sidebar';

		// Fitness Category Section
		$defaults['disable_fitnesscat_section']	= false;
		$defaults['number_of_fitnesscat_column']			= 6;
		$defaults['number_of_fitnesscat_items']			= 10;
		$defaults['fitnesscat_content_type']			= 'post-category';
		$defaults['fitnesscat_title']	   	 		= esc_html__( 'Major Category', 'kuza-minimal-blog' );
		$defaults['fitnesscat_subtitle']	   	 		= esc_html__( 'I love natural beauty, and I think it’s your best look, but I think makeup as an artist is so transformative.', 'kuza-minimal-blog' );

		// Featured Slider Section
		$defaults['disable_featured-slider_section']	= false;
		$defaults['number_of_sr_items']			= 4;
		$defaults['number_of_sr_column']		= 1;
		$defaults['slider_layout_option']			= 'fullwidth-slider';
		$defaults['slider_content_position_option']			= 'left-position';
		$defaults['sr_content_type']			= 'sr_category';
		$defaults['slider_speed']				= 800;
		$defaults['disable_white_overlay']		= false;
		$defaults['slider_arrow_enable']		= true;
		$defaults['slider_fade_enable']		 	= true;
		$defaults['slider_autoplay_enable']		= true;
		$defaults['slider_infinite_enable']		= true;
		$defaults['slider_title_enable']		= true;
		$defaults['slider_category_enable']		= true;
		$defaults['slider_content_enable']		= true;
		$defaults['slider_posted_on_enable']		= false;
		$defaults['disable_blog_banner_section']		= false;
		$defaults['slider_social_title_text']	   		= esc_html__( 'Follow Me:', 'kuza-minimal-blog' );

		// Fitness Category Section
		$defaults['disable_fitnesscat_section']	= true;
		$defaults['number_of_fitnesscat_column']			= 3;
		$defaults['number_of_fitnesscat_items']			= 10;
		$defaults['fitnesscat_content_type']			= 'post-category';
		$defaults['fitnesscat_title']	   	 		= esc_html__( 'Major Category', 'kuza-minimal-blog' );
		$defaults['fitnesscat_subtitle']	   	 		= esc_html__( 'I love natural beauty, and I think it’s your best look, but I think makeup as an artist is so transformative.', 'kuza-minimal-blog' );

		//Message Section	
		$defaults['disable_message_section']	   	= false;
		$defaults['message_title']	   	= esc_html__( 'Hello, I am Nijasi Thitak', 'kuza-minimal-blog' );
		$defaults['message_description']	   	= esc_html__( 'I’ve been working with a company this month doing blogger outreach for a project. Part of my job is to vet blogs and determine their audience, their traffic, and whether they’re a good fit for this particular project. Having spent several hours reviewing blogs in several markets, I’ve come to a conclusion: We all need to work on our About pages.', 'kuza-minimal-blog' );
		$defaults['message_button_label']	   	 	= esc_html__( 'Know More', 'kuza-minimal-blog' );
		$defaults['message_button_url']	   	 		= '#';
		$defaults['message_content_type']			= 'message_custom';
		$defaults['message_content_enable']			= true;
		$defaults['message_excerpt_enable']			= true;
		$defaults['message_excerpt_length']			= 50;
		$defaults['disable_about_counter_section']	= true;
		$defaults['number_of_about_counter_items']	= 3;
		$defaults['about_counter_value_1']	   	= esc_html__( '1400+', 'kuza-minimal-blog' );
		$defaults['about_counter_value_2']	   	= esc_html__( '500+', 'kuza-minimal-blog' );
		$defaults['about_counter_value_3']	   	= esc_html__( '600+', 'kuza-minimal-blog' );
		$defaults['about_counter_value_4']	   	= esc_html__( '70', 'kuza-minimal-blog' );
		$defaults['about_counter_text_1']	   	= esc_html__( 'Client', 'kuza-minimal-blog' );
		$defaults['about_counter_text_2']	   	= esc_html__( 'Project', 'kuza-minimal-blog' );
		$defaults['about_counter_text_3']	   	= esc_html__( 'Employee', 'kuza-minimal-blog' );
		$defaults['about_counter_text_4']	   	= esc_html__( 'Branches', 'kuza-minimal-blog' );

		//Must Read Section
		$defaults['disable_mustread_section']	= false;
		$defaults['mustread_title']	   	 		= esc_html__( 'Must Read Posts', 'kuza-minimal-blog' );
		$defaults['number_of_mustread_items']			= 6;
		$defaults['number_of_mustread_column']			= 3;
		$defaults['mustread_excerpt_length']			= 20;
		$defaults['mustread_content_type']			= 'mustread_category';
		$defaults['mustread_content_align']			= 'content-center';
		$defaults['mustread_category_enable']		= true;
		$defaults['mustread_posted_on_enable']		= true;
		$defaults['mustread_author_enable']		= true;
		$defaults['mustread_content_enable']		= true;
		$defaults['mustread_see_all_txt']			= esc_html__( 'See All', 'kuza-minimal-blog' );

		// Our Service Section
		$defaults['disable_services_section']	= false;
		$defaults['services_title']	   	 		= esc_html__( 'Reasons to Choose My Services', 'kuza-minimal-blog' );
		$defaults['services_subtitle']	   		= esc_html__( 'Services', 'kuza-minimal-blog' );
		$defaults['number_of_services_column']	= 2;
		$defaults['number_of_services_items']	= 4;
		$defaults['services_content_type']		= 'services_category';
		$defaults['services_content_enable']	= true;
		$defaults['disable_services_icon']		= true;
		$defaults['disable_services_background']		= true;
		$defaults['services_content_align']			= 'content-left';
		$defaults['services_excerpt_length']			= 20;

		// Team Section
		$defaults['disable_team_section']	= false;
		$defaults['team_title']	   	 		= esc_html__( 'Our Team', 'kuza-minimal-blog' );
		$defaults['team_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'kuza-minimal-blog' );
		$defaults['number_of_column']		= 4;
		$defaults['number_of_items']			= 5;
		$defaults['team_content_type']			= 'team_category';
		$defaults['team_content_enable']				= true;

		// Testimonial Section
		$defaults['disable_testimonial_section']	= false;
		$defaults['number_of_testimonial_items']			= 4;
		$defaults['testimonial_excerpt_length']			= 20;
		$defaults['testimonial_layout_option']			= 'default-testimonial';
		$defaults['testimonial_content_type']			= 'testimonial_category';
		$defaults['testimonial_title']	   	 		= esc_html__( 'Our clients reviews.', 'kuza-minimal-blog' );
		$defaults['testimonial_viewall_text']	   	 		= esc_html__( 'View All Projects', 'kuza-minimal-blog' );
		$defaults['testimonial_subtitle']	   	 	= esc_html__( 'Testimonials', 'kuza-minimal-blog' );
		$defaults['testimonial_category_enable']		= true;
		$defaults['testimonial_posted_on_enable']		= true;
		$defaults['testimonial_arrow_enable']		= true;
		$defaults['testimonial_dots_enable']		= true;
		$defaults['testimonial_content_enable']		= true;

		//Cta Section
		$defaults['disable_cta_section']	   	= false;
		$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
		$defaults['cta_small_description']	   	= esc_html__( 'Need More Help?', 'kuza-minimal-blog' );
		$defaults['cta_description']	   	 	= esc_html__( 'A better way to hire our best help', 'kuza-minimal-blog' );
		$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'kuza-minimal-blog' );
		$defaults['cta_button_url']	   	 		= '#';
		$defaults['cta_alt_button_label']	   	= esc_html__( 'Contact Us', 'kuza-minimal-blog' );
		$defaults['cta_alt_button_url']	   	 	= '#';
		$defaults['cta_content_type']			= 'cta_custom';


		//Gallery Section
		$defaults['disable_gallery_section']	= false;
		$defaults['number_of_gallery_items']			= 7;
		$defaults['gallery_excerpt_length']			= 20;
		$defaults['gallery_content_type']			= 'gallery_category';
		$defaults['gallery_image_option']			= 'gallery-featured-image';
		$defaults['gallery_category_enable']		= true;
		$defaults['gallery_posted_on_enable']		= true;
		$defaults['gallery_author_enable']		= true;
		$defaults['gallery_content_enable']		= false;

		//Galleryview Section
		$defaults['disable_galleryview_section']	= true;
		$defaults['galleryview_title']	   	 		= esc_html__( 'Featured Posts', 'kuza-minimal-blog' );
		$defaults['number_of_galleryview_items']			= 8;
		$defaults['number_of_galleryview_column']			= 4;
		$defaults['galleryview_excerpt_length']			= 10;
		$defaults['galleryview_content_type']			= 'galleryview_category';
		$defaults['galleryview_layout']			= 'galleryview-two';
		$defaults['galleryview_content_align']			= 'content-left';
		$defaults['galleryview_category_enable']		= true;
		$defaults['galleryview_posted_on_enable']		= true;
		$defaults['galleryview_author_enable']		= true;
		$defaults['galleryview_content_enable']		= false;
		$defaults['galleryview_see_all_txt']			= esc_html__( 'See All', 'kuza-minimal-blog' );


		//Message Section	
		$defaults['disable_message_section']	   	= false;
		$defaults['message_title']	   	= esc_html__( 'Hello, I am Nijasi Thitak', 'kuza-minimal-blog' );
		$defaults['message_description']	   	= esc_html__( 'I’ve been working with a company this month doing blogger outreach for a project. Part of my job is to vet blogs and determine their audience, their traffic, and whether they’re a good fit for this particular project. Having spent several hours reviewing blogs in several markets, I’ve come to a conclusion: We all need to work on our About pages.', 'kuza-minimal-blog' );
		$defaults['message_button_label']	   	 	= esc_html__( 'Know More', 'kuza-minimal-blog' );
		$defaults['message_button_url']	   	 		= '#';
		$defaults['message_content_type']			= 'message_page';
		$defaults['message_content_enable']			= true;
		$defaults['message_excerpt_enable']			= true;
		$defaults['message_excerpt_length']			= 50;
		$defaults['disable_about_counter_section']	= true;
		$defaults['number_of_about_counter_items']	= 3;
		$defaults['about_counter_value_1']	   	= esc_html__( '1400+', 'kuza-minimal-blog' );
		$defaults['about_counter_value_2']	   	= esc_html__( '500+', 'kuza-minimal-blog' );
		$defaults['about_counter_value_3']	   	= esc_html__( '600+', 'kuza-minimal-blog' );
		$defaults['about_counter_value_4']	   	= esc_html__( '70', 'kuza-minimal-blog' );
		$defaults['about_counter_text_1']	   	= esc_html__( 'Client', 'kuza-minimal-blog' );
		$defaults['about_counter_text_2']	   	= esc_html__( 'Project', 'kuza-minimal-blog' );
		$defaults['about_counter_text_3']	   	= esc_html__( 'Employee', 'kuza-minimal-blog' );
		$defaults['about_counter_text_4']	   	= esc_html__( 'Branches', 'kuza-minimal-blog' );



		// Latest Posts Section
		$defaults['latest_posts_title']	   	 	= esc_html__( 'Breathe. Let go. And remind yourself that this very moment is the only one you know you have for sure.', 'kuza-minimal-blog' );
		$defaults['number_of_latest_posts_column']	= 1;
		$defaults['pagination_type']		= 'default';
		$defaults['latest_category_enable']		= true;
		$defaults['latest_author_enable']		= true;
		$defaults['latest_comment_enable']		= true;
		$defaults['latest_read_more_text_enable']		= false;
		$defaults['latest_posted_on_enable']		= true;
		$defaults['latest_video_enable']		= true;
		$defaults['blog_layout_content_type']		= 'blog-four';
		$defaults['archive_content_align']		= 'content-center';
		$defaults['archive_post_header_title_enable']		= true;
		$defaults['archive_post_header_image_enable']		= true;
		$defaults['blog_post_header_image_enable']		= true;
		$defaults['blog_post_header_title_enable']		= true;


		// Project Section
		$defaults['disable_project_section']	= false;
		$defaults['number_of_project_items']			= 5;
		$defaults['project_layout_option']			= 'default-project';
		$defaults['project_content_type']			= 'project_category';
		$defaults['project_title']	   	 		= esc_html__( 'Cources', 'kuza-minimal-blog' );
		$defaults['project_viewall_text']	   	 		= esc_html__( 'View All Projects', 'kuza-minimal-blog' );
		$defaults['project_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'kuza-minimal-blog' );
		$defaults['project_category_enable']		= true;
		$defaults['project_posted_on_enable']		= true;
		$defaults['project_arrow_enable']		= true;
		$defaults['project_dots_enable']		= true;
		$defaults['project_content_enable']		= true;

		//Must Read Section
		$defaults['disable_mustread_section']	= false;
		$defaults['mustread_title']	   	 		= esc_html__( 'Blog Posts', 'kuza-minimal-blog' );
		$defaults['number_of_mustread_items']			= 3;
		$defaults['number_of_mustread_column']			= 3;
		$defaults['mustread_excerpt_length']			= 20;
		$defaults['mustread_content_type']			= 'mustread_category';
		$defaults['mustread_content_align']			= 'content-center';
		$defaults['mustread_category_enable']		= true;
		$defaults['mustread_posted_on_enable']		= true;
		$defaults['mustread_author_enable']		= true;
		$defaults['mustread_content_enable']		= true;
		$defaults['mustread_see_all_txt']			= esc_html__( 'See All', 'kuza-minimal-blog' );

		// Our Service Section
		$defaults['disable_services_section']	= false;
		$defaults['services_title']	   	 		= esc_html__( 'Reasons to Choose My Services', 'kuza-minimal-blog' );
		$defaults['services_subtitle']	   		= esc_html__( 'Services', 'kuza-minimal-blog' );
		$defaults['number_of_services_column']	= 2;
		$defaults['number_of_services_items']	= 4;
		$defaults['services_content_type']		= 'services_category';
		$defaults['services_content_enable']	= true;
		$defaults['disable_services_icon']		= true;
		$defaults['disable_services_background']		= true;
		$defaults['services_content_align']			= 'content-left';
		$defaults['services_excerpt_length']			= 10;
	
		// Testimonial Section
		$defaults['disable_testimonial_section']	= false;
		$defaults['number_of_testimonial_items']			= 4;
		$defaults['testimonial_excerpt_length']			= 20;
		$defaults['testimonial_layout_option']			= 'default-testimonial';
		$defaults['testimonial_content_type']			= 'testimonial_category';
		$defaults['testimonial_title']	   	 		= esc_html__( 'Our clients reviews.', 'kuza-minimal-blog' );
		$defaults['testimonial_viewall_text']	   	 		= esc_html__( 'View All Projects', 'kuza-minimal-blog' );
		$defaults['testimonial_subtitle']	   	 	= esc_html__( 'Testimonials', 'kuza-minimal-blog' );
		$defaults['testimonial_category_enable']		= true;
		$defaults['testimonial_posted_on_enable']		= true;
		$defaults['testimonial_arrow_enable']		= true;
		$defaults['testimonial_dots_enable']		= true;
		$defaults['testimonial_content_enable']		= true;

		//Time table Section
		$defaults['disable_timetable_section']	   	= false;
		$defaults['timetable_count']					= 3;
		$defaults['timetable_content_type']			= 'timetable_page';
		$defaults['timetable_box_title_1']			= esc_html__( 'Title Here', 'kuza-minimal-blog' );
		$defaults['timetable_box_title_2']			= esc_html__( 'Title Here', 'kuza-minimal-blog' );
		$defaults['timetable_box_title_3']			= esc_html__( 'Title Here', 'kuza-minimal-blog' );
		$defaults['timetable_box_title_4']			= esc_html__( 'Title Here', 'kuza-minimal-blog' );
		$defaults['timetable_content_1']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-minimal-blog' );
		$defaults['timetable_content_2']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-minimal-blog' );
		$defaults['timetable_content_3']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-minimal-blog' );
		$defaults['timetable_content_4']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-minimal-blog' );		
		$defaults['timetable_btn_1']			= esc_html__( 'Read More', 'kuza-minimal-blog' );
		$defaults['timetable_btn_2']			= esc_html__( 'Read More', 'kuza-minimal-blog' );
		$defaults['timetable_btn_3']			= esc_html__( 'Read More', 'kuza-minimal-blog' );
		$defaults['timetable_btn_4']			= esc_html__( 'Read More', 'kuza-minimal-blog' );		
		$defaults['timetable_icon_1']			= esc_html__( 'fa-leaf', 'kuza-minimal-blog' );
		$defaults['timetable_icon_2']			= esc_html__( 'fa-diamond', 'kuza-minimal-blog' );
		$defaults['timetable_icon_3']			= esc_html__( 'fa-star', 'kuza-minimal-blog' );
		$defaults['timetable_icon_4']			= esc_html__( 'fa-heart', 'kuza-minimal-blog' );		
		$defaults['timetable_btn_url_1']			= '#';
		$defaults['timetable_btn_url_2']			= '#';
		$defaults['timetable_btn_url_3']			= '#';
		$defaults['timetable_btn_url_4']			= '#';	
		$defaults['timetable_background_1']			= '#03A0B3';
		$defaults['timetable_background_2']			= '#4F6DCD';
		$defaults['timetable_background_3']			= '#29f287';
		$defaults['timetable_background_4']			= '#8700ff';

		// Single Post Option
		$defaults['single_post_category_enable']		= true;
		$defaults['single_post_posted_on_enable']		= true;
		$defaults['single_post_video_enable']		= true;
		$defaults['single_post_comment_enable']		= true;
		$defaults['single_post_author_enable']		= true;
		$defaults['single_post_pagination_enable']		= true;
		$defaults['single_post_image_enable']		= true;
		$defaults['single_post_header_image_enable']		= true;
		$defaults['single_post_header_title_enable']		= true;
		$defaults['single_post_header_image_as_header_image_enable']		= true;

		// Single Post Option
		$defaults['single_page_video_enable']		= true;
		$defaults['single_page_image_enable']		= true;
		$defaults['single_page_header_image_enable']		= true;
		$defaults['single_page_header_title_enable']		= true;
		$defaults['single_page_header_image_as_header_image_enable']		= true;
		
		$defaults['theme_typography']			=  'default';
		$defaults['body_theme_typography']		=  'default';

		// Curve Option
		$defaults['corporate_curve_shape_enable']		= true;

		//General Section
		$defaults['latest_readmore_text']				= esc_html__('Read More','kuza-minimal-blog');
		$defaults['excerpt_length']				= 50;
		$defaults['layout_options_blog']			= 'no-sidebar';
		$defaults['layout_options_archive']			= 'no-sidebar';
		$defaults['layout_options_page']			= 'right-sidebar';	
		$defaults['layout_options_single']			= 'right-sidebar';	

		//Footer section 
		$defaults['scroll_top_visible']		= true;		
		$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'kuza-minimal-blog' );
		$defaults['powered_by_text']			= esc_html__( 'Kuza Minimal Blog by Sensational Theme', 'kuza-minimal-blog' );

		// Pass through filter.
		$defaults = apply_filters( 'kuza_minimal_blog_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;


/**
*  Get theme options
*/
if ( ! function_exists( 'kuza_minimal_blog_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function kuza_minimal_blog_get_option( $key ) {

			$default_options = kuza_minimal_blog_get_default_theme_options();
		
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;