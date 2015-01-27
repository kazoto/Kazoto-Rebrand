<?php if( !defined( 'KAZOTO_PLUGIN_FRAMEWORK' ) ) die( "Direct Access Forbidden" );

/**
 * Locational information functionality
 * By David Lawrence
 * Version 1.0
 * Last updated 1-25-2015
 */

if( !function_exists( 'is_admin_page' ) ){

	/**
	 * Check if the current page is the page tested against
	 * Last updated 1-25-2015 by David Lawrence
	 */
	function is_admin_page( $pages = '' ){

		if( !is_array( $pages ) ) $pages = array( $pages );

		foreach( $pages as $page ){
			if( $pagenow == $page || ( !empty( $_GET['page'] ) && $_GET['page'] == $page ) || $_SERVER['PHP_SELF'] == $page ){
				return true;
			} 
		}

		return false;
	}

}

if( !function_exists( 'kazoto_force_redirect' ) ){

	/**
	 * Places a redirect JS in the page to force redirect.
	 * Last Updated 1-25-2015 by David Lawrence
	 */
	function kazoto_force_redirect( $location, $status = '', $delay = 0, $nojs = false ){

		if( !headers_sent() ){
			wp_redirect( $location, $status );
		} else {
			if( !$nojs ){
				echo '
					<script type="text/javascript">
					setTimeout(function(){
						window.location.href = "' . $location . '";
					}, ' . $delay . ')
					</script>
					';
			} else {
				if( !is_admin() ){
					add_action( 'wp_head', function(){ echo '<meta http-equiv="refresh" content="0; url=' . $location . '" />'; } );
				} else {
					add_action( 'admin_head', function(){ echo '<meta http-equiv="refresh" content="0; url=' . $location . '" />'; } );
				}
			}
			
		}
	}
	

}

if( !function_exists( 'do_active_admin_page' ) ){

	/**
	 * Function to call a function call back on active admin page.
	 * Last updated 1-25-2015 by David Lawrence
	 */

	function do_active_admin_page( $page, $callback, $arguments = array() ){
		if( is_admin_page( $page ) )
			call_user_func_array( $callback, $arguments );
	}
}