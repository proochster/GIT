<nav>
<ul>
	
	<li><?php echo anchor( base_url(), 'Home', 'title="Home"'); ?></li>
	<li><a href="#">Tax</a>
		<ul>
			<li><?php echo anchor('forms/taxbycar', 'View All Company Cars', 'title="Tax By Car"'); ?></li>
			<li><?php echo anchor('forms/selectform', 'View Company Car Log By User', 'title="Company Car Log"'); ?></li>
		<!--	<li><?php echo anchor('forms/invoice', 'Invoice', 'title="Invoice"'); ?></li> -->
		</ul>
	</li>
	<li><a href="#">User Data Input</a>
		<ul>
			<li><?php echo anchor('forms/mileage', 'Mileage', 'title="Mileage"'); ?></li>
			<li><?php echo anchor('forms/purchases', 'Purchases', 'title="Purchases"'); ?></li>
		<!--	<li><?php echo anchor('forms/invoice', 'Invoice', 'title="Invoice"'); ?></li> -->
		</ul>
	</li>
	<li><a href="#">Setup</a>
			
				<ul>
					<li><?php echo anchor('forms/users', 'Add User', 'title="Add User"'); ?></li>
					<li><?php echo anchor('forms/cars', 'Add Car', 'title="Add Car"'); ?></li>
					<li><?php echo anchor('forms/carassign', 'Assign Car to User', 'title="Car Assign"'); ?></li>
					<li><?php echo anchor('forms/narrative', 'Add Narrative', 'title="Add Narrative"'); ?></li>
					<li><?php echo anchor('forms/period', 'Add Period', 'title="Add Period"'); ?></li>
					<li><?php echo anchor('forms/paymentmthd', 'Add Payment Method', 'title="Add Payment Method"'); ?></li>
					<li><?php echo anchor('forms/supplier', 'Add Supplier', 'title="Add Supplier"'); ?></li>
				<!--	<li><?php echo anchor('forms/supplier', 'Supplier Name', 'title="Suppliers"'); ?></li>
					<li><?php echo anchor('forms/cars', 'Car Details', 'title="Cars"'); ?></li> -->
				</ul>
			
	</li>

<!--	 <li><a href="#">Tests</a>
		<ul>
			<li><?php echo anchor('forms/jaspersoft_content', 'Pie Chart', 'title="Jaspersoft"'); ?></li>
			<li><?php echo anchor('forms/tables_content', 'Tables', 'title="Tables"'); ?></li>
			<li><?php echo anchor('forms/dashboard', 'Dashboard', 'title="Dashboard"'); ?></li>
		</ul>
		</li> --> 
		
	<li><?php echo anchor('forms/logout', '>> Logout: '.$username.' <<', 'title="logout"'); ?></li>	
</ul>
</nav>

<!--

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">WordPress</a>
        <!-- First Tier Drop Down -->
<!--        <ul>
            <li><a href="#">Themes</a></li>
            <li><a href="#">Plugins</a></li>
            <li><a href="#">Tutorials</a></li>
        </ul>        
        </li>
        <li><a href="#">Web Design</a>
        <!-- First Tier Drop Down -->
<!--        <ul>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="#">Tutorials</a>
        	<!-- Second Tier Drop Down -->
<!--            <ul>
                <li><a href="#">HTML/CSS</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Other</a></li>
            </ul>
            </li>
        </ul>
        </li>
        <li><a href="#">Graphic Design</a></li>
        <li><a href="#">Inspiration</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
    </ul>
-->