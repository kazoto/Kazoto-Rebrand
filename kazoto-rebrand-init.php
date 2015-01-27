<?php if( !defined( 'KAZOTO_REBRAND_URL' ) ) die("no direct access");

/**
 * Kazoto Folio Init Class
 * Inits all of the required assets to run the plugin.
 */
class KazotoRebrandInit extends KazotoRebrandBase {

	function __construct(){

		parent::__construct();

		if( defined( 'KAZOTO_REBRAND_IN_ADMIN' ) )
			add_action( 'admin_head', array( $this, 'add_bootstrap' ) );
	}

	/*
	 *	 Add bootstrap to our admin head.
	 */
	function add_bootstrap(){
		?>
		<script type='text/javascript' src='<?php echo plugins_url('resources/js/jquery-1.10.2.min.js', __FILE__ ); ?>'></script> 
		<link rel="stylesheet" href="<?php echo plugins_url('resources/css/bootstrap-switch.min.css', __FILE__ ); ?>">
		<link rel="stylesheet" href="<?php echo plugins_url('resources/css/bootstrap.min.css', __FILE__ ); ?>">
		<link rel="stylesheet" href="<?php echo plugins_url('resources/css/bootstrap-theme.css', __FILE__ ); ?>">
		<link rel="stylesheet" href="<?php echo plugins_url('resources/css/styles.css', __FILE__ ); ?>">
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
		<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/e9421181788/integration/bootstrap/3/dataTables.bootstrap.css"/>
		<link rel="stylesheet" href="<?php echo plugins_url('resources/css/custom.css', __FILE__ ); ?>">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="<?php echo plugins_url('resources/js/bootstrap-switch.min.js', __FILE__ ); ?>"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-daterangepicker/daterangepicker.min.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-datepicker/js/bootstrap-datepicker.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-daterangepicker/moment.min.js', __FILE__); ?>'></script> 

		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-select2/select2.css', __FILE__ ); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-tokenfield/bootstrap-tokenfield.css', __FILE__ ); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/js/jqueryui.css', __FILE__ ); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-select2/select2.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-multiselect/css/multi-select.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/jqueryui-timepicker/jquery.ui.timepicker.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-daterangepicker/daterangepicker-bs3.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-fseditor/fseditor.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-tokenfield/bootstrap-tokenfield.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/js/jqueryui.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/codeprettifier/prettify.css', __FILE__); ?>' /> 
		<link rel='stylesheet' type='text/css' href='<?php echo plugins_url('resources/plugins/form-toggle/toggles.css', __FILE__); ?>' /> 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php echo plugins_url('resources/css/ie8.css', __FILE__ ); ?>">
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
			<script type="text/javascript" src="<?php echo plugins_url('resources/plugins/charts-flot/excanvas.min.js', __FILE__ ); ?>"></script>
		<![endif]-->
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/charts-flot/jquery.flot.min.js', __FILE__); ?>'></script> 

		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/charts-flot/jquery.flot.navigate.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/charts-flot/jquery.flot.resize.min.js', __FILE__); ?>'></script> 

		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/charts-flot/jquery.flot.selection.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/charts-flot/jquery.flot.stack.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/charts-flot/jquery.flot.time.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-select2/select2.min.js', __FILE__); ?>'></script> 

		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-toggle/toggle.min.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-ckeditor/ckeditor.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/form-autosize/jquery.autosize-min.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/js/placeholdr.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/datatables/jquery.dataTables.min.js', __FILE__); ?>'></script> 
		<script type='text/javascript' src='<?php echo plugins_url('resources/plugins/datatables/dataTables.bootstrap.js', __FILE__); ?>'></script> 
		<script src="<?php echo plugins_url('resources/js/custom.js', __FILE__ ); ?>"></script>
		<?php
	}
}

add_action( "init", "KazotoRebrandInitInit" );
function KazotoRebrandInitInit() {
	global $KazotoRebrandInit;
	$KazotoRebrandInit = new KazotoRebrandInit();
}

/**
 * Structural Base Functions
 *
 * These are functions that wont work in a OOP setting.
 */

/**
 * Process Master option filters.
 * These are on the base level as adding to action init will not allow the filters to be added in time.
 */
$krbd_master_options = get_option( 'kazoto_rebrand_master_options' );
add_filter( 'kazoto_rebrand_plugin_title', function(){ 
			global $krbd_master_options; 
			return !empty( $krbd_master_options['plugin_name'] ) ? $krbd_master_options['plugin_name'] : 'Kazoto Rebrand'; 
	});

$krbd_options = get_option( 'kazoto_rebrand_options' );

if( $krbd_options['remove_wp_logo_admin_bar'] == 1 ){
	add_action( 'wp_before_admin_bar_render', function(){
		global $wp_admin_bar;

		/* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
	} );
}

if( !empty( $krbd_options['admin_slogan_text'] ) ){
	add_filter( 'admin_footer_text', function(){
		global $krbd_options;
		return $krbd_options['admin_slogan_text'];
	} );
}

if( $krbd_options['remove_admin_slogan'] ){
	add_filter( 'admin_footer_text', function(){
		return ' ';
	} );
}

if( $krbd_options['remove_dashboard_news_widget'] ){
	add_action( 'admin_init', function() {
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	} );
}

if( !empty( $krbd_options['login_logo'] ) ){
	add_action( 'login_enqueue_scripts', function(){
		global $krbd_options;
		?>
		<style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php echo $krbd_options['login_logo']; ?>');
            padding-bottom: 30px;
            width: 328px !important;
            -webkit-background-size: 100%;
            background-size: 100%;
        }
	    </style>
	    <?php
	} );
}

if( !empty( $krbd_options['default_avatar'] ) ){
	// Apply filter
	add_filter( 'get_avatar' , 'krbd_change_default_avatar' , 1 , 4 );

	function krbd_change_default_avatar( $avatar, $id_or_email, $size = 32, $default = '', $alt = '' ) {
	    $user = false;
	    global $krbd_options;

	    if( $avatar = "<img alt='' src='http://0.gravatar.com/avatar/8088a20526a8a09ea2c37519da45a791?s=96&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&amp;r=G' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />"){
	    	return "<img alt='{$alt}' src='{$krbd_options['default_avatar']}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
	    }
	}
}

/**
 * Kazoto Email Options
 * 
 */
$krbd_email_options = get_option( 'kazoto_rebrand_email_options' );

if( !empty( $krbd_email_options['email_from'] ) ){
	add_filter( 'wp_mail_from', function(){
		global $krbd_email_options;
		return $krbd_email_options['email_from'];
	});
}

if( !empty( $krbd_email_options['email_from_name'] ) ){
	add_filter( 'wp_mail_from_name', function(){
		global $krbd_email_options;
		return $krbd_email_options['email_from_name'];
	});
}

if( !empty( $krbd_email_options['welcome_email'] ) || !empty( $krbd_email_options['welcome_subject'] ) ){

	add_filter('wp_mail', function( $args ){

		global $krbd_email_options;
		
		add_filter( 'wp_mail_content_type', function( $content_type){ return 'text/html'; } );
		
		// get blog name.
		$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

		// Set subject variable.
		$subject = '[' . $blogname . '] Your username and password';

		// Check if subject equals the subject of new registration.
		if(isset($args['subject']) && $args['subject'] == $subject){

			// Grab old message and explode on \r\n.
			$old_message = explode("\r\n", $args['message']);

			// remove Username: from $old_message[0] leaving us with just the username.
			if(!empty($old_message[0])){
				$username = str_replace('Username: ', '', trim($old_message[0]));
			}

			// remove Password: from $old_message[1] leaving us with just the password.
			if(!empty($old_message[1])){
				$password = str_replace('Password: ', '', trim($old_message[1]));
			}

			// Set message to return.
			if( !empty( $krbd_email_options['welcome_subject'] ) ){
				$args['subject'] = str_replace(
									'{{USERNAME}}',
									$username,
									str_replace(
										'{{PASSWORD}}',
										$password,
										str_replace(
											'{{BLOGNAME}}',
											$blogname,
											str_replace(
												'{{LOGINURL}}',
												wp_login_url(),
												$krbd_email_options['welcome_subject']
											)
										)
									)
								);
			}
			
			if( !empty( $krbd_email_options['welcome_email'] ) ){
				$args['message'] = str_replace(
									'{{USERNAME}}',
									$username,
									str_replace(
										'{{PASSWORD}}',
										$password,
										str_replace(
											'{{BLOGNAME}}',
											$blogname,
											str_replace(
												'{{LOGINURL}}',
												wp_login_url(),
												str_replace(
													"\n",
													"<br>",
													$krbd_email_options['welcome_email']
												)
											)
										)
									)
								);
			}

		}


		// Set subject variable.
		$subject = '[' . $blogname . '] Password Reset';

		// Check if subject equals the subject of new registration.
		if(isset($args['subject']) && $args['subject'] == $subject){
			add_filter( 'wp_mail_content_type', create_function('', 'return "text/plain";') );

		}

		return $args;
	});
}