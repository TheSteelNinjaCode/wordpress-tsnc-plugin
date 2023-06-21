<?php
// exit if file is called directly
if (!defined('ABSPATH')) {
    exit;
}

// register plugin settings
function tsnc_register_settings()
{
    /*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback = ''
	);
	
	*/

    register_setting(
        'tsnc_options',
        'tsnc_options',
        'tsnc_callback_validate_options'
    );

    /*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/

    add_settings_section(
        'tsnc_section_login',
        esc_html__('Customize Login Page', 'tsnc'),
        'tsnc_callback_section_login',
        'tsnc'
    );

    add_settings_section(
        'tsnc_section_admin',
        esc_html__('Customize Admin Area', 'tsnc'),
        'tsnc_callback_section_admin',
        'tsnc'
    );

    /*
	
	add_settings_field(
    	string   $id, 
		string   $title, 
		callable $callback, 
		string   $page, 
		string   $section = 'default',
		array    $args = []
	);
	
	*/

    add_settings_field(
        'custom_url_jeff',
        esc_html__('Custom URL', 'tsnc'),
        'tsnc_callback_field_text',
        'tsnc',
        'tsnc_section_login',
        ['id' => 'custom_url', 'label' => esc_html__('Custom URL for the login logo link', 'tsnc')]
    );

    add_settings_field(
        'custom_title',
        esc_html__('Custom Title', 'tsnc'),
        'tsnc_callback_field_text',
        'tsnc',
        'tsnc_section_login',
        ['id' => 'custom_title', 'label' => esc_html__('Custom title attribute for the logo link', 'tsnc')]
    );

    add_settings_field(
        'custom_style',
        esc_html__('Custom Style', 'tsnc'),
        'tsnc_callback_field_radio',
        'tsnc',
        'tsnc_section_login',
        ['id' => 'custom_style', 'label' => esc_html__('Custom CSS for the Login screen', 'tsnc')]
    );

    add_settings_field(
        'custom_message',
        esc_html__('Custom Message', 'tsnc'),
        'tsnc_callback_field_textarea',
        'tsnc',
        'tsnc_section_login',
        ['id' => 'custom_message', 'label' => esc_html__('Custom text and/or markup', 'tsnc')]
    );

    add_settings_field(
        'custom_footer',
        esc_html__('Custom Footer', 'tsnc'),
        'tsnc_callback_field_text',
        'tsnc',
        'tsnc_section_admin',
        ['id' => 'custom_footer', 'label' => esc_html__('Custom footer text', 'tsnc')]
    );

    add_settings_field(
        'custom_toolbar',
        esc_html__('Custom Toolbar', 'tsnc'),
        'tsnc_callback_field_checkbox',
        'tsnc',
        'tsnc_section_admin',
        ['id' => 'custom_toolbar', 'label' => esc_html__('Remove new post and comment links from the Toolbar', 'tsnc')]
    );

    add_settings_field(
        'custom_scheme',
        esc_html__('Custom Scheme', 'tsnc'),
        'tsnc_callback_field_select',
        'tsnc',
        'tsnc_section_admin',
        ['id' => 'custom_scheme', 'label' => esc_html__('Default color scheme for new users', 'tsnc')]
    );
}
add_action('admin_init', 'tsnc_register_settings');
