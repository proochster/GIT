       	
<div id="container">
	<h1>ASSIGN CAR TO A USER</h1>
	<?= form_open('forms/carassign'); ?>
	
	<div class="tablecontainer2">
		
	<table id="table8" width="100%">
			
			<tr><td colspan="2"><h4>Select your user:</h4></td></tr>
			<tr>
			<td><h4>User*</h4></td>
			<td>
				<select name="user">
						<?php	
							foreach($user as $row){
								echo "<option value='".$row->username."'>".$row->username."</option>";
							} 						 
						?>
				</select>
			</td>
			</tr>
			
			
	</table>		
	<table id="table9" width="100%" class="cellemphasis">
			<tr><td colspan="2"><h4>Select registration of the car you want to assign to that user:</h4></td></tr>	
			<tr>
			<td><h4>Select Car*</h4></td>
			<td>
				<select name="registration">
						<?php	
							foreach($registration as $row){
								echo "<option value='".$row->registration."'>".$row->registration."</option>";
							} 						 
						?>
				</select>
			</td>
			</tr>
			<tr><td colspan="2"><h4>Now select between what dates the car is/was used/assigned to the user:</h4></td></tr>
			<tr>
				<td><h4>From*</h4></td>
				<td><input type="text" id="datepicker" name="datefrom" /></td>
			</tr>
			<tr>
				<td><h4>To*</h4></td>
				<td><input type="text" id="datepicker2" name="dateto" /></td>
			</tr>
	</table>
	
	
	
	
	
		
		<div class="errormsg">
			<p><?php echo form_error('datefrom'); ?></p>
			<p><?php echo form_error('dateto'); ?></p>
		</div>
	
	</div>
	
	<div class="submit-center-button"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>
