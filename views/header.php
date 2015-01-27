<?php
$krbdmo = get_option( 'kazoto_rebrand_master_options' );
?>
<?php if( !isset( $krbdmo['remove_header'] ) || $krbdmo['remove_header'] != 1 ): ?>
<h1><?php if( !empty( $krbdmo['header_text'] ) ): echo $krbdmo['header_text']; else: ?>Welcome to <?php echo apply_filters( 'kazoto_rebrand_plugin_title', 'Kazoto Rebrand' ); ?><?php endif; ?></h1>
<?php endif; ?>

<?php if( !isset( $krbdmo['remove_subheader'] ) || $krbdmo['remove_subheader'] != 1 ): ?>
<h3><?php if( !empty( $krbdmo['subheader_text'] ) ): echo $krbdmo['subheader_text']; else: ?>What would you like to rebrand today?<?php endif; ?></h3>
<?php endif; ?>

<hr>
<?php if( !empty( $krbdmo['include_master_options_nav_item'] ) ): ?>
<ul class="nav nav-tabs nav-justified">
	<?php 
	$daap = function(){ echo 'class="active"'; };
	$doc_pages = array(
				apply_filters( 'kazoto_rebrand_plugin_slugs_krbd-documentation-main', 'krbd-documentation-main' )
			);
	?>
	<li role="presentation" <?php do_active_admin_page( apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ), $daap ); ?>><a href="<?php echo admin_url('options-general.php?page=' . apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ) ); ?>">Main</a></li>
	<?php /*<li role="presentation" <?php do_active_admin_page( apply_filters( 'kazoto_rebrand_plugin_krbd-login-screen', 'krbd-login-screen' ), $daap ); ?>><a href="<?php echo admin_url('admin.php?page=' . apply_filters( 'kazoto_rebrand_plugin_krbd-login-screen', 'krbd-login-screen' ) ); ?>">Login Screen Options</a></li>*/ ?>
	<?php /*<li role="presentation" <?php do_active_admin_page( $doc_pages, $daap ); ?>><a href="<?php echo admin_url('admin.php?page=' . apply_filters( 'kazoto_rebrand_plugin_slugs_krbd-documentation-main', 'krbd-documentation-main' ) ); ?>">Documentation</a></li>*/?>
	<li role="presentation" <?php do_active_admin_page( 'krbd-master-options', $daap ); ?>><a href="<?php echo admin_url('admin.php?page=krbd-master-options'); ?>">Master Options</a></li>
</ul>
<?php endif; ?>
