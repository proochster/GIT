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

<body id="admin_dashboard">

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
                    <h1><i class="fa fa-dashboard"></i> Admin: Dashboard</h1>
                    <p>This is dashboard page for logged in admin users, it can be used to manage the user accounts, groups and privileges.</p>
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
                        <h3><i class="fa fa-user"></i> User Accounts</h3>
                        <p>Manage the account details of all site users.</p>
                        <p>
                            This option updates records from the required 'User Accounts' table, and from the custom 'User Profile' table that is used to store an user's name, phone number etc.<br/>
                            In addition, the privileges of users can be defined.   
                        </p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/manage_user_accounts">Manage User Accounts</a>			
                            </li>	
                        </ul>
                        <hr/>

                        <h3><i class="fa fa-users"></i> User Groups</h3>
                        <p>Manage the user groups that users can be assigned to.</p>
                        <p>User groups are intended to be used to categorise the primary access rights of a user, if required, more specific privileges can then be assigned to a user using the 'User Privileges' below. User groups are completely customised.</p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/manage_user_groups">Manage User Groups</a>			
                            </li>	
                        </ul>
                        <hr/>

                        <h3><i class="fa fa-user-secret"></i> User Privileges</h3>
                        <p>Manage the specific user privileges that can be assigned to users.</p>
                        <p>User privileges are intended to verify whether a user has privileges to perfrom specific actions within the site. The specific action of each privilege is completely customised.</p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage User Privileges</a>			
                            </li>	
                        </ul>
                        <hr/>

                        <h3><i class="fa fa-area-chart"></i> User Activity</h3>
                        <p>View lists of users that are currently active, inactive or who have a high number of failed logins attempts.</p>
                        <p>
                            When a user registers for an account, it is a good practice to have the user confirm their registration via email, as this helps prevent spam accounts being repeatedly setup.<br/>
                            Active (activated) account users can login, inactive accounts cannot. It is also possible in suspend an active account to prevent the user from logging in again.
                        </p>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/list_user_status/active">List all active users</a>
                            </li>	
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/list_user_status/inactive">List all inactive users</a>
                            </li>	
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/delete_unactivated_users">List all unactivated (Never been activated) users over 31 days old</a>
                            </li>	
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/failed_login_users">List users with a high number of failed login attempts</a> - Helps identify possible brute force hack attempts.			
                            </li>	
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>	
</div>