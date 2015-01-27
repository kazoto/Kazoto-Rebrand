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

		$krbd_options = get_option( 'kazoto_rebrand_options' );
		$krbd_email_options = get_option( 'kazoto_rebrand_email_options' );

		if( empty( $krbd_options ) ){
			$krbd_options = array(
					'remove_wp_logo_admin_bar'     => 0,
					'remove_admin_slogan'          => 0,
					'remove_dashboard_news_widget' => 0,
					'admin_slogan_text'            => '',
					'default_avatar'               => '',
					'login_logo'                   => ''
				);
		}
		
		if( empty( $krbd_email_options ) ){
			$krbd_email_options = array(
					'email_from'      => '',
					'email_from_name' => '',
					'email_reply_to'  => '',
					'welcome_subject' => 'Welcome to {{BLOGNAME}}.',
					'welcome_email'   => 'Welcome to {{BLOGNAME}}!<br><br>
										We are pleased to have you on our site. 
										Just a reminder here is your username and password:<br><br>

										Username: {{USERNAME}}<br>
										Password: {{PASSWORD}}<br><br>

										You may login here:<br>
										{{LOGINURL}}<br><br>

										Thanks for being a valued part of this community.<br><br>

										{{BLOGNAME}}'

				);
		}

		$nounce = false;
		if( !empty( $_POST ) && check_admin_referer( 'krbd_main_options', 'krbd_main_options_nounce' ) ){
			$nounce = true;
		}

		if ( ! empty( $_POST ) && $nounce ) {

			update_option( 'kazoto_rebrand_options_backup', $krbd_options );

			if( isset( $_POST['remove_wp_logo_admin_bar'] ) ){
				$krbd_options['remove_wp_logo_admin_bar'] = 1;
			} else {
				$krbd_options['remove_wp_logo_admin_bar'] = 0;
			}

			if( isset( $_POST['remove_admin_slogan'] ) ){
				$krbd_options['remove_admin_slogan'] = 1;
			} else {
				$krbd_options['remove_admin_slogan'] = 0;
			}

			if( isset( $_POST['remove_dashboard_news_widget'] ) ){
				$krbd_options['remove_dashboard_news_widget'] = 1;
			} else {
				$krbd_options['remove_dashboard_news_widget'] = 0;
			}

			if( isset( $_POST['admin_slogan_text'] ) ){
				$krbd_options['admin_slogan_text'] = $_POST['admin_slogan_text'];
			} else {
				$krbd_options['admin_slogan_text'] = '';
			}

			if( is_uploaded_file( $_FILES['default_avatar']['tmp_name'] ) ){
				if( !function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );

				$default_avatar = wp_handle_upload( $_FILES['default_avatar'], array( 'test_form' => false ) );

				if( $default_avatar ){
					$krbd_options['default_avatar'] = $default_avatar['url'];
				}
			}

			if( is_uploaded_file( $_FILES['login_logo']['tmp_name'] ) ){
				if( !function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );

				$login_logo = wp_handle_upload( $_FILES['login_logo'], array( 'test_form' => false ) );

				if( $login_logo ){
					$krbd_options['login_logo'] = $login_logo['url'];
				}
			}

			if( isset( $_POST['reset_default_avatar'] ) ){
				$krbd_options['default_avatar'] = '';
			}

			if( isset( $_POST['reset_login_logo'] ) ){
				$krbd_options['login_logo'] = '';
			}

			do_action( 'update_kazoto_rebrand_main_options', $krbd_options );
			update_option( 'kazoto_rebrand_options', $krbd_options );

			wp_redirect( admin_url('options-general.php?page=' . apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ) ) );
		}

		if ( ! empty( $_POST ) && $nounce ) {

			update_option( 'kazoto_rebrand_email_options_backup', $krbd_email_options );

			if( !empty( $_POST['email_from'] ) ){
				$krbd_email_options['email_from'] = $_POST['email_from'];
			} else {
				$krbd_email_options['email_from'] = '';
			}

			if( !empty( $_POST['email_from_name'] ) ){
				$krbd_email_options['email_from_name'] = $_POST['email_from_name'];
			} else {
				$krbd_email_options['email_from_name'] = '';
			}

			if( !empty( $_POST['email_reply_to'] ) ){
				$krbd_email_options['email_reply_to'] = $_POST['email_reply_to'];
			} else {
				$krbd_email_options['email_reply_to'] = '';
			}

			if( !empty( $_POST['welcome_subject'] ) ){
				$krbd_email_options['welcome_subject'] = $_POST['welcome_subject'];
			} else {
				$krbd_email_options['welcome_subject'] = '';
			}

			if( !empty( $_POST['welcome_email'] ) ){
				$krbd_email_options['welcome_email'] = $_POST['welcome_email'];
			} else {
				$krbd_email_options['welcome_email'] = '';
			}

			do_action( 'update_kazoto_rebrand_email_options', $krbd_email_options );
			update_option( 'kazoto_rebrand_email_options', $krbd_email_options );
			wp_redirect( admin_url('options-general.php?page=' . apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ) ) );
		}

		require_once( KAZOTO_REBRAND_VIEW_URL . 'main.php' );

	}

	/**
	 * Master Options function for kazoto rebrand
	 * this handles the master options for the plugin.
	 */
	function master_options(){
		
		$krbd_master_options = get_option( 'kazoto_rebrand_master_options' );

		if( empty( $krbd_master_options ) ){
			$krbd_master_options = array(
					'include_master_options_nav_item' => 0,
					'remove_header'                   => 0,
					'remove_footer'                   => 0,
					'subheader_text'                  => '',
					'header_text'                     => '',
					'plugin_name'                     => ''
				);
		}


		if ( ! empty( $_POST ) && check_admin_referer( 'krbd_master_options', 'krbd_master_options_nounce' ) ) {

			update_option( 'kazoto_rebrand_master_options_backup', $krbd_master_options );
			
			if( isset( $_POST['remove_footer'] ) ){
				$krbd_master_options['remove_footer'] = 1;
			} else {
				$krbd_master_options['remove_footer'] = 0;
			}

			if( isset( $_POST['remove_header'] ) ){
				$krbd_master_options['remove_header'] = 1;
			} else {
				$krbd_master_options['remove_header'] = 0;
			}

			if( isset( $_POST['remove_subheader'] ) ){
				$krbd_master_options['remove_subheader'] = 1;
			} else {
				$krbd_master_options['remove_subheader'] = 0;
			}

			if( isset( $_POST['include_master_options_nav_item'] ) ){
				$krbd_master_options['include_master_options_nav_item'] = 1;
			} else {
				$krbd_master_options['include_master_options_nav_item'] = 0;
			}

			if( !empty( $_POST['subheader_text'] ) ){
				$krbd_master_options['subheader_text'] = $_POST['subheader_text'];
			} else {
				$krbd_master_options['subheader_text'] = '';
			}

			if( !empty( $_POST['header_text'] ) ){
				$krbd_master_options['header_text'] = $_POST['header_text'];
			} else {
				$krbd_master_options['header_text'] = '';
			}

			if( !empty( $_POST['plugin_name'] ) ){
				$krbd_master_options['plugin_name'] = $_POST['plugin_name'];
			} else {
				$krbd_master_options['plugin_name'] = '';
			}

			do_action( 'update_kazoto_rebrand_master_options', $krbd_master_options );

			update_option( 'kazoto_rebrand_master_options', $krbd_master_options );
			
			wp_redirect( admin_url( 'admin.php?page=krbd-master-options' ) );
		}

		require_once( KAZOTO_REBRAND_VIEW_URL . 'master-options.php' );
	}

	/**
	 * Registers the main page under settings.php as submenu page.
	 */
	function register_pages(){
		
		add_options_page( 
			apply_filters( 'kazoto_rebrand_plugin_title', 'Kazoto Rebrand' ), 
			apply_filters( 'kazoto_rebrand_plugin_title', 'Kazoto Rebrand' ), 
			'manage_options', 
			apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ),
			array( $this, 'main' ) 
		);

		add_submenu_page( 
			'', 
			'Master Options', 
			'', 
			'manage_options', 
			'krbd-master-options', 
			array( $this, 'master_options' ) 
		);
	}

	// End KazotoRebrandMain
}

add_action( "init", "KazotoRebrandMainInit" );
function KazotoRebrandMainInit() {
	global $KazotoRebrandMain;
	$KazotoRebrandMain = new KazotoRebrandMain();
}