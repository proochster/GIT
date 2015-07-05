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

<body id="public_dashboard">

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
                    <h2><i class="fa fa-dashboard"></i> Public: Dashboard</h2>
                    <p>This is your user dashboard where you can change basic account settings or update your password.</p>
                </div>
            </div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
            <div class="grid">
                
                <?php if (! empty($message)) { ?>
                <div class="grid-24" id="message">
                    <?php echo $message; ?>
                </div>
                <?php } ?>
                
                <div class="grid-24">
                   <div class="frame">							
                        <h3><i class="fa fa-user"></i> Account Details</h3>
                        <p>Update the account details.</p>
                        <p>Update your phone number, address etc.</p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_public/update_account">Update Account Details</a>
                            </li>	
                        </ul>
                        <hr/>

                        <h3><i class="fa fa-at"></i> Email Address</h3>
                        <p>Update the email address, via email verification.</p>
                        <p></p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_public/update_email">Update Email Address via Email Verification</a>
                            </li>	
                        </ul>
                        <hr/>

                        <h3><i class="fa fa-asterisk"></i> Password</h3>
                        <p>Update the password.</p>
                        <p>All passwords are securely hashed using the <a href="http://www.openwall.com/phpass/" target="_blank">phpass framework</a>.</p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_public/change_password">Update Password</a>
                            </li>	
                        </ul>
                        <hr/>

                        <h3><i class="fa fa-indent"></i> Address Book</h3>
                        <p>Manage the custom address details.</p>
                        <p></p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_public/manage_address_book">Manage Address Book</a>
                            </li>	
                        </ul>
                    </div> 

				
                </div>
            </div>
		</div>
	</div>
</div>