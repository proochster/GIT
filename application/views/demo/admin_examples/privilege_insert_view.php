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

<body id="insert_privilege">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header_nav'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/admin_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Admin: Insert New Privilege</h2>
				<p>Unlimited custom user privileges can be defined, the privileges can then be assigned to users on an individual basis.</p>
                <p>Once privileges have been defined, access to specific pages or even specific sections of pages can be controlled.</p>
                <p>The default setup uses user groups and privileges to restrict the standard user from accessing the admin area, and the site admin user from inserting, updating and deleting specific data within the admin area.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Insert New Privilege</h2>
				<a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage Privileges</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Privilege Details</legend>
						<ul>
							<li class="info_req">
								<label for="privilege">Privilege Name:</label>
								<input type="text" id="privilege" name="insert_privilege_name" value="<?php echo set_value('insert_privilege_name');?>" class="tooltip_trigger"
									title="The name of the privilege."/>
							</li>
							<li>
								<label for="description">Privilege Description:</label>
								<textarea id="description" name="insert_privilege_description" class="width_400 tooltip_trigger"
									title="A short description of the purpose of the privilege."><?php echo set_value('insert_privilege_description');?></textarea>
							</li>
						</ul>
					</fieldset>

					<fieldset>
						<legend>Insert New Privilege</legend>
						<ul>
							<li>
								<label for="submit">Insert Privilege:</label>
								<input type="submit" name="insert_privilege" id="submit" value="Submit" class="link_button large"/>
							</li>
						</ul>
					</fieldset>
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