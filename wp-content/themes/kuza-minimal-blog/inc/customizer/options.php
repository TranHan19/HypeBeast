<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function kuza_minimal_blog_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'kuza-minimal-blog' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'kuza_minimal_blog_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function kuza_minimal_blog_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'kuza-minimal-blog' ),
            'off'       => esc_html__( 'Disable', 'kuza-minimal-blog' )
        );
        return apply_filters( 'kuza_minimal_blog_switch_options', $arr );
    }
endif;

/**
 * List of category for category choices.
 * @return Array Array of post ids and name.
 */
function kuza_minimal_blog_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'category',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'kuza-minimal-blog' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}
if ( ! function_exists( 'kuza_minimal_blog_get_woo_product' ) ) {
    /**
     * Get product.
     */
    function kuza_minimal_blog_get_woo_product() {
        $args = array(
            'posts_per_page' => -1,
        );
         
        $choices = array( '' => esc_html__( '--Select--', 'kuza-minimal-blog' ) );
        $products = wc_get_products( $args );
        foreach ( $products as $product ) {
            $id = $product->get_id();
            $title = $product->get_name();
            $choices[ $id ] = $title;
        }
        return $choices;
    }
}




 /**
 * Get an array of google fonts.
 * 
 */
function kuza_minimal_blog_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'kuza-minimal-blog' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'kuza_minimal_blog_font_choices', $font_family_arr );
}

if ( ! function_exists( 'kuza_minimal_blog_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function kuza_minimal_blog_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'kuza-minimal-blog' ),
            'header-font-1'   => esc_html__( 'Raleway', 'kuza-minimal-blog' ),
            'header-font-2'   => esc_html__( 'Poppins', 'kuza-minimal-blog' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'kuza-minimal-blog' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'kuza-minimal-blog' ),
            'header-font-5'   => esc_html__( 'Lato', 'kuza-minimal-blog' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'kuza-minimal-blog' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'kuza-minimal-blog' ),
            'header-font-8'   => esc_html__( 'Lora', 'kuza-minimal-blog' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'kuza-minimal-blog' ),
            'header-font-10'   => esc_html__( 'Muli', 'kuza-minimal-blog' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'kuza-minimal-blog' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'kuza-minimal-blog' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'kuza-minimal-blog' ),
            'header-font-14'   => esc_html__( 'Cairo', 'kuza-minimal-blog' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'kuza-minimal-blog' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'kuza-minimal-blog' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'kuza-minimal-blog' ),
            'header-font-18'   => esc_html__( 'Fredericka', 'kuza-minimal-blog' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'kuza-minimal-blog' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'kuza-minimal-blog' ),
        );

        $output = apply_filters( 'kuza_minimal_blog_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'kuza_minimal_blog_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function kuza_minimal_blog_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'kuza-minimal-blog' ),
            'body-font-1'     => esc_html__( 'Raleway', 'kuza-minimal-blog' ),
            'body-font-2'     => esc_html__( 'Poppins', 'kuza-minimal-blog' ),
            'body-font-3'     => esc_html__( 'Roboto', 'kuza-minimal-blog' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'kuza-minimal-blog' ),
            'body-font-5'     => esc_html__( 'Lato', 'kuza-minimal-blog' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'kuza-minimal-blog' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'kuza-minimal-blog' ),
            'body-font-8'   => esc_html__( 'Lora', 'kuza-minimal-blog' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'kuza-minimal-blog' ),
            'body-font-10'   => esc_html__( 'Muli', 'kuza-minimal-blog' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'kuza-minimal-blog' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'kuza-minimal-blog' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'kuza-minimal-blog' ),
            'body-font-14'   => esc_html__( 'Cairo', 'kuza-minimal-blog' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'kuza-minimal-blog' ),
        );

        $output = apply_filters( 'kuza_minimal_blog_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>