<?php
add_action( 'rest_api_init', function () {
    add_action( 'rest_pre_serve_request', function () {
        header( 'Access-Control-Allow-Headers: Authorization, Content-Type, X-WP-Wpml-Language, X-API-KEY', true );
        header( 'Access-Control-Allow-Origin: *' );
    } );
}, 15 );

function add_cors_http_header(){
	header("Access-Control-Allow-Origin: localhost");
}

add_filter('kses_allowed_protocols', function($protocols) {
    $protocols[] = 'capacitor';
    return $protocols;
});

add_filter('kses_allowed_protocols', function($protocols) {
    $protocols[] = 'ionic';
    return $protocols;
});
