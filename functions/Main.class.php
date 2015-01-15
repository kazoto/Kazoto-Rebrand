<?php if( !defined( 'KAZOTO_REBRAND_URL' ) ) die( "Direct access not allowed" );

/**
 * Main Page for this Plugin
 * Last Updated: 1/15/2015
 */
class KazotoRebrandMain extends KazotoRebrandBase {

	function __construct(){
		parent::__construct();

		add_action( 'admin_menu', array( $this, 'register_pages' ) );
	}

	/**
	 * Main function for kazoto rebrand
	 * this displays the main page for the plugin.
	 */
	function main(){

		require_once( KAZOTO_REBRAND_VIEW_URL . 'main.php' );

	}

	/**
	 * Registers the main page under settings.php as submenu page.
	 */
	function register_pages(){
		
		add_options_page( 
			'Kazoto Rebrand', 
			'Kazoto Rebrand', 
			'manage_options', 
			'kazoto-rebrand',
			array( $this, 'main' ) 
		);

	}

	// End KazotoRebrandMain
}

add_action( "init", "KazotoRebrandMainInit" );
function KazotoRebrandMainInit() {
	global $KazotoRebrandMain;
	$KazotoRebrandMain = new KazotoRebrandMain();
}