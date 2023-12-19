<?php
//Custom Post Types in Search Results
function amdd_include_custom_post_types_in_search_results ( $query ) {
    if ( $query->is_main_query() && $query->is_search() && ! is_admin() ) {
        $query->set( 'post_type', array( 'post', '', '', '', '', '' ) );
    }
}
add_action( 'pre_get_posts', 'amdd_include_custom_post_types_in_search_results' );