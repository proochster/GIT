<div class="logocontainer">
	
<div class="w100 frame">
                    <h3>Login Check</h3>
                    <p>Check the status of whether a user is currently logged in.</p>
                    <p>This includes whether they logged into this session via entering their password, or via using a 'Remember me' cookie.</p>
                    <p>
                        <ul class="bullet">                             
                        <?php 
                            // Check if user is logged in either via password or 'Remember me' function
                            if ($this->flexi_auth->is_logged_in()) 
                            {
                                echo '<li><span class="highlight_green">User is logged in.</span></li>';
                            }
                            else 
                            {
                                echo '<li><span class="highlight_orange">User is not logged in.</span></li>';
                            }
                        ?>
                        </ul>
                    </p>
                    <hr/>

                    <h3>Login Method</h3>
                    <p>Check how a logged in user logged into their current session.</p>
                    <p>Users that have logged in via a password have positively confirmed their identity for this session, whilst a user logged in via a "Remember me" cookie should have limited access rights, until they confirm their identity via a password.</p>
                    <p>An example of limited access would be to allow users access to their account, but prevent data from being updated until they login via a password.</p>
                    <p>
                        <ul class="bullet">                             
                        <?php 
                            // Check if user logged in directly via password, or via 'Remember me' function
                            if ($this->flexi_auth->is_logged_in()) 
                            {
                                if ($this->flexi_auth->is_logged_in_via_password()) 
                                {
                                    echo '<li><span class="highlight_green">User logged in via password.</span></li>';
                                }
                                else
                                {
                                    echo '<li><span class="highlight_green">User logged in via "Remember me".</span></li>';
                                }
                            }
                            else
                            {
                                echo '<li><span class="highlight_orange">User is not logged in.</span></li>';
                            }
                        ?>
                        </ul>
                    </p>
                    <hr/>

                    <h3>Admin Check</h3>
                    <p>Check whether a logged in user is considered an 'Admin'.</p>
                    <p>This function should be considered as an indicator that the user is trusted to use 'backend' areas of the site, however, that does not mean they would necessarily have read/write permissions to all areas.</p>
                    <p>Specific permissions can be further allocated to users via the 'User Group' and 'User Account Privileges' that are displayed below.</p>
                    <p>
                        <ul class="bullet">                             
                        <?php 
                            // Check if user is in classed as an admin
                            if ($this->flexi_auth->is_logged_in()) 
                            {
                                if ($this->flexi_auth->is_admin()) 
                                {
                                    echo '<li><span class="highlight_green">User is an Admin.</span></li>';
                                }
                                else 
                                {
                                    echo '<li><span class="highlight_orange">User is not an Admin.</span></li>';
                                }
                            }
                            else
                            {
                                echo '<li><span class="highlight_orange">User is not logged in.</span></li>';
                            }
                        ?>
                        </ul>
                    </p>
                    <hr/>

                    <h3>User Group</h3>
                    <p>Check which group a logged in user is assigned to.</p>
                    <p>By grouping users, specific access rights can be granted/prohibited based on their custom group.</p>
                    <p>
                        <ul class="bullet">                             
                        <?php
                            if ($this->flexi_auth->is_logged_in()) 
                            {
                                // Display user group.
                                echo '<li><span class="highlight_green">User is in the "'.$this->flexi_auth->get_user_group().'" user group.</span></li>';
                            }
                            else
                            {
                                echo '<li><span class="highlight_orange">User is not logged in.</span></li>';
                            }
                        ?>
                        </ul>
                    </p>
                    <hr/>

                    <h3>User Account Privileges</h3>
                    <p>Check the specific privileges a logged in user currently has.</p>
                    <p>Specific privileges can be granted for any specific custom task, and can then be assigned on an individual user basis.</p>
                    <p>
                        <ul class="bullet">                             
                        <?php
                            if ($this->flexi_auth->is_logged_in()) 
                            {
                                if ($this->flexi_auth->is_privileged('View Users')) 
                                {
                                    echo '<li><span class="highlight_green">User has the privilege to VIEW other user accounts.</span></li>';
                                }
                                else 
                                {
                                    echo '<li><span class="highlight_orange">User does not have the privilege to VIEW other user accounts.</span></li>';
                                }
                                if ($this->flexi_auth->is_privileged('Update Users')) 
                                {
                                    echo '<li><span class="highlight_green">User has the privilege to UPDATE other user accounts.</span></li>';
                                }
                                else 
                                {
                                    echo '<li><span class="highlight_orange">User does not have the privilege to UPDATE other user accounts.</span></li>';
                                }
                                if ($this->flexi_auth->is_privileged('Delete Users')) 
                                {
                                    echo '<li><span class="highlight_green">User has the privilege to DELETE other user accounts.</span></li>';
                                }
                                else 
                                {
                                    echo '<li><span class="highlight_orange">User does not have the privilege to DELETE other user accounts.</span></li>';
                                }
                            }
                            else
                            {
                                echo '<li><span class="highlight_orange">User is not logged in.</span></li>';
                            }
                        ?>
                        </ul>                               
                    </p>
                </div>
                
                <div>
                    <h2>Quick specific group test:</h2>
                    <hr />
                    <h3>
                        <?php  
                        
                        $usergroup = $this->flexi_auth->get_user_group();
                        
                        if ($usergroup == "Master Admin"){
                            
                            echo 'User is in Master Admin Group = SUCCESS!';
                        }
                        
                        else {
                            
                            echo 'User is in some other Group:'.$usergroup;
                        }
                        
                        ?>
                        
                    </h3>
                </div>
	
	
</div>

