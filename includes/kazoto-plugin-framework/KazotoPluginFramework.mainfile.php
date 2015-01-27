<?php
/**
 * Kazoto Plugin Framework
 * Version 1.0
 * Contains useful functionality for plugins
 * By David Lawrence
 */

if( !defined( 'KAZOTO_PLUGIN_FRAMEWORK' ) && basename( $_SERVER['PHP_SELF'] ) == basename( __FILE__ ) ){
	die( 'Direct Access is forbidden' );
} else {
	if( !defined( 'KAZOTO_PLUGIN_FRAMEWORK' ) )
		define( 'KAZOTO_PLUGIN_FRAMEWORK', true );
}

// Require LocationalFunctions Function and Class
include( 'LocationalFunctions.funcs.php' );

// Require DebugFunctions Function and Class
include( 'DebugFunctions.funcs.php' );