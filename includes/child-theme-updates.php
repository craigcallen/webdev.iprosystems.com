<?php
function my_custom_theme_update_checker() {
    // URL where the update information is stored
    // This should point to a JSON file in your S3 bucket with details about the latest theme version
    $update_info_url = 'http://iprosystems-website-theme-updates.s3-website-us-east-1.amazonaws.com/theme-update-info.json';

    // Fetch the update info from the S3 bucket
    $update_info = file_get_contents($update_info_url);
    if ($update_info === false) {
        return;
    }

    $update_info = json_decode($update_info, true);
    if (!is_array($update_info)) {
        return;
    }

    // Get current theme data
    $theme = wp_get_theme();

    // Compare current version with the latest version available
    if (version_compare($theme->get('Version'), $update_info['new_version'], '<')) {
        // Add update info to the transient data if a new version is available
        $transient = get_site_transient('update_themes');
        $transient->response[$theme->get_stylesheet()] = array(
            'theme'       => $theme->get_stylesheet(),
            'new_version' => $update_info['new_version'],
            'url'         => $update_info['https://webdev.iprosystems.com/changelog/'], // URL to the theme's details or changelog
            'package'     => $update_info['http://iprosystems-website-theme-updates.s3-website-us-east-1.amazonaws.com/iprosystems.zip'], // URL to the updated theme package
        );
        set_site_transient('update_themes', $transient);
    }
}

add_action('admin_init', 'my_custom_theme_update_checker');
