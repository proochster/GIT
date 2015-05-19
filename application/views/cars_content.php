       	
<div id="container">
	<h1>Add Car</h1>
	<?= form_open('forms/cars'); ?>
	
	<table id="table8" width="100%">
		
			<tr>
				<td><h4>Model*</h4></td>
				<td><input placeholder="Model" type="text" name="car" /></td>
			</tr>
			
			<tr>
				<td><h4>List Price*</h4></td>
				<td><input placeholder="25000" type="number" step="any" name="listprice" /></td>
			</tr>
		
			<tr>
				<td><h4>CO2*</h4></td>
				<td><input placeholder="109" type="number" step="any" name="co2" /></td>
			</tr>

			<tr>
				<td><h4>Registration*</h4></td>
				<td><input placeholder="Registration" type="text" name="registration" /></td>
			</tr>
		
			
	</table>
	<table id="table9" class="cellemphasis" width="100%">
		
			<tr>
				<td colspan="2"><h4>TAX</h4></td>
			</tr>
						
			<tr>
				<td><h4>Benefit*</h4></td>
				<td><input placeholder="2500" type="number" step="any" name="benefit" /></td>
			</tr>
			
			<tr>
				<td><h4>Fuel*</h4></td>
				<td><input placeholder="2500" type="number" step="any" name="fuel" /></td>
			</tr>
			<tr>
				<td><h4>Total* (Annual)</h4></td>
				<td><input placeholder="5000" type="number" step="any" name="total" /></td>
			</tr>
		
			
	</table>
	
		<div class="errormsg">
			<p><?php echo form_error('car'); ?></p>
			<p><?php echo form_error('listprice'); ?></p>
			<p><?php echo form_error('co2'); ?></p>
			<p><?php echo form_error('benefit'); ?></p>
			<p><?php echo form_error('fuel'); ?></p>
			<p><?php echo form_error('total'); ?></p>
			<p><?php echo form_error('registration'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>
	
	<table id="table2" width="100%">
		<h4>Cars already in Database:</h4>
	<thead>
		<tr>
			<td><h4>Model</h4></td>
			<td><h4>List Price</h4></td>
			<td><h4>Co2</h4></td>
			<td><h4>Registration</h4></td>
			<td><h4>Benefit</h4></td>
			<td><h4>Fuel</h4></td>
			<td><h4>Total (Annual)</h4></td>
		</tr>
	</thead>
			
	<?php
	
	foreach($results as $row){
		echo "<tr><td>".$row->car."</td>";
		echo "<td>£".$row->listprice."</td>";
		echo "<td>".$row->co2."</td>";
		echo "<td>".$row->registration."</td>";
		echo "<td>£".$row->benefit."</td>";
		echo "<td>£".$row->fuel."</td>";
		echo "<td>£".$row->total."</td></tr>";
	} 
	 
	?>
	</table>

</div>
