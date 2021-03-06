<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>FPS Gateway</title>
	<?php $this->load->view('head'); ?> 
</head>

<body id="change_password">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/admin_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Public: Update Password</h2>
				<p>Your password is the front line of defence when protecting an account from unauthorised access.</p>
				<p>Make sure that you use at least 8 - 10 characters long password and that you use good mixture of upper and lower case letters, numbers and few special characters.</a>.</p>
				<p></p>
			</div>
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Update Password</h2>
				<a href="<?php echo $base_url;?>auth_public/update_account">Update Account Details</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<div class="w100 frame">
						<ul>
							<li>
								<small>
									<strong>Following validation settings have been defined:</strong><br/>
									Password length must be more than <?php echo $this->flexi_auth->min_password_length(); ?> characters in length.<br/>
									Only alpha-numeric, dashes, underscores, periods and comma characters are allowed.
								</small>
							</li>
							<li class="info_req">
								<label for="current_password">Current Password:</label>
								<input type="password" id="current_password" name="current_password" value="<?php echo set_value('current_password');?>"/>
							</li>
							<li class="info_req">
								<label for="new_password">New Password:</label>
								<input type="password" id="new_password" name="new_password" value="<?php echo set_value('new_password');?>"/>
							</li>
							<li class="info_req">
								<label for="confirm_new_password">Confirm New Password:</label>
								<input type="password" id="confirm_new_password" name="confirm_new_password" value="<?php echo set_value('confirm_new_password');?>"/>
							</li>
							<li>
								<label for="submit">Update Password:</label>
								<input type="submit" name="change_password" id="submit" value="Submit" class="link_button large"/>
							</li>
						</ul>
					</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('footer'); ?> 
</div>

<!-- Scripts -->  
<!-- <?php $this->load->view('includes/scripts'); ?>  -->

</body>
</html>