<?php
/**
 * Main View File for Kazoto Rebrand Plugin
 * Last updated 1-26-2015 by David Lawrence @kazoto
 */
?>
<div class="main">

	<?php require_once( KAZOTO_REBRAND_VIEW_URL . 'header.php' ); ?>

	<div class="panel col-margin-top-20 panel-primary">

		<form method="post" enctype="multipart/form-data" action="<?php echo admin_url('options-general.php?noheader=1&page=' . apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ) ); ?>">
		<div class="panel-body ">

			<div class="form-group">
				<label class="checkbox"><input type="checkbox" name="remove_wp_logo_admin_bar" <?php if( $krbd_options['remove_wp_logo_admin_bar'] ) echo 'checked'; ?>> Remove Wordpress Logo from admin bar.</label>
			</div>
			<hr>
			<div class="form-group">
				<label class="checkbox"><input type="checkbox" name="remove_admin_slogan" <?php if( $krbd_options['remove_admin_slogan'] ) echo 'checked'; ?>> Remove "Thank you for creating with wordpress" in admin</label>
			</div>
			<hr>
			<div class="form-group">
				<label class="checkbox"><input type="checkbox" name="remove_dashboard_news_widget" <?php if( $krbd_options['remove_dashboard_news_widget'] ) echo 'checked'; ?>> Remove Wordpress News Dashboard Widget</label>
			</div>
			<hr>
			<div class="form-group">
				<label>Change "Thank you for creating with wordpress" text in admin</label>
				<input type="text" name="admin_slogan_text" class="form-control" value="<?php echo !empty( $krbd_options['admin_slogan_text'] ) ? $krbd_options['admin_slogan_text'] : null; ?>" placeholder="Thank you for creating with Wordpress">
				<small>You may use {{SITEURL}} which will be replaced with your frontend url, and HTML is allowed.</small>
			</div>
			<hr>
			<div class="form-group">
				<label>Default Avatar</label><br>
				<label class="checkbox"><input type="checkbox" name="reset_default_avatar"> Reset Default Avatar</label>
				<?php echo get_avatar( 'asdfasfasdasdwfawf@asdasfasf.com' ); ?>
				<input type="file" name="default_avatar">
			</div>
			<hr>
			<div class="form-group">
				<label>Login Screen Logo</label><br>
				<label class="checkbox"><input type="checkbox" name="reset_login_logo"> Login Logo</label>
				<?php if( !empty( $krbd_options['login_logo'] ) ){
					echo '<img src="' . $krbd_options['login_logo'] . '" class="img-responsive">';
				}
				?>
				<input type="file" name="login_logo">
			</div>

			<div class="col-margin-top-20">
				<?php wp_nonce_field( 'krbd_main_options', 'krbd_main_options_nounce' ); ?>
				<button type="submit" class="btn btn-md btn-primary">Save</button>

			</div>

		</div>
		</form>

	</div>

	<div class="panel col-margin-top-20 panel-primary">

		<form method="post" action="<?php echo admin_url('options-general.php?noheader=1&page=' . apply_filters( 'kazoto_rebrand_plugin_slugs_kazoto-rebrand', 'kazoto-rebrand' ) ); ?>">
		<div class="panel-body ">

			<h3>Email Branding</h3>

			<div class="form-group">

				<label>Default FROM in all outbound emails</label>
				<input type="text" name="email_from" class="form-control" value="<?php echo !empty( $krbd_email_options['email_from'] ) ? $krbd_email_options['email_from'] : null; ?>">
				<small>This should just be an email address</small>

			</div>
			<hr>
			<div class="form-group">

				<label>Default FROM NAME in all outbound emails</label>
				<input type="text" name="email_from_name" class="form-control" value="<?php echo !empty( $krbd_email_options['email_from_name'] ) ? $krbd_email_options['email_from_name'] : null; ?>">
				<small>This is the name used in from.</small>

			</div>
			<hr>
			<div class="form-group">

				<h3>New User Welcome Email</h3>
				<small>You may use:
					<br>
					{{USERNAME}} - Username of user.<br>
					{{PASSWORD}} - Plaintext password of user.<br>
					{{BLOGNAME}} - Name of your site<br>
					{{LOGINURL}} - URL to the login page.<br>
					HTML is allowed in message, not subject.
				</small>
				<hr>
				<label>Subject of email <span class="text-danger">****HTML NOT ALLOWED*****</span></label>
				<input type="text" name="welcome_subject" class="form-control" value="<?php echo $krbd_email_options['welcome_subject']; ?>" placeholder="Welcome to {{BLOGNAME}}.">
				<hr>
				<label>Email Message <span class="text-success">****HTML ALLOWED*****</span></label>
				<?php 
				if( empty( $krbd_email_options['welcome_email'] ) ){
					$krbd_email_options['welcome_email'] = "
								Welcome to {{BLOGNAME}}!<br><br>
								We are pleased to have you on our site. 
								Just a reminder here is your username and password:<br><br>

								Username: {{USERNAME}}<br>
								Password: {{PASSWORD}}<br><br>

								You may login here:<br>
								{{LOGINURL}}<br><br>

								Thanks for being a valued part of this community.<br><br>

								{{BLOGNAME}}
							";
				}
				wp_editor( $krbd_email_options['welcome_email'], 'welcome_email' ); 
				?>


			</div>

			<div class="col-margin-top-20">
				<?php wp_nonce_field( 'krbd_main_options', 'krbd_main_options_nounce' ); ?>
				<button type="submit" class="btn btn-md btn-primary">Save</button>

			</div>

		</div>
		</form>
	</div>



	<?php require_once( KAZOTO_REBRAND_VIEW_URL . 'footer.php' ); ?>
</div>