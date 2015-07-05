<nav>
<div class="dropdown-menu">Menu <i class="fa fa-chevron-down"></i> </div>
<ul>	
	<li><?php echo anchor( base_url(), 'Home', 'title="Home"'); ?></li>	
    
	<li><a href="#">Policies</a>
        <ul>
            <li><a href="#">HMRC Tax Guidelines</a></li>
            <li><a href="#">Company Tax Guide</a></li>
            <li><a href="#">Company Cars</a></li>
            <li><a href="#">Mileage Claims</a></li>
            <li><a href="#">Fuel Expenses</a></li>
            <li><a href="#">Business Expenses</a></li>
        </ul>
    </li>
    
    <li><a href="#">Input</a>
        <ul>
            <li><?php echo anchor('forms/mileage', 'Business Mileage', 'title="Business Mileage"'); ?></li>
            <li><?php echo anchor('forms/purchases', 'Fuel Claims', 'title="Fuel Claims"'); ?></li>
            <li><?php echo anchor('forms/purchases', 'Business Expenses', 'title="Business Expenses"'); ?></li>
        </ul>
    </li>
    
	<li><a href="#">Calculations</a>
		<ul>
			<li><a href="#">Instructions</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'Demo', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'Tutorials', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
			<li><a href="#">Benefit In Kind</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'View All Company Cars', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'View Company Car Log By User', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
			<li><a href="#">Comparisons</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'Compare Cars', 'title="Tax By Car"'); ?></li>
				</ul>
			</li>
			<li><a href="#">VAT Scale Charge</a></li>
		</ul>
	</li>
	

    <li><a href="#">Reports</a>
		<ul>
			<li><a href="#">Tax calculation - BIK</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'By User', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Department', 'title="Company Car Log"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Company', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
			<li><a href="#">Tax calculation - VAT</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'By User', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Department', 'title="Company Car Log"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Company', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
			<li><a href="#">Comparison reports</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'By User', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Department', 'title="Company Car Log"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Company', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
			<li><a href="#">Business Mileage</a>
				<ul>
				    <?php 
                    if ($this->flexi_auth->is_logged_in())
                        {         ?>
                            
					<li><?php echo anchor('forms/mileage', 'By User', 'title="Mileage"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Department', 'title="Company Car Log"'); ?></li>
					   
					<?php  
					        if ($this->flexi_auth->is_admin()) 
                   { ?>
					
					<li><?php echo anchor('forms/selectform', 'By Company', 'title="Company Car Log"'); ?></li>
				                                 <?php } ?>
                    <?php } ?>  
				</ul>
			</li>
			<li><a href="#">Business Expenses</a>
                <ul>
                    <?php 
                    if ($this->flexi_auth->is_logged_in())
                        {         ?>
                            
                    <li><?php echo anchor('forms/purchases', 'Purchases', 'title="Purchases"'); ?></li>
                    <li><?php echo anchor('forms/selectform', 'By Department', 'title="Company Car Log"'); ?></li>
                       
                    <?php  
                            if ($this->flexi_auth->is_admin()) 
                   { ?>
                    
                    <li><?php echo anchor('forms/purchases', 'Purchases', 'title="Purchases"'); ?></li>
                                                 <?php } ?>
                    <?php } ?>  
                </ul>
			</li>
			<li><a href="#">Spending Report</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'By User', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Department', 'title="Company Car Log"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'By Company', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
			<li><a href="#">Exception Reports</a>
				<ul>
					<li><?php echo anchor('forms/taxbycar', 'Outstanding Mileages', 'title="Tax By Car"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'Outstanding Expenses', 'title="Company Car Log"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'Missing Car Details', 'title="Company Car Log"'); ?></li>
					<li><?php echo anchor('forms/selectform', 'User Status', 'title="Company Car Log"'); ?></li>
				</ul>
			</li>
		</ul>
	</li>	
	
    <li><a href="#">Support</a>
		<ul>
			<li><a href="#">Tutorials</a></li>
			<li><a href="#">Documentation</a></li>
			<li><a href="#">Helpline</a>
				<ul>
					<li><?php echo anchor('forms/narrative', 'Helpdesk numbers', 'title="Add Narrative"'); ?></li>
					<li><?php echo anchor('forms/period', 'Chat to person', 'title="Add Period"'); ?></li>
					<li><?php echo anchor('forms/paymentmthd', 'Support email address', 'title="Add Payment Method"'); ?></li>
				</ul>
			</li>
		</ul>
	</li>
	
	<li><a href="#">Maintenance</a>
		<ul>
			<li><a href="#">Vehicles</a></li>
			<li><a href="#">Company Structure</a></li>
			<li><a href="#">HMRC Correspondence</a></li>
			<li><a href="#">HMRC Report Submission</a></li>
			<li><a href="#">Vat Information</a></li>
			<li><a href="#">Paye Information</a></li>
			<li><a href="#">Authorisations</a></li>
			<li><a href="#">Management Review</a></li>
			<li><a href="#">Exceptions</a></li>
		    <li><a href="#">BIK Details</a>
                <ul>
                    <li><?php echo anchor('forms/users', 'Add User', 'title="Add User"'); ?></li>
                    <li><?php echo anchor('forms/cars', 'Add Car', 'title="Add Car"'); ?></li>
                    <li><?php echo anchor('forms/carassign', 'Assign Car to User', 'title="Car Assign"'); ?></li>
                </ul>
            </li>
            <li><a href="#">Purchases Details</a>
                <ul>
                    <li><?php echo anchor('forms/narrative', 'Add Narrative', 'title="Add Narrative"'); ?></li>
                    <li><?php echo anchor('forms/period', 'Add Period', 'title="Add Period"'); ?></li>
                    <li><?php echo anchor('forms/paymentmthd', 'Add Payment Method', 'title="Add Payment Method"'); ?></li>
                    <li><?php echo anchor('forms/supplier', 'Add Supplier', 'title="Add Supplier"'); ?></li>
                </ul>
            </li>
		</ul>
	</li>
    <li><a href="#">Admin</a>
        <ul>
            <?php 
            if ($this->flexi_auth->is_logged_in())
                {
                    if ($this->flexi_auth->is_admin()) 
                        { ?>
                      <li>
                            <a href="<?php echo $base_url;?>auth_admin/dashboard">Admin Control Panel</a>
                      </li>
                         <?php } else { ?>
                      <li>
                            <a href="<?php echo $base_url;?>auth/login">User Control Panel</a>
                      </li>    
                         <?php } ?>
           <?php } ?>        

            <li><?php echo anchor('forms/privilagetest', 'Privilage Test', 'title="Privilages"'); ?></li>
        </ul>
    </li>	
</ul>
</nav>