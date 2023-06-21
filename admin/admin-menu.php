<?php

// exit if file is called directly
if (!defined('ABSPATH')) {
    exit;
}

// add top-level administrative menu
function tsnc_add_toplevel_menu()
{

    /* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, 
			string   $menu_slug,
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null 
		)
	*/

    add_menu_page(
        esc_html__('TSNC Settings', 'tsnc'),
        'TSNC',
        'manage_options',
        'tsnc',
        'tsnc_display_settings_page',
        'dashicons-admin-generic',
        null
    );
}
add_action('admin_menu', 'tsnc_add_toplevel_menu');
