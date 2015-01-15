<?php if( !defined( 'KAZOTO_REBRAND_URL' ) ) die("no direct access");

add_action( 'init', 'kazoto_folio_set_vars', 1 );
add_action( 'switch_blog', 'kazoto_folio_set_vars' );

function kazoto_folio_set_vars() {
    global $wpdb;
    //$wpdb->kaz_rebrand = "fgou1_gs_providers";
}


function kazoto_folio_create_tables() {
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	global $wpdb;
	global $charset_collate;
	grosource_set_wpdb_vars();

	$sql_create_table = "CREATE TABLE {} (
			`ID` bigint(20) unsigned NOT NULL auto_increment,
			PRIMARY KEY  (ID)
		) $charset_collate;
	";
	dbDelta( $sql_create_table );
	$sql_create_table = null;

}

// Create tables on plugin activation
register_activation_hook( __DIR__ . '\kazoto-folio.php', 'kazoto_folio_create_tables' );