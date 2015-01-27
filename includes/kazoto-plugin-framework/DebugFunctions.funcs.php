<?php if( !defined( 'KAZOTO_PLUGIN_FRAMEWORK' ) ) die( "Direct Access Forbidden" );

/**
 * Debug functionality
 * By David Lawrence
 * Version 1.0
 * Last updated 1-25-2015
 */

if( !function_exists( 'naked' ) ){

	/**
	 * Function to extend var_dump and a little easier to remember.
	 * @param mixed data data to print debug info for.
	 * @param boolean vardump use var_dump or print_r
	 * @param boolean die exit script after debug print.
	 */
	function naked( $data = array(), $var_dump = true, $die = false ){

		if( $var_dump ){
			var_dump( $data );
		}

		if( !$var_dump ){
			echo "<pre>";
			print_r( $data );
			echo "</pre>";
		}

		if( $die ) die();
	}
}