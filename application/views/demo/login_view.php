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

<body>
<div id="body_wrap">

	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?> 

	<!-- Demo Navigation -->
	<?php // $this->load->view('includes/admin_header'); ?> 
	
	
	<!-- Main Content -->
    
    <div class="content_wrap main_content_bg">
		<div class="content clearfix">					
			<div class="grid">
                <h1 class="grid-24">User Login</h1>
                
                <?php if (! empty($message)) { ?>
                    <div id="message" class="grid-24">
                        <?php echo $message; ?>
                    </div>
                <?php } ?>
                
                <?php echo form_open(current_url(), 'class="parallel"');?>  
                <div class="grid-12">
                    <div class="frame">
                        <h3><i class="fa fa-user"></i> Login</h3>
                        <ul>
							<li>
								<label for="identity">Email or Username:</label>
								<input type="text" id="identity" name="login_identity" class="tooltip_parent"/>
								<span class="tooltip width_400">
									<h6>Have you forgotten your login?</h6>
									<p>Please email support@fpsgateway.com for help with retrieveing your credentials or contact your company's admin for help.</p>
								</span>
							</li>
							<li>
								<label for="password">Password:</label>
								<input type="password" id="password" name="login_password" value="<?php echo set_value('login_password', 'password123');?>"/>
							</li>
						<?php 
							if (isset($captcha)) 
							{ 
								echo "<li>\n";
								echo $captcha;
								echo "</li>\n";
							}
						?>
							<li>
                                <input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/>
                                <label for="remember_me">remember me</label>
							</li>
							<li>
								<input type="submit" name="login_user" id="submit" value="Login" class="link_button large"/>
							</li>
							<li>
								<small>Note: 3 failed login attempts will raise security on the account, activating a 10 second time limit ban per login attempt (20 secs after 9+ attempts), and activation of a captcha that must be completed to login.</small> 
							</li>
							<li>
								<hr/>
								<a href="<?php echo $base_url;?>auth/forgotten_password">Reset Forgotten Password <i class="fa fa-angle-double-right"></i></a>
							</li>
							<li>
								<a href="<?php echo $base_url;?>auth/resend_activation_token">Resend Account Activation Token <i class="fa fa-angle-double-right"></i></a></a>
							</li>
						</ul>
                    </div>
                </div>
                
                <div class="grid-12">
                    <div class="frame">                    
                        <h3><i class="fa fa-user-plus"></i> New Users</h3>
                        <ul>
                            <li>
                                New users can register for an account.
                            </li>
                            <li>
                                <hr/>
                                <a href="<?php echo $base_url;?>auth/register_account" class="link_button large">Register New Account</a>
                            </li>
                        </ul>                        
                    </div>
                </div>         
                <?php echo form_close();?>
			</div>			
		</div>
	</div>
</div>
