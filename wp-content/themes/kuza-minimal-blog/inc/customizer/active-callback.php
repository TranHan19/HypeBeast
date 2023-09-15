<?php
/**
 * Active callback functions.
 *
 * @package Kuza
 */

function kuza_minimal_blog_header_background_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_header_background_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_ads_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_ads_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function kuza_minimal_blog_adssec_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_adssec_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function kuza_minimal_blog_pricing_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_pricing_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function kuza_minimal_blog_about_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_about_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_about_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( kuza_minimal_blog_about_active( $control ) && ( 'about_custom' == $content_type ) );
} 

function kuza_minimal_blog_about_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( kuza_minimal_blog_about_active( $control ) && ( 'about_page' == $content_type ) );
}

function kuza_minimal_blog_about_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( kuza_minimal_blog_about_active( $control ) && ( 'about_post' == $content_type ) );
}

function kuza_minimal_blog_about_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( kuza_minimal_blog_about_active( $control ) && ( 'about_category' == $content_type ) );
}


//========================Slider Section=====================//

function kuza_minimal_blog_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( kuza_minimal_blog_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function kuza_minimal_blog_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( kuza_minimal_blog_slider_active( $control ) && ( 'sr_post' == $content_type ) );
}

function kuza_minimal_blog_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return  kuza_minimal_blog_slider_seperator( $control ) && ( in_array( $content_type, array( 'sr_page', 'sr_post', 'sr_custom' ) ) ) ;
}

function kuza_minimal_blog_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( kuza_minimal_blog_slider_active( $control ) && ( 'sr_custom' == $content_type ) );
}

function kuza_minimal_blog_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( kuza_minimal_blog_slider_active( $control ) && ( 'sr_category' == $content_type ) );
}



//========================Services Section=====================//

function kuza_minimal_blog_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function kuza_minimal_blog_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( kuza_minimal_blog_services_active( $control ) && ( 'services_page' == $content_type ) );
}

function kuza_minimal_blog_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( kuza_minimal_blog_services_active( $control ) && ( 'services_post' == $content_type ) );
}

function kuza_minimal_blog_services_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( kuza_minimal_blog_services_active( $control ) && ( 'services_category' == $content_type ) );
}
//===================End Services Section==============//


//========================Information Section=====================//

function kuza_minimal_blog_information_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_information_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_information_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kuza_minimal_blog_information_active( $control ) && ( 'information_custom' == $content_type ) );
} 

function kuza_minimal_blog_information_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kuza_minimal_blog_information_active( $control ) && ( 'information_page' == $content_type ) );
}

function kuza_minimal_blog_information_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kuza_minimal_blog_information_active( $control ) && ( 'information_post' == $content_type ) );
}


//========================detail Section=====================//

function kuza_minimal_blog_details_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_details_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_details_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( kuza_minimal_blog_details_active( $control ) && ( 'details_custom' == $content_type ) );
} 

function kuza_minimal_blog_details_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( kuza_minimal_blog_details_active( $control ) && ( 'details_page' == $content_type ) );
}

function kuza_minimal_blog_details_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( kuza_minimal_blog_details_active( $control ) && ( 'details_post' == $content_type ) );
}


//========================Recent Section=====================//

function kuza_minimal_blog_recent_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_recent_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_recent_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[recent_content_type]' )->value();
    return ( kuza_minimal_blog_recent_active( $control ) && ( 'recent_page' == $content_type ) );
}

function kuza_minimal_blog_recent_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[recent_content_type]' )->value();
    return ( kuza_minimal_blog_recent_active( $control ) && ( 'recent_post' == $content_type ) );
}

function kuza_minimal_blog_recent_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[recent_content_type]' )->value();
    return ( kuza_minimal_blog_recent_active( $control ) && ( 'recent_category' == $content_type ) );
}

//========================Trending Section=====================//
function kuza_minimal_blog_trending_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_trending_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_trending_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( kuza_minimal_blog_trending_active( $control ) && ( 'trending_custom' == $content_type ) );
} 

function kuza_minimal_blog_trending_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( kuza_minimal_blog_trending_active( $control ) && ( 'trending_page' == $content_type ) );
}

function kuza_minimal_blog_trending_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( kuza_minimal_blog_trending_active( $control ) && ( 'trending_post' == $content_type ) );
}

function kuza_minimal_blog_trending_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( kuza_minimal_blog_trending_active( $control ) && ( 'trending_category' == $content_type ) );
}
//===================End Trending Section==============//

//========================Hero Section=====================//
function kuza_minimal_blog_hero_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_hero_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_hero_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_custom' == $content_type ) );
} 

function kuza_minimal_blog_hero_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_page' == $content_type ) );
}

function kuza_minimal_blog_hero_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_post' == $content_type ) );
}

function kuza_minimal_blog_hero_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_category' == $content_type ) );
} 

function kuza_minimal_blog_hero_right_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_right_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_right_page' == $content_type ) );
}

function kuza_minimal_blog_hero_right_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_right_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_right_post' == $content_type ) );
}

function kuza_minimal_blog_hero_right_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_right_content_type]' )->value();
    return ( kuza_minimal_blog_hero_active( $control ) && ( 'hero_right_category' == $content_type ) );
}
//===================End Hero Section==============//

//========================Headlines Section=====================//
function kuza_minimal_blog_headlines_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_headlines_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function kuza_minimal_blog_headlines_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[headlines_content_type]' )->value();
    return ( kuza_minimal_blog_headlines_active( $control ) && ( 'headlines_page' == $content_type ) );
}

function kuza_minimal_blog_headlines_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[headlines_content_type]' )->value();
    return ( kuza_minimal_blog_headlines_active( $control ) && ( 'headlines_post' == $content_type ) );
}

function kuza_minimal_blog_headlines_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[headlines_content_type]' )->value();
    return ( kuza_minimal_blog_headlines_active( $control ) && ( 'headlines_category' == $content_type ) );
}
//===================End Headlines Section==============//
//========================NewsFeatured Section=====================//

function kuza_minimal_blog_newsfeatured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_newsfeatured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_newsfeatured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[newsfeatured_content_type]' )->value();
    return ( kuza_minimal_blog_newsfeatured_active( $control ) && ( 'newsfeatured_page' == $content_type ) );
}

function kuza_minimal_blog_newsfeatured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[newsfeatured_content_type]' )->value();
    return ( kuza_minimal_blog_newsfeatured_active( $control ) && ( 'newsfeatured_post' == $content_type ) );
}

function kuza_minimal_blog_newsfeatured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[newsfeatured_content_type]' )->value();
    return ( kuza_minimal_blog_newsfeatured_active( $control ) && ( 'newsfeatured_category' == $content_type ) );
}

//========================CategryNews Section=====================//
function kuza_minimal_blog_categorynews_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_categorynews_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Project Section=====================//

function kuza_minimal_blog_popular_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_popular_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_popular_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( kuza_minimal_blog_popular_active( $control ) && ( 'popular_page' == $content_type ) );
}

function kuza_minimal_blog_popular_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( kuza_minimal_blog_popular_active( $control ) && ( 'popular_post' == $content_type ) );
}

function kuza_minimal_blog_popular_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( kuza_minimal_blog_popular_active( $control ) && ( 'popular_category' == $content_type ) );
}

function kuza_minimal_blog_popular_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( kuza_minimal_blog_popular_active( $control ) && ( 'popular_custom' == $content_type ) );
}

function kuza_minimal_blog_popular_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return  kuza_minimal_blog_popular_seperator( $control ) && ( in_array( $content_type, array( 'popular_page', 'popular_post', 'popular_custom' ) ) ) ;
}

//========================Cta Section=====================//

function kuza_minimal_blog_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_cta_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( kuza_minimal_blog_cta_active( $control ) && ( 'cta_custom' == $content_type ) );
} 

function kuza_minimal_blog_cta_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( kuza_minimal_blog_cta_active( $control ) && ( 'cta_page' == $content_type ) );
}

function kuza_minimal_blog_cta_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( kuza_minimal_blog_cta_active( $control ) && ( 'cta_post' == $content_type ) );
}


//========================Team Section=====================//

function kuza_minimal_blog_team_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_team_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kuza_minimal_blog_team_active( $control ) && ( 'team_custom' == $content_type ) );
} 

function kuza_minimal_blog_team_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kuza_minimal_blog_team_active( $control ) && ( 'team_page' == $content_type ) );
}

function kuza_minimal_blog_team_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kuza_minimal_blog_team_active( $control ) && ( 'team_post' == $content_type ) );
}

function kuza_minimal_blog_team_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kuza_minimal_blog_team_active( $control ) && ( 'team_category' == $content_type ) );
}

//========================Project Section=====================//

function kuza_minimal_blog_project_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_project_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_project_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kuza_minimal_blog_project_active( $control ) && ( 'project_page' == $content_type ) );
}

function kuza_minimal_blog_project_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kuza_minimal_blog_project_active( $control ) && ( 'project_post' == $content_type ) );
}

function kuza_minimal_blog_project_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kuza_minimal_blog_project_active( $control ) && ( 'project_category' == $content_type ) );
}

//========================Event Section=====================//

function kuza_minimal_blog_event_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_event_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
// Completed Event

function kuza_minimal_blog_event_completed_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_event_completed_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_event_completed_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_content_type]' )->value();
    return ( kuza_minimal_blog_event_completed_active( $control ) && ( 'event_page' == $content_type ) );
}

function kuza_minimal_blog_event_completed_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_content_type]' )->value();
    return ( kuza_minimal_blog_event_completed_active( $control ) && ( 'event_post' == $content_type ) );
}

function kuza_minimal_blog_event_completed_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_content_type]' )->value();
    return ( kuza_minimal_blog_event_completed_active( $control ) && ( 'event_category' == $content_type ) );
}

// Upcoming Event

function kuza_minimal_blog_event_upcoming_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_event_upcoming_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_event_upcoming_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_upcoming_content_type]' )->value();
    return ( kuza_minimal_blog_event_upcoming_active( $control ) && ( 'event_upcoming_page' == $content_type ) );
}

function kuza_minimal_blog_event_upcoming_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_upcoming_content_type]' )->value();
    return ( kuza_minimal_blog_event_upcoming_active( $control ) && ( 'event_upcoming_post' == $content_type ) );
}

function kuza_minimal_blog_event_upcoming_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_upcoming_content_type]' )->value();
    return ( kuza_minimal_blog_event_upcoming_active( $control ) && ( 'event_upcoming_category' == $content_type ) );
}

//========================Features Section=====================//

function kuza_minimal_blog_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_features_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kuza_minimal_blog_features_active( $control ) && ( 'features_custom' == $content_type ) );
} 

function kuza_minimal_blog_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kuza_minimal_blog_features_active( $control ) && ( 'features_page' == $content_type ) );
}

function kuza_minimal_blog_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kuza_minimal_blog_features_active( $control ) && ( 'features_post' == $content_type ) );
}

function kuza_minimal_blog_features_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kuza_minimal_blog_features_active( $control ) && ( 'features_category' == $content_type ) );
}

//========================Conatct Section=====================//

function kuza_minimal_blog_contact_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_contact_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Testimonial Section=====================//

function kuza_minimal_blog_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_testimonial_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kuza_minimal_blog_testimonial_active( $control ) && ( 'testimonial_custom' == $content_type ) );
} 

function kuza_minimal_blog_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kuza_minimal_blog_testimonial_active( $control ) && ( 'testimonial_page' == $content_type ) );
}

function kuza_minimal_blog_testimonial_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kuza_minimal_blog_testimonial_active( $control ) && ( 'testimonial_post' == $content_type ) );
}

function kuza_minimal_blog_testimonial_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kuza_minimal_blog_testimonial_active( $control ) && ( 'testimonial_category' == $content_type ) );
}

//========================Counter Section=====================//
function kuza_minimal_blog_counter_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_counter_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Instagram Section=====================//

function kuza_minimal_blog_instagram_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_instagram_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Porfolio Section=====================//

function kuza_minimal_blog_portfolio_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_portfolio_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}




//========================Must Read Section=====================//


function kuza_minimal_blog_mustread_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_mustread_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_mustread_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( kuza_minimal_blog_mustread_active( $control ) && ( 'mustread_page' == $content_type ) );
}

function kuza_minimal_blog_mustread_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( kuza_minimal_blog_mustread_active( $control ) && ( 'mustread_post' == $content_type ) );
}

function kuza_minimal_blog_mustread_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( kuza_minimal_blog_mustread_active( $control ) && ( 'mustread_category' == $content_type ) );
}

//========================GalleryView Section=====================//


function kuza_minimal_blog_galleryview_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_galleryview_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_galleryview_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[galleryview_content_type]' )->value();
    return ( kuza_minimal_blog_galleryview_active( $control ) && ( 'galleryview_page' == $content_type ) );
}

function kuza_minimal_blog_galleryview_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[galleryview_content_type]' )->value();
    return ( kuza_minimal_blog_galleryview_active( $control ) && ( 'galleryview_post' == $content_type ) );
}

function kuza_minimal_blog_galleryview_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[galleryview_content_type]' )->value();
    return ( kuza_minimal_blog_galleryview_active( $control ) && ( 'galleryview_category' == $content_type ) );
}

//========================Gallery Section=====================//


function kuza_minimal_blog_gallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_gallery_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_gallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kuza_minimal_blog_gallery_active( $control ) && ( 'gallery_page' == $content_type ) );
}

function kuza_minimal_blog_gallery_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kuza_minimal_blog_gallery_active( $control ) && ( 'gallery_post' == $content_type ) );
}

function kuza_minimal_blog_gallery_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kuza_minimal_blog_gallery_active( $control ) && ( 'gallery_category' == $content_type ) );
}

//========================Nature Gallery Section=====================//


function kuza_minimal_blog_naturegallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_naturegallery_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_naturegallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturegallery_content_type]' )->value();
    return ( kuza_minimal_blog_naturegallery_active( $control ) && ( 'naturegallery_page' == $content_type ) );
}

function kuza_minimal_blog_naturegallery_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturegallery_content_type]' )->value();
    return ( kuza_minimal_blog_naturegallery_active( $control ) && ( 'naturegallery_post' == $content_type ) );
}

function kuza_minimal_blog_naturegallery_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturegallery_content_type]' )->value();
    return ( kuza_minimal_blog_naturegallery_active( $control ) && ( 'naturegallery_category' == $content_type ) );
}

//========================Right Slide Section=====================//


function kuza_minimal_blog_rightslide_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_rightslide_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_rightslide_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[rightslide_content_type]' )->value();
    return ( kuza_minimal_blog_rightslide_active( $control ) && ( 'rightslide_page' == $content_type ) );
}

function kuza_minimal_blog_rightslide_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[rightslide_content_type]' )->value();
    return ( kuza_minimal_blog_rightslide_active( $control ) && ( 'rightslide_post' == $content_type ) );
}

function kuza_minimal_blog_rightslide_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[rightslide_content_type]' )->value();
    return ( kuza_minimal_blog_rightslide_active( $control ) && ( 'rightslide_category' == $content_type ) );
}

//========================Nature Featured Section=====================//


function kuza_minimal_blog_naturefeatured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_naturefeatured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_naturefeatured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturefeatured_content_type]' )->value();
    return ( kuza_minimal_blog_naturefeatured_active( $control ) && ( 'naturefeatured_page' == $content_type ) );
}

function kuza_minimal_blog_naturefeatured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturefeatured_content_type]' )->value();
    return ( kuza_minimal_blog_naturefeatured_active( $control ) && ( 'naturefeatured_post' == $content_type ) );
}

function kuza_minimal_blog_naturefeatured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturefeatured_content_type]' )->value();
    return ( kuza_minimal_blog_naturefeatured_active( $control ) && ( 'naturefeatured_category' == $content_type ) );
}

//========================Travel Section=====================//


function kuza_minimal_blog_travel_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_travel_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_travel_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[travel_content_type]' )->value();
    return ( kuza_minimal_blog_travel_active( $control ) && ( 'travel_page' == $content_type ) );
}

function kuza_minimal_blog_travel_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[travel_content_type]' )->value();
    return ( kuza_minimal_blog_travel_active( $control ) && ( 'travel_post' == $content_type ) );
}

function kuza_minimal_blog_travel_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[travel_content_type]' )->value();
    return ( kuza_minimal_blog_travel_active( $control ) && ( 'travel_category' == $content_type ) );
}


//========================Blog Section=====================//

function kuza_minimal_blog_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( kuza_minimal_blog_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function kuza_minimal_blog_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( kuza_minimal_blog_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function kuza_minimal_blog_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( kuza_minimal_blog_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}

//========================Message Section=====================//

function kuza_minimal_blog_message_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_message_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_message_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( kuza_minimal_blog_message_active( $control ) && ( 'message_custom' == $content_type ) );
} 

function kuza_minimal_blog_message_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( kuza_minimal_blog_message_active( $control ) && ( 'message_page' == $content_type ) );
}

function kuza_minimal_blog_message_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( kuza_minimal_blog_message_active( $control ) && ( 'message_post' == $content_type ) );
}

//========================Video Section=====================//

function kuza_minimal_blog_video_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_video_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_sensational_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_sensational_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_sensational_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( kuza_minimal_blog_sensational_active( $control ) && ( 'sensational_page' == $content_type ) );
}

function kuza_minimal_blog_sensational_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( kuza_minimal_blog_sensational_active( $control ) && ( 'sensational_post' == $content_type ) );
}

function kuza_minimal_blog_sensational_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( kuza_minimal_blog_sensational_active( $control ) && ( 'sensational_category' == $content_type ) );
}


//========================Tips Section=====================//

function kuza_minimal_blog_tips_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_tips_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_tips_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( kuza_minimal_blog_tips_active( $control ) && ( 'tips_page' == $content_type ) );
}

function kuza_minimal_blog_tips_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( kuza_minimal_blog_tips_active( $control ) && ( 'tips_post' == $content_type ) );
}

function kuza_minimal_blog_tips_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( kuza_minimal_blog_tips_active( $control ) && ( 'tips_category' == $content_type ) );
}

//========================Client Section=====================//

function kuza_minimal_blog_client_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_client_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Appointment Section=====================//

function kuza_minimal_blog_appointment_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_appointment_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Time Table Section=====================//

function kuza_minimal_blog_timetable_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_timetable_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_timetable_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[timetable_content_type]' )->value();
    return ( kuza_minimal_blog_timetable_active( $control ) && ( 'timetable_custom' == $content_type ) );
} 

function kuza_minimal_blog_timetable_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[timetable_content_type]' )->value();
    return ( kuza_minimal_blog_timetable_active( $control ) && ( 'timetable_page' == $content_type ) );
}

function kuza_minimal_blog_timetable_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[timetable_content_type]' )->value();
    return ( kuza_minimal_blog_timetable_active( $control ) && ( 'timetable_post' == $content_type ) );
}

function kuza_minimal_blog_timetable_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[timetable_content_type]' )->value();
    return ( kuza_minimal_blog_timetable_active( $control ) && ( 'timetable_category' == $content_type ) );
}

//========================Fitness Category Section=====================//

function kuza_minimal_blog_fitnesscat_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_fitnesscat_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function kuza_minimal_blog_fitnesscat_product_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fitnesscat_content_type]' )->value();
    return ( kuza_minimal_blog_fitnesscat_active( $control ) && ( 'product-category' == $content_type ) );
}

function kuza_minimal_blog_fitnesscat_post_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fitnesscat_content_type]' )->value();
    return ( kuza_minimal_blog_fitnesscat_active( $control ) && ( 'post-category' == $content_type ) );
}


//========================Shop Product Category Section=====================//

function kuza_minimal_blog_shopproduct_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_shopproduct_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_shopproduct_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( kuza_minimal_blog_shopproduct_active( $control ) && ( 'shopproduct_page' == $content_type ) );
}

function kuza_minimal_blog_shopproduct_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( kuza_minimal_blog_shopproduct_active( $control ) && ( 'shopproduct_post' == $content_type ) );
}

function kuza_minimal_blog_shopproduct_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( kuza_minimal_blog_shopproduct_active( $control ) && ( 'shopproduct_category' == $content_type ) );
}

function kuza_minimal_blog_shopproduct_product( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( kuza_minimal_blog_shopproduct_active( $control ) && ( 'product' == $content_type ) );
}

function kuza_minimal_blog_shopproduct_product_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( kuza_minimal_blog_shopproduct_active( $control ) && ( 'product-category' == $content_type ) );
}

function kuza_minimal_blog_shopproduct_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return  kuza_minimal_blog_shopproduct_seperator( $control ) && ( in_array( $content_type, array( 'shopproduct_page', 'shopproduct_post', 'shopproduct_custom' ) ) ) ;
}

//========================Featured Section=====================//

function kuza_minimal_blog_featured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kuza_minimal_blog_featured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( kuza_minimal_blog_featured_active( $control ) && ( 'featured_page' == $content_type ) );
}

function kuza_minimal_blog_featured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( kuza_minimal_blog_featured_active( $control ) && ( 'featured_post' == $content_type ) );
}

function kuza_minimal_blog_featured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( kuza_minimal_blog_featured_active( $control ) && ( 'featured_category' == $content_type ) );
}

function topbar_contact_info_option( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[topbar_layout_option]' )->value();
    return ( ( 'contact-info-option' == $content_type ) );
}
function topbar_current_date_option( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[topbar_layout_option]' )->value();
    return ( ( 'current-date-option' == $content_type ) );
}
function kuza_minimal_blog_header_three( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return ( ( 'header-three' == $content_type ) );
}
function kuza_minimal_blog_header_five( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return ( ( 'header-five' == $content_type ) );
}

function kuza_minimal_blog_header_background_image( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return in_array($home_layout,array('header-two','header-three'));
}
function kuza_minimal_blog_headlines_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-normal-magazine'));
}

function kuza_minimal_blog_categorynews_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-normal-magazine'));
}

function kuza_minimal_blog_portfolio_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-blog','home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_instagram_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-blog','home-nature'));
}

function kuza_minimal_blog_popular_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-blog'));
}

function kuza_minimal_blog_hero_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine'));
}

function kuza_minimal_blog_recent_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine'));
}

function kuza_minimal_blog_slider_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-blog','home-classic-blog','home-normal-magazine','home-business', 'home-corporate','home-nature', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_services_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_information_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_team_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_testimonial_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_pricing_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_cta_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_client_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-business', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_appointment_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_galleryview_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-magazine','home-magazine','home-normal-blog','home-minimal-blog','home-classic-blog'));
}

function kuza_minimal_blog_newsfeatured_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-normal-magazine','home-classic-blog'));
}

function kuza_minimal_blog_mustread_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-blog','home-normal-magazine','home-normal-blog', 'home-business', 'home-corporate', 'home-medical','home-education','home-fitness','home-minimal-blog','home-classic-blog'));
}
function kuza_minimal_blog_project_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-fitness'));
}

function kuza_minimal_blog_travel_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-blog','home-normal-magazine','home-normal-blog'));
}

function kuza_minimal_blog_trending_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-blog','home-nature','home-normal-magazine'));
}

function kuza_minimal_blog_message_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-normal-blog','home-business', 'home-corporate', 'home-medical','home-education','home-fitness','home-minimal-blog','home-classic-blog')); 
}
function kuza_minimal_blog_timetable_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-medical','home-education','home-fitness')); 
}
function kuza_minimal_blog_topbar_current_date_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-normal-magazine','home-magazine', 'home-medical','home-education','home-fitness'));
}

function kuza_minimal_blog_topbar_contact_info_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-blog', 'home-business', 'home-corporate'));
}
function kuza_minimal_blog_home_magazine_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine'));
}
function kuza_minimal_blog_naturegallery_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-nature'));
}
function kuza_minimal_blog_rightslide_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-nature'));
}
function kuza_minimal_blog_naturefeatured_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-nature'));
}
function kuza_minimal_blog_gallery_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-nature','home-classic-blog'));
}
function kuza_minimal_blog_event_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-fitness'));
}
function kuza_minimal_blog_counter_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-fitness'));
}
function kuza_minimal_blog_fitnesscat_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-fitness','home-minimal-blog','home-classic-blog'));
}
function kuza_minimal_blog_shopproduct_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-fitness'));
}

/**
 * Active Callback for top bar section
 */
function kuza_minimal_blog_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function kuza_minimal_blog_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

