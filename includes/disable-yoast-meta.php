<?php
// Returns true if user has specific role 
function check_user_role( $role, $user_id = null ) {
    if ( is_numeric( $user_id ) )
        $user = get_userdata( $user_id );
    else
        $user = wp_get_current_user();
    if ( empty( $user ) )
        return false;
    return in_array( $role, (array) $user->roles );
}
 
// Disable WordPress SEO meta box for all roles other than administrator and seo
function wpse_init(){
    if( !(check_user_role('') || check_user_role('administrator')) ){
        // Remove page analysis columns from post lists, also SEO status on post editor
        add_filter('wpseo_use_page_analysis', '__return_false');
        // Remove Yoast meta boxes
        add_action('add_meta_boxes', 'disable_seo_metabox', 100000);
    }   
}
add_action('init', 'wpse_init');
 
function disable_seo_metabox(){
    remove_meta_box('wpseo_meta', 'post', 'normal');
    remove_meta_box('wpseo_meta', 'page', 'normal');
    remove_meta_box('wpseo_meta', 'event', 'normal');
    remove_meta_box('wpseo_meta', 'location', 'normal');
    remove_meta_box('wpseo_meta', 'service', 'normal');
}