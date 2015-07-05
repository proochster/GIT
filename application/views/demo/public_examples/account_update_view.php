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

<body id="update_account">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/admin_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
            <div class="grid">
                <div class="grid-24">
                    <h2><i class="fa fa-user"></i> Public: Update Account Details</h2>
                    <p></p>
                    <p>Update email address and password that are required by users to securely log into their account.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>	
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
            <div class="grid">
                <div class="grid-24">
                    <h2><i class="fa fa-edit"></i> Update Account Details</h2>
				    <ul class="links">
                        <li>
                            <a href="<?php echo $base_url;?>auth_public/change_password">Change Password</a>
                        </li>
                    </ul>
                </div>
                
                <?php if (! empty($message)) { ?>
				<div class="grid-24" id="message">
					<?php echo $message; ?>
				</div>
                <?php } ?>
                
                <?php echo form_open(current_url());?>  
                <div class="grid-24">
                    <div class="frame">
                        
                        <h3>Personal Details</h3>
						<ul>
							<li class="info_req">
								<label for="first_name">First Name:</label>
								<input type="text" id="first_name" name="update_first_name" value="<?php echo set_value('update_first_name',$user['upro_first_name']);?>"/>
							</li>
							<li class="info_req">
								<label for="last_name">Last Name:</label>
								<input type="text" id="last_name" name="update_last_name" value="<?php echo set_value('update_last_name',$user['upro_last_name']);?>"/>
							</li>
						</ul>
                        
                        <h3>Contact Details</h3>
						<ul>
							<li class="info_req">
								<label for="phone_number">Phone Number:</label>
								<input type="text" id="phone_number" name="update_phone_number" value="<?php echo set_value('update_phone_number',$user['upro_phone']);?>"/>
							</li>
							<li>
								<?php $newsletter = ($user['upro_newsletter'] == 1) ;?>
								<label for="newsletter">Subscribe to Newsletter:</label>
								<input type="checkbox" id="newsletter" name="update_newsletter" value="1" <?php echo set_checkbox('update_newsletter',1,$newsletter); ?>/>
							</li>
						</ul>
                        
                        <h3>Login Details</h3>
						<ul>
							<li class="info_req">
								<label>Email Address:</label>
								<input type="text" id="email" name="update_email" value="<?php echo set_value('update_email',$user[$this->flexi_auth->db_column('user_acc', 'email')]);?>" class="tooltip_trigger"
									title="Set an email address that can be used to login with."
								/>
								<p class="note">
									Note: This method simply updates the email address, if you want to verify your new email address, you can send a verification email.<br/> 
									<a href="<?php echo $base_url;?>auth_public/update_email">Click here to verify email via email verification</a>.
								</p>
							</li>
							<li>
								<hr/>
								<label for="username">Username:</label>
								<input type="text" id="username" name="update_username" value="<?php echo set_value('update_username',$user[$this->flexi_auth->db_column('user_acc', 'username')]);?>" class="tooltip_trigger"
									title="Set a username that can be used to login with."
								/>
							</li>
							<li>
								<label>Password:</label>
								<a href="<?php echo $base_url;?>auth_public/change_password">Click here to change your password</a>
							</li>
						</ul>
								<input type="submit" name="update_account" id="submit" value="Submit" class="link_button large"/>                       
                    </div>                    
                </div>
                <?php echo form_close();?>
            </div>
		</div>
	</div>
</div>