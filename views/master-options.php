<?php
/**
 * Main View File for Kazoto Rebrand Plugin
 * Last updated 1-25-2015 by David Lawrence @kazoto
 */
?>
<div class="main">

	<?php require_once( KAZOTO_REBRAND_VIEW_URL . 'header.php' ); ?>

	<div class="panel col-margin-top-20 panel-primary">

		<form method="post" action="<?php echo admin_url( 'admin.php?page=krbd-master-options&noheader=1' ); ?>">
		<div class="panel-body">

			<div class="alerts"></div>

			<div class="master-option-form-field-parent form-group">
				<label class="checkbox"><input type="checkbox" name="remove_footer" value="1" <?php if( $krbd_master_options['remove_footer'] == 1 ){ echo 'checked'; } ?>> Remove Footer From Admin UI</label>
			</div>

			<div class="master-option-form-field-parent form-group">
				<label class="checkbox"><input type="checkbox" name="remove_subheader" value="1" <?php if( $krbd_master_options['remove_subheader'] == 1 ){ echo 'checked'; } ?>> Remove Subheader Text From Admin UI</label>
			</div>

			<div class="master-option-form-field-parent form-group">
				<label class="checkbox"><input type="checkbox" name="remove_header" value="1" <?php if( $krbd_master_options['remove_header'] == 1 ){ echo 'checked'; } ?>> Remove Header Text From Admin UI</label>
			</div>

			<div class="master-option-form-field-parent form-group">
				<label class="checkbox"><input type="checkbox" name="include_master_options_nav_item" value="1" <?php if( $krbd_master_options['include_master_options_nav_item'] == 1 ){ echo 'checked'; } ?>> Include Master Option Tab in Header</label>
			</div>

			<div class="master-option-form-field-parent form-group">
				<label>Header Text</label>
				<input type="text" name="header_text" class="form-control" <?php if( !empty( $krbd_master_options['header_text'] ) ){ echo "value='{$krbd_master_options['header_text']}'"; } ?>>
			</div>

			<div class="master-option-form-field-parent form-group">
				<label>Sub-Header Text</label>
				<input type="text" name="subheader_text" class="form-control" <?php if( !empty( $krbd_master_options['subheader_text'] ) ){ echo "value='{$krbd_master_options['subheader_text']}'"; } ?>>
			</div>

			<div class="master-option-form-field-parent form-group">
				<label>Plugin Name</label>
				<input type="text" name="plugin_name" class="form-control" placeholder="Kazoto Rebrand" <?php if( !empty( $krbd_master_options['plugin_name'] ) ){ echo "value='{$krbd_master_options['plugin_name']}'"; } ?>>
			</div>

			<div class="col-margin-top-20">
				<?php wp_nonce_field( 'krbd_master_options', 'krbd_master_options_nounce' ); ?>
				<button type="submit" class="btn btn-md btn-primary">Save</button>

			</div>

		</div>

	</div>
	<?php /*
	<div class="panel col-margin-top-20 panel-primary">

		<div class="panel-heading">
			Plugin Slugs
		</div>

		<form method="post" action="<?php echo admin_url( 'admin.php?page=krbd-master-options&noheader=1' ); ?>">
		<div class="panel-body">

			<div class="alerts-slugs"></div>

			<div>Coming Soon</div>

			<div class="col-margin-top-20">
				<?php wp_nonce_field( 'krbd_master_options', 'krbd_master_options_nounce' ); ?>
				<button type="submit" class="btn btn-md btn-primary" disabled>Save</button>

			</div>

		</div>

	</div>*/?>

	<?php require_once( KAZOTO_REBRAND_VIEW_URL . 'footer.php' ); ?>
</div>

<script type="text/javascript">
$(function(){
	$('input[name="remove_footer"]').change(function(){
		if( $(this).is(':checked') ){
			var appalert  = '<div class="alert alert-info remove-footer-alert">';
				appalert += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				appalert += 'Removing the footer will hide the master option link. It is recommended to add master option tab to header.';
				appalert += '</div>';
			$(".alerts").append( appalert );
		} else {
			$('.alerts .remove-footer-alert').remove();
		}
	})
})
</script>