<?php
add_action('template_redirect', 'redirect_custom_post_to_archive');

function redirect_custom_post_to_archive() {
    $post_type = 'weekly-ad'; // Replace 'weekly-ad' with your custom post type name
    $post_type_archive_url = get_post_type_archive_link($post_type);

    if (is_singular($post_type)) {
        wp_redirect($post_type_archive_url, 301);
        exit;
    }
}

