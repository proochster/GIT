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

<body id="forgot_password">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
            <div class="grid">
                <div class="grid-24">
                    <h2><i class="fa fa-rotate-right"></i> Forgotten Password</h2>
                    <p>You can request your password to be securely reset, if you have any problems with this process please contact the site administrator.</p>
                    <p>
                        Your passwords are twice scrambled and twice encrypted and there is no way for us to retrieve original password for you and remind you of it.<br/>
                    </p>
                    <p>This page is setup to send you an email with a link, when you click the link, you are directed to a page where you can manually change your password.</p>
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
                    <?php echo form_open(current_url());?>  	
                    <div class="frame">
                        <ul>
                            <li class="info_req">
                                <label for="identity">Email or Username:</label>
                                <input type="text" id="identity" name="forgot_password_identity" value="" class="tooltip_trigger"
                                    title="Please enter either your email address or username defined during registration."
                                />
                            </li>
                            <li>
                                <label for="submit">Send Email:</label>
                                <input type="submit" name="send_forgotten_password" id="submit" value="Submit" class="link_button large"/>
                                <small>Note: By default, this site is set so that the password must be reset within 15 minutes of the 'forgotten password' email being sent.</small>
                            </li>
                        </ul>
                    </div>	
                    <?php echo form_close();?>  
                </div>
            </div>
        </div>
    </div>
</div>