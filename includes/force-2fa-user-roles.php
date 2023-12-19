<?
add_filter( 'sg_security_2fa_roles', 'add_user_roles_to_2fa' );
function add_user_roles_to_2fa( $roles ) {
    $roles[] = 'web_manager';
    $roles[] = 'editor';
    $roles[] = 'coordinator';
    return $roles;
}
