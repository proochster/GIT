<script>
	// Hide content onload, prevents JS flicker
	document.body.className += ' js-enabled';
</script>

<div id="header_wrap">
	<div id="header">
		<h1 id="logo">
			<a href="<?php echo $base_url; ?>" title="flexi auth">
				<img src="http://backup-pc.dyndns-server.com/stage/bik/img/logo-side.png" alt="fps"/>
				<span class="img_rep">FPS</span> 
			</a>
		</h1>
		 
		<ul id="nav">
			<li>
				<a href="<?php echo $base_url;?>">Home</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/features">Contact</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/demo">Admin</a>
			</li>
		<!--	<li>
				<a href="<?php echo $base_url;?>auth_lite/user_guide">User Guide</a>
		</li> -->
						<?php if (! $this->flexi_auth->is_logged_in_via_password()) { ?>
			<li>
					<a href="<?php echo $base_url;?>auth"><?php echo ($this->flexi_auth->is_logged_in()) ? 'Login via Password' : 'Login';?></a>
			</li>
			<?php } ?>
			<?php if (! $this->flexi_auth->is_logged_in()) { ?>
				<li>
					<a href="<?php echo $base_url;?>auth/register_account">Register</a>
				</li>
			<?php } else { ?>
				<li>
					<a href="<?php echo $base_url;?>auth/logout">Logout</a>
				</li>
			<?php } ?>
		<!--	<li>
				<a href="https://github.com/haseydesign/flexi-auth">Download</a>
		</li>  -->
		</ul> 


	</div>
</div>