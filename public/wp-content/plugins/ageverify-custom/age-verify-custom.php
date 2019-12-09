<?php
/*
Plugin Name: AgeVerify Custom
Plugin URI: https://imbibedigital.co
Description: Add age verification to your WordPress site, via AgeVerify
Version: 5.0.134
Author: Imbibe Digital
Author URI: https://imbibedigital.co
Text Domain: ageverify
*/



// ------------------------------------------------------------------------
// REQUIRE MINIMUM VERSION OF WORDPRESS:                                               
// ------------------------------------------------------------------------


function ageverify_requires_wordpress_version() {
	global $wp_version;
	$plugin = plugin_basename( __FILE__ );
	$plugin_data = get_plugin_data( __FILE__, false );

	if ( version_compare($wp_version, "3.8", "<" ) ) {
		if( is_plugin_active($plugin) ) {
			deactivate_plugins( $plugin );
			wp_die( "'".$plugin_data['Name']."' requires WordPress 3.8 or higher, and has been deactivated! Please upgrade WordPress and try again.<br /><br />Back to <a href='".admin_url()."'>WordPress admin</a>." );
		}
	}
}
add_action( 'admin_init', 'ageverify_requires_wordpress_version' );

// ------------------------------------------------------------------------
// REGISTER HOOKS & CALLBACK FUNCTIONS:
// ------------------------------------------------------------------------

// Set-up Action and Filter Hooks
register_activation_hook(__FILE__, 'ageverify_add_defaults');
register_uninstall_hook(__FILE__, 'ageverify_delete_plugin_options');
add_action('admin_init', 'ageverify_init' );
add_action('admin_menu', 'ageverify_add_options_page');

// Require options 
require_once( plugin_dir_path( __FILE__ ) . 'options.php' );


// Initialize language so it can be translated
function ageverify_language_init() {
  load_plugin_textdomain( 'ageverify', false, 'age-verify/languages' );
}
add_action('init', 'ageverify_language_init');

// Enqueue CSS on settings page
function enqueue_ageverify_options_css($hook) {
    if ( 'toplevel_page_age-verify-options' != $hook ) {
        return;
    }

    wp_register_style( 'ageverify_options_css', plugins_url() . '/ageverify-custom/css/ageverifycustom.2.css', false, '1.0.0' );
    wp_enqueue_style( 'ageverify_options_css' );
    wp_enqueue_script( 'ageverify_gallery', plugin_dir_url( __FILE__ ) . 'js/gallery.js' );
	wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'enqueue_ageverify_options_css' );


// ------------------------------------------------------------------------
// ADD JAVASCRIPT TO HEADER
// ------------------------------------------------------------------------

add_action( 'wp_head', 'ageverify_print_script' );

function ageverify_print_script() {
	$options = get_option( 'ageverify_settings' );

	if( !isset( $options['ageverify_on'] ) || "1" !== $options['ageverify_on'] ) {
		// AgeVerify isn't turned on, so abort immediately
		return;
	}
	
		if( isset( $options['ageverify_template'] ) ) {
		$template = $options['ageverify_template'];
	} else {
		$template = 'av';
	}
	
    if( isset( $options['ageverify_cookielength'] ) ) {
		$cookielength = $options['ageverify_cookielength'];
	} else {
		$cookielength = '1';
	}
	
	if( isset( $options['ageverify_underageredirect'] ) ) {
		$underageredirect = $options['ageverify_underageredirect'];
	} else {
		$underageredirect = 'https://ageverify.com';
	}
	
	
    $script = '<script type="text/javascript" src="https://custom.ageverify.co/avwp.js"></script><script data-wppath="' . plugins_url() . '" type="text/javascript" src="' . plugins_url() . '/ageverify-custom/includes/' . $template . '.js" id="AgeVerifyScript" data-underageredirect="' . $underageredirect . '" data-cookielength="' . $cookielength . '"></script>';
    
	echo $script;


}


?>
