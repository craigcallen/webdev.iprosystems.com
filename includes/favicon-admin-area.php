<?php
//Add Favicon to Backend and Login Page
function add_site_favicon() {
    echo '<link rel="shortcut icon"
href="https://allianceretailgroup-wordpress-media-files.s3.us-east-2.amazonaws.com/wp-content/uploads/2023/06/favicon.png" />';
}

add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');