<div class="col-margin-top-20">

	<?php
	$kazoto_rebrand_plugin_options = get_option( 'kazoto_rebrand_master_options' );

	if( !isset( $kazoto_rebrand_plugin_options['remove_footer'] ) || $kazoto_rebrand_plugin_options['remove_footer'] != 1 ):
	?>
	<?php echo apply_filters( 'kazoto_rebrand_plugin_title', 'Kazoto Rebrand' ); ?> Plugin &copy; <?php echo date('Y', time()); ?> <a href="kazoto.com">kazoto.com</a> - 
	<a href="<?php echo admin_url('admin.php?page=krbd-master-options'); ?>">Plugin Master Options</a>
	
	<h4 class="alert alert-info">
		I work hard to bring you quality plugins and other goodies for free! Help me by supporting my hobby and donate at: 
		<a href="http://kazoto.com/donate">http://kazoto.com/donate/</a>. All donations are welcomed and thank you in advanced.
	</h4>
	<?php
	endif;
	?>
</div>