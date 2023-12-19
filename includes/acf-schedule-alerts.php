<?php
// Hook into the acf/save_post action.
add_action('acf/save_post', 'alerts_set_publish_date_from_acf', 20);

function alerts_set_publish_date_from_acf($post_id) {
    // Check if this is a custom post type.
    if (get_post_type($post_id) == 'alert') {
        // Get the date from the ACF field.
        $date = get_field('arg_alert_start_date', $post_id);

        // If a date is set in the ACF field, update the post's publish date.
        if ($date) {
            // Convert the ACF date field value to a timestamp.
            $timestamp = strtotime($date);

            // Set the post's publish date.
            wp_update_post(array(
                'ID'            => $post_id,
                'post_date'     => date('Y-m-d H:i:s', $timestamp),
                'post_date_gmt' => gmdate('Y-m-d H:i:s', $timestamp),
            ));
        }
    }
}
