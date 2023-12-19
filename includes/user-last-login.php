<?php
//Record user's last login to custom meta
add_action( 'wp_login', 'smartwp_capture_login_time', 10, 2 );
function smartwp_capture_login_time( $user_login, $user ) {
 update_user_meta( $user->ID, 'last_login', time() );
}
//Register new custom column with last login time
add_filter( 'manage_users_columns', 'smartwp_user_last_login_column' );
add_filter( 'manage_users_custom_column', 'smartwp_last_login_column', 10, 3 );
function smartwp_user_last_login_column( $columns ) {
$columns['last_login'] = 'Last Login';
return $columns;
}
function smartwp_last_login_column( $output, $column_id, $user_id ){
if( $column_id == 'last_login' ) {
$last_login = get_user_meta( $user_id, 'last_login', true );
$date_format = 'M j, Y';
$hover_date_format = 'F j, Y, g:i a';
$output = $last_login ? '<div title="Last login: '.date( $hover_date_format, $last_login ).'">'.human_time_diff( $last_login ).'</div>' : 'No record';
 }
return $output;
}
//Add [lastlogin] shortcode
function smartwp_lastlogin_shortcode( $atts ) {
$atts = shortcode_atts(
array(
'user_id' => false,
 ), $atts, 'lastlogin' );
$last_login = get_the_author_meta('last_login', $atts['user_id']);
if( empty($last_login) ){ return false; };
$the_login_date = human_time_diff($last_login);
return $the_login_date; 
}
add_shortcode( 'lastlogin', 'smartwp_lastlogin_shortcode' );