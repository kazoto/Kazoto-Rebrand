<?php if( !defined( 'KAZOTO_REBRAND_URL' ) ) die( "Direct access not allowed" );

/**
 * Main Page for this Plugin
 * Last Updated: 1/15/2015
 */
class KazotoRebrandDocumentation extends KazotoRebrandBase {

	function __construct(){
		parent::__construct();

		add_action( 'admin_menu', array( $this, 'register_pages' ) );
	}

	function main(){

		require_once( KAZOTO_REBRAND_VIEW_URL . 'docs/main.php' );
	}

	/**
	 * Registers the main page under settings.php as submenu page.
	 */
	function register_pages(){
		
		add_submenu_page( 
			'', 
			'Documentation', 
			'', 
			'manage_options', 
			apply_filters( 'kazoto_rebrand_plugin_slugs_krbd-documentation-main', 'krbd-documentation-main' ), 
			array( $this, 'main' ) 
		);
	}

	// End KazotoRebrandDocumentation
}

add_action( "init", "KazotoRebrandDocumentationInit" );
function KazotoRebrandDocumentationInit() {
	global $KazotoRebrandDocumentation;
	$KazotoRebrandDocumentation = new KazotoRebrandDocumentation();
}