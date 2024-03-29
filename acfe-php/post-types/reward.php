<?php 

acfe_register_post_type(array(
    'name' => 'reward',
    'label' => 'Rewards',
    'active' => true,
    'description' => '',
    'hierarchical' => false,
    'supports' => array(
        'title',
        'custom-fields',
    ),
    'taxonomies' => array(),
    'public' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'can_export' => true,
    'delete_with_user' => null,
    'labels' => array(
        'singular_name' => 'Reward',
        'add_new' => 'Add New Reward',
        'add_new_item' => 'Add New Reward',
        'edit_item' => 'Edit Reward',
        'new_item' => 'New Reward',
        'view_item' => 'View Reward',
        'view_items' => 'View Rewards',
        'search_items' => 'Search Rewards',
        'not_found' => 'Reward Not Found',
        'all_items' => 'All Rewards',
        'archives' => 'Rewards',
    ),
    'menu_position' => '',
    'menu_icon' => 'dashicons-awards',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'has_archive' => 'rewards',
    'rewrite' => true,
    'capability_type' => 'post',
    'capabilities' => array(),
    'map_meta_cap' => null,
    'show_in_rest' => true,
    'rest_base' => 'rewards',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'acfe_archive_template' => '',
    'acfe_archive_ppp' => 13,
    'acfe_archive_orderby' => 'date',
    'acfe_archive_order' => 'DESC',
    'acfe_archive_meta_key' => '',
    'acfe_archive_meta_type' => '',
    'acfe_single_template' => '',
    'acfe_admin_archive' => false,
    'acfe_admin_ppp' => 50,
    'acfe_admin_orderby' => 'date',
    'acfe_admin_order' => 'DESC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
    'acfe_autosync' => array(
        'php',
        'json',
    ),
    'modified' => 1704996518,
));

