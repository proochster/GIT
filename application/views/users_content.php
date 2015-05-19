       	
<div id="container">
	<h1>ADD NEW USER</h1>
	<?= form_open('forms/users'); ?>
	
	<table id="table3" width="50%">
		<thead>
			<tr>
				<td><h4>New Username</h4></td>
				<td><h4>Password</h4></td>
				<td><h4>Name</h4></td>
				<td><h4>Surname</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="Username" type="text" name="user" />
			</td>
			<td>
				<input placeholder="Password" type="password" name="pass" />
			</td>
			<td>				
				<input placeholder="Name" type="text" name="name" />
			</td>
			<td>				
				<input placeholder="Surname" type="text" name="surname" />
			</td>			
		</tr>
		</table>
		
		<div class="errormsg">
			<p><?php echo form_error('user``'); ?></p>
			<p><?php echo form_error('pass'); ?></p>
			<p><?php echo form_error('name'); ?></p>
			<p><?php echo form_error('surname'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>