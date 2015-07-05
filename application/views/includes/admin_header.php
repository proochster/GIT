<nav>
<div class="dropdown-menu">Menu <i class="fa fa-chevron-down"></i> </div>
<ul>    
	<li><a href="<?php echo $base_url;?>auth_public/">Public Dashboard</a>
		<ul>
            <li>
                <a href="<?php echo $base_url;?>auth_public/update_account">Update Account Details</a>
            </li>
            <li>
                <a href="<?php echo $base_url;?>auth_public/update_email">Update Email Address</a>
            </li>
            <li>
                <a href="<?php echo $base_url;?>auth_public/change_password">Update Password</a>
            </li>
            <li>
                <a href="<?php echo $base_url;?>auth_public/manage_address_book">Manage Address Book</a>
            </li>
		</ul>
	</li> 
    <li>
        <a href="<?php echo $base_url;?>auth_admin/">Admin Dashboard</a>
        <ul>
            <li>
                <a href="<?php echo $base_url;?>auth_admin/manage_user_accounts">Manage User Accounts</a>			
            </li>
            <li>
                <a href="<?php echo $base_url;?>auth_admin/manage_user_groups">Manage User Groups</a>			
            </li>
            <li>
                <a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage User Privileges</a>			
            </li>
            <li>
                <a href="<?php echo $base_url;?>auth_admin/list_user_status/active">List Active Users</a>
            </li>	
            <li>
                <a href="<?php echo $base_url;?>auth_admin/list_user_status/inactive">List Inactive Users</a>
            </li>	
            <li>
                <a href="<?php echo $base_url;?>auth_admin/delete_unactivated_users">List Unactivated Users</a>
            </li>	
            <li>
                <a href="<?php echo $base_url;?>auth_admin/failed_login_users">List Failed Logins</a>			
            </li>	
        </ul>		
    </li>
    <li>
		<a href="<?php echo $base_url;?>forms/index">Forms</a>
	</li>
</ul>
</nav>