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