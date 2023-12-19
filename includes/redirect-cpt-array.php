<?php
function redirect_custom_post_types_to_homepage() {
    // Array of custom post types to redirect
    $custom_post_types = array('alert', 'promo', 'reward', 'slider', 'version');

    // Check if the current query is for any of the specified custom post types
    if (is_singular($custom_post_types)) {
        // Redirect to the homepage
        wp_redirect(home_url(), 301);
        exit; // Ensure that no further code is executed
    }
}

// Hook the function to the 'template_redirect' action
add_action('template_redirect', 'redirect_custom_post_types_to_homepage');
?>

