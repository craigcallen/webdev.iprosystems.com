<?php
function custom_post_type_permalink($permalink, $post, $leavename) {
    // Get the post type
    $post_type = get_post_type($post);

    // Define the post types for which you want to change the permalink structure
    $custom_post_types = array('weekly-ad', 'alert', 'promo', 'reward', 'slider');

    // Check if the current post type is in the array
    if (in_array($post_type, $custom_post_types)) {
        // Use the post ID in the permalink
        $permalink = home_url("/$post_type/{$post->ID}/");
    }

    return $permalink;
}

// Hook into the post_type_link filter
add_filter('post_type_link', 'custom_post_type_permalink', 10, 3);
