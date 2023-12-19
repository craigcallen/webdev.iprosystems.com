<?php
function daily_permanent_post_deletion() {
    // Define an array of custom post types to be deleted.
    $custom_post_types = array('weekly-ad', 'promo');

    foreach ($custom_post_types as $post_type) {
        // Get all posts of the specified post type with 'trash' status.
        $posts = get_posts(array(
            'post_type' => $post_type,
            'post_status' => 'trash',
            'posts_per_page' => -1, // Get all trashed posts.
        ));

        foreach ($posts as $post) {
            // Delete the attached media/files.
            $media_ids = get_post_meta($post->ID, '_thumbnail_id', true);
            if ($media_ids) {
                foreach ($media_ids as $media_id) {
                    wp_delete_attachment($media_id, true);
                }
            }

            // Permanently delete the post.
            wp_delete_post($post->ID, true);
        }
    }
}

// Schedule the daily execution of the custom function.
if (!wp_next_scheduled('daily_permanent_post_deletion')) {
    wp_schedule_event(current_time('timestamp'), 'daily', 'daily_permanent_post_deletion');
}

// Hook the function into the scheduled event.
add_action('daily_permanent_post_deletion', 'daily_permanent_post_deletion');
