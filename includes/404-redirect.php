<?php
add_action( 'template_redirect', 'wpk_redreict_to_custom_404_page' );
function wpk_redreict_to_custom_404_page(){
    // check if is a 404 error
    if( is_404()  ){
        wp_redirect( home_url( '/' ) );
        exit();
    }
}