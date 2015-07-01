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
	<?php $this->load->view('includes/header'); ?> 

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
			<div class="w100">
				<h3>Welcome to FPS Gateway</h3>
				<p>This is a development version - v0.0.0.21.2015</p>
				<hr style="margin-top:10px; margin-bottom:10px; border:none; border-top:1px dotted #999;"/>
			</div>
		</div>
	</div>

	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
					
			<div class="w100 frame">
				<h2>News	</h2>
				
				<p>Version - v0.0.0.0.21.2015</p>
				<h5>Changelog</h5>
				<p>Fully integrated role based system</p>
				<p>Group based navigation system</p>
				<p>Removed obsolette library functions and methods</p>
				<p>Integrated Expenses and Mileage forms, and access to those based on user role</p>
				<hr/>

			</div>
			
		</div>
	</div>
</div>

<!-- Footer -->  
<!-- <?php $this->load->view('includes/footer'); ?> --> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>