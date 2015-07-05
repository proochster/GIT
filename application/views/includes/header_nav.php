<script>
	// Hide content onload, prevents JS flicker
	document.body.className += ' js-enabled';
</script>

<div id="header_wrap">
	<div id="header">
		<h1 id="logo">
			<a href="<?php echo $base_url; ?>" title="flexi auth">
				<img src="http://backup-pc.dyndns-server.com/stage/qba/img/logo-side.png" alt="fps"/>
			</a>
		</h1>
		 
        <div class="hamburger"><i class="fa fa-bars red"><span>Menu</span></i></div>
		<ul id="nav">            
			<li>
				<a href="<?php echo $base_url;?>"><i class="fa fa-home"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/features"><i class="fa fa-phone"></i> Contact</a>
			</li>
		<!--	<li>
				<a href="<?php echo $base_url;?>auth_lite/demo">Admin</a>
			</li>
			-->
		<!--	<li>
				<a href="<?php echo $base_url;?>auth_lite/user_guide">User Guide</a>
		</li> -->
			<?php if (! $this->flexi_auth->is_logged_in_via_password()) { ?>
			<li>
					<a href="<?php echo $base_url;?>auth"><?php echo ($this->flexi_auth->is_logged_in()) ? 'Login via Password' : '<i class="fa fa-sign-in"></i> Login';?></a>
			</li>
			<?php } ?>
			<?php if (! $this->flexi_auth->is_logged_in()) { ?>
				<li>
					<a href="<?php echo $base_url;?>auth/register_account"><i class="fa fa-user-plus"></i> Register</a>
				</li>
			<?php } else { ?>
				<li>
					<a href="<?php echo $base_url;?>auth/logout"><i class="fa fa-sign-out"></i> Logout</a>
				</li>
			<?php } ?>
		<!--	<li>
				<a href="https://github.com/haseydesign/flexi-auth">Download</a>
		</li>  -->
		</ul> 


	</div>
</div>