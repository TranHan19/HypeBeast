<?php
/**
 * About metabox file.
 *
 * @package Kuza
 * @since Kuza Minimal Blog 1.0
 */

if ( ! function_exists( 'kuza_minimal_blog_about_meta_callback' ) ) :
    /** 
     * Outputs the content of the About Meta
     */
    function kuza_minimal_blog_about_meta_callback( $post ) {
        wp_nonce_field( basename( __FILE__ ), 'kuza_minimal_blog_nonce' );
        $about_meta = get_post_meta( $post->ID, 'kuza-minimal-blog-about-meta', true );
        ?>
        <p>
         <label for="kuza-minimal-blog-about-meta" class="kuza-minimal-blog-row-title"><?php esc_html_e( 'About Meta', 'kuza-minimal-blog' )?></label>
         <input class="widefat" type="text" name="kuza-minimal-blog-about-meta" id="kuza-minimal-blog-about-meta" value="<?php echo esc_html( $about_meta ); ?>"/>     
        </p>

        <?php
    }
endif;

if ( ! function_exists( 'kuza_minimal_blog_about_meta_save' ) ) :
    /**
     * Saves the About Meta input
     */
    function kuza_minimal_blog_about_meta_save( $post_id ) {
        // Checks save status
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce = ( isset( $_POST[ 'kuza_minimal_blog_nonce' ] ) && wp_verify_nonce( sanitize_key( $_POST[ 'kuza_minimal_blog_nonce' ] ), basename( __FILE__ ) ) ) ? 'true' : 'false';

        // Exits script depending on save status
        if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
            return;
        }

        // Checks for input and sanitizes/saves if needed
        if( isset( $_POST[ 'kuza-minimal-blog-about-meta' ] ) ) {
            update_post_meta( $post_id, 'kuza-minimal-blog-about-meta', sanitize_text_field( wp_unslash( $_POST[ 'kuza-minimal-blog-about-meta' ] ) ) );
        }

    }
endif;
add_action( 'save_post', 'kuza_minimal_blog_about_meta_save' );

