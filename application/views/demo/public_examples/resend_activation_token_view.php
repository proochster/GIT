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

<body id="resend_activation_token">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?>
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
            <div class="grid">
                <div class="grid-24">
                    <h2><i class="fa fa-send"></i> Resend Activation Token</h2>
                    <p>This site requires that users that register for a new account must activate their account via clicking a link that is emailed to them immediately upon registration.</p>
                    <p>This page allows users to request for the activation email to be resent to them incase they have not received the initial activation email.</p>
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
								<input type="text" id="identity" name="activation_token_identity" value="" class="tooltip_trigger"
									title="Please enter either your email address or username defined during registration."
								/>
							</li>
							<li>
								<label for="submit">Send Email:</label>
								<input type="submit" name="send_activation_token" id="submit" value="Submit" class="link_button large"/>
							</li>
						</ul>
					</div>	
				    <?php echo form_close();?>
                </div>
            </div>
		</div>
	</div>	
</div>