<?php
add_shortcode( 'site_title','db_site_title_shortcode' );
function db_site_title_shortcode()
{
    return get_bloginfo( 'name' );
}