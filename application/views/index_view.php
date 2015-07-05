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

<body id="home">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?> 

	<!-- Intro Content -->
<!--	<div class="content_wrap nav_bg main_banner">
		<div class="content clearfix">
			<img src="<?php echo $includes_dir;?>images/flexi_auth_traffic_sign.png" class="main_banner_img"/>		
			<div id="banner_wrap" class="w66 float_r align_ctr">
				<h1>flexi auth, the customisable toolkit for building user login systems.</h1>
				<a href="<?php echo $base_url; ?>user_guide">
					<img src="<?php echo $includes_dir; ?>images/user_guide_icon.png"/>
					<p>User Guide</p>
				</a>
				<a href="<?php echo $base_url; ?>auth_lite/demo">
					<img src="<?php echo $includes_dir; ?>images/demo_icon.png"/>
					<p>Try the Demo</p>
				</a>
				<a href="https://github.com/haseydesign/flexi-auth">
					<img src="<?php echo $includes_dir; ?>images/download_icon.png"/>
					<p>Download</p>
				</a>
			</div>		
		</div>
</div>  -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix"> 
            <div class="grid">
                <div class="grid-24">
                    <h1>Welcome to FPS Gateway</h1>
                    <p>This is a development version - v0.0.0.21.2015</p>
                    <hr/>
                </div>
            </div>
		</div>
	</div>

	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
            <div class="grid">                
                <h2 class="grid-24"><i class="fa fa-info-circle"></i> News</h2> 
                <div class="grid-24">
                    <div class="frame">			
                        <p>Version - v0.0.0.0.21.2015</p>
                        <h5>Changelog</h5>
                        <p><i class="fa fa-check"></i> Fully integrated role based system</p>
                        <p><i class="fa fa-check"></i> Group based navigation system</p>
                        <p><i class="fa fa-check"></i> Removed obsolette library functions and methods</p>
                        <p><i class="fa fa-check"></i> Integrated Expenses and Mileage forms, and access to those based on user role</p>
                    </div>
                </div>
                <div class="grid-24">
                    <a href="<?php echo $base_url;?>auth"><?php echo ($this->flexi_auth->is_logged_in()) ? 'Login via Password <i class="fa fa-angle-double-right"></i>' : 'Continue to Login <i class="fa fa-angle-double-right"></i>';?></a>                   
                </div>
            </div>			
		</div>
	</div>
</div>