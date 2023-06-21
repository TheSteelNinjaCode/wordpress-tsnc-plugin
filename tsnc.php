<?php
/*
Plugin Name:       TSNC
Description:       The (TSNC) Plugin is for custom your "WordPress Admin Area", available at thesteelninjacode.com.
Plugin URI:        https://thesteelninjacode.com
Contributors:      (list of wordpress.org, The Steel Ninja Code, Jefferson Abraham)
Author:            Jefferson Abraham
Author URI:        https://thesteelninjacode.com
Donate link:       https://thesteelninjacode.com
Tags:              Custom Admin, Custom, Admin
Version:           1.0
Stable tag:        1.0
Requires at least: 4.5
Tested up to:      4.8
Text Domain:       tsnc
Domain Path:       /languages
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


// exit if file is called directly
if (!defined('ABSPATH')) {
	exit;
}

// load text domain
function tsnc_load_textdomain()
{
	load_plugin_textdomain('tsnc', false, plugin_dir_path(__FILE__) . 'languages/');
}
add_action('plugins_loaded', 'tsnc_load_textdomain');

// If admin area
if (is_admin()) {

	// Include dependencies
	require_once plugin_dir_path(__FILE__) . "admin/admin-menu.php";
	require_once plugin_dir_path(__FILE__) . "admin/settings-page.php";
	require_once plugin_dir_path(__FILE__) . "admin/settings-register.php";
	require_once plugin_dir_path(__FILE__) . "admin/settings-callbacks.php";
	require_once plugin_dir_path(__FILE__) . "admin/settings-validate.php";
}

// include plugin dependencies: admin and public
require_once plugin_dir_path(__FILE__) . "includes/core-functions.php";

// default plugin options
function tsnc_options_default()
{

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => esc_html__('Powered by WordPress', 'tsnc'),
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">' . esc_html__('My custom message', 'tsnc') . '</p>',
		'custom_footer'  => esc_html__('Special message for users', 'tsnc'),
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);
}
