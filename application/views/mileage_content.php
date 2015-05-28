       	
<div id="container">
	<h1>MILEAGE DATA INPUT</h1>
	<?= form_open('forms/mileage'); ?>
	
	<table id="table4" width="100%">
		<thead>
			<tr>
				<td class="date"><h4>Date</h4></td>
				<td class="reg"><h4>Registration</h4></td>
				<td class="from"><h4>From</h4></td>
				<td class="to"><h4>To</h4></td>
				<td class="client"><h4>Client</h4></td>
				<td class="return"><h4>Return</h4></td>
				<td class="mileage"><h4>Milage</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input type="text" id="datepicker" name="date" />
			</td>
			<td>
				<select name="reg">
						<?php	
							foreach($registration as $row){
								echo "<option value='".$row->registration."'>".$row->registration."</option>";
							} 						 
						?>
				</select>
			</td>
			<td>				
				<input placeholder="From" type="text" name="from" />
			</td>
			<td>				
				<input placeholder="To" type="text" name="to" />
			</td>
			<td>				
				<input placeholder="Client" type="text" name="client" />
			</td>			
			<td>
				<select name="return">
					<option value = "YES">YES</option>
					<option value = "NO">NO</option>
				</select>
			</td>			
			<td>
				<input placeholder="Mileage" type="number" name="mileage" />
			</td>			
		</tr>
		</table>
		
		<div class="errormsg">
			<p><?php echo form_error('date'); ?></p>
			<p><?php echo form_error('from'); ?></p>
			<p><?php echo form_error('to'); ?></p>
			<p><?php echo form_error('client'); ?></p>
			<p><?php echo form_error('mileage'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>
	
	<table id="table2" width="100%">
		<thead>
			<tr>
				<td class="date"><h4>Date</h4></td>
				<td class="reg"><h4>From</h4></td>
				<td class="model"><h4>To</h4></td>
				<td class="fuel"><h4>Client</h4></td>
				<td class="from"><h4>Return</h4></td>
				<td class="to"><h4>Registration</h4></td>
				<td class="client"><h4>Model</h4></td>
				<td class="return"><h4>Fuel</h4></td>
				<td class="mileage"><h4>Milage</h4></td>
			</tr>
		</thead>
			
	<?php
	
	foreach($results as $row){
		echo "<tr><td>".$row->date."</td>";
		echo "<td>".$row->from."</td>";
		echo "<td>".$row->to."</td>";
		echo "<td>".$row->client."</td>";
		echo "<td>".$row->return."</td>";		
		echo "<td>".$row->reg."</td>";
		echo "<td>".$row->car."</td>";
		echo "<td>".$row->fuel."</td>";
		echo "<td>".$row->mileage."</td>";
	} 
	 
	?>
	</table>

</div>