<?
function custom_as3cf_setting_bucket($bucket) {
    // Set the same bucket for all subsites
    $common_bucket = 'multisiteconfig';

    return $common_bucket;
}

// Hook the custom function to the as3cf_setting_bucket filter
add_filter('as3cf_setting_bucket', 'custom_as3cf_setting_bucket');
