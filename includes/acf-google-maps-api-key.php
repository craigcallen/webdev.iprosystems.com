<?php
//Add Google Maps API to Advanced Custom Fields
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBKh7nadldo40hwf95hLg89SkOdbcaK8PU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');