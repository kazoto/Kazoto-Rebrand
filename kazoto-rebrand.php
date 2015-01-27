<?php
/**
 * @version 1.0 Alpha
 */
/*
Plugin Name: Kazoto Rebrand
Plugin URI: http://kazoto.com/plugins/rebrand
Description: A plugin that allows you to brand your blog the way you want and remove the wordpress branding.
Author: David Lawrence
Version: 1.0 Alpha
Author URI: http://kazoto.com/david-lawrence
*/

/* Disallow direct access to the plugin file */
if ( basename( $_SERVER['PHP_SELF'] ) == basename( __FILE__ ) ) {
	die( 'Sorry, but you cannot access this page directly.' );
} else {
	define( "KAZOTO_REBRAND_URL", plugin_dir_path( __FILE__ ) . DIRECTORY_SEPARATOR );
}

$admin_pages = array(
				apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ),

				// Master Options
				'krbd-master-options'
			);

if( !empty( $_GET['page'] ) && in_array( $_GET['page'], $admin_pages ) ){
	define( 'KAZOTO_REBRAND_IN_ADMIN', true );
}

/**
 * Define Constants
 */
define( 'DS', DIRECTORY_SEPARATOR );
define( 'KAZOTO_REBRAND_INCLUDES_URL', KAZOTO_REBRAND_URL . 'includes' . DS );
define( 'KAZOTO_REBRAND_CLASSES_URL' , KAZOTO_REBRAND_URL . 'classes'  . DS );
define( 'KAZOTO_REBRAND_VIEW_URL'    , KAZOTO_REBRAND_URL . 'views'    . DS );

/**
 * Require Activation file
 * Creates db and does other activation stuff.
 */
require_once( KAZOTO_REBRAND_URL . 'kazoto-rebrand-activate.php' );

/**
 * Require KazotoRebrandBase
 * Holds all functions that are repeated through the plugin
 */
require_once( KAZOTO_REBRAND_URL . 'kazoto-rebrand-base.php' );

/**
 * Includes
 */
	/**
	 * Kazoto Framework
	 */
	require_once( KAZOTO_REBRAND_INCLUDES_URL . 'kazoto-plugin-framework/KazotoPluginFramework.mainfile.php' );

/**
 * Require KazotoRebrandInit
 * Initializes all things like bootstrap and other stuff.
 */
require_once( KAZOTO_REBRAND_URL . 'kazoto-rebrand-init.php' );


/**
 * Functions
 */
	/**
	 * Require Main
	 * Is the main page for the plugin UI
	 */
	require_once( KAZOTO_REBRAND_URL . 'functions/Main.class.php' );

	/**
	 * Documentation Main
	 * Is the main page for the plugin UI
	 */
	require_once( KAZOTO_REBRAND_URL . 'functions/Documentation.class.php' );