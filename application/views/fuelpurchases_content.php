<div id="container">
	<div class="clearfix">
	<h1>FUEL CLAIMS DATA INPUT</h1>
	<?= form_open('forms/fuelpurchases'); ?>
	
	<div class="grid">
            <div class="grid-24 scroll">
	
	<table id="table4" width="100%">
		<thead>
			<tr>
				<td><h4>Select Fuel Supplier</h4></td>
				<td><h4>Date</h4></td>
				<td><h4>Select Period</h4></td>
				<td><h4>Gross</h4></td>
				<td><h4>Select Payment Method</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<select name="fuelsupplier">
						<?php	
							foreach($fuelsupplier as $row){
								echo "<option value='".$row->fuelsupname."'>".$row->fuelsupname."</option>";
							} 						 
						?>
				</select>
			</td>
			<td>
				<input type="text" id="datepicker" name="date" />
			</td>
			<td>
				<select name="period">
						<?php	
							foreach($period as $row){
								echo "<option value='".$row->period."'>".$row->period."</option>";
							} 						 
						?>
				</select>
			</td>
			<td>				
				<input placeholder="i.e. 70" type="number" step="any" name="gross" />
			</td>			
			<td>
				<select name="fuelpaymentmthd">
						<?php	
							foreach($fuelpaymentmthd as $row){
								echo "<option value='".$row->fuelpaymentmthd."'>".$row->fuelpaymentmthd."</option>";
							} 						 
						?>
				</select>
			</td>					
		</tr>
		</table>
		
		<div class="errormsg">
			<p><?php echo form_error('date'); ?></p>
			<p><?php echo form_error('gross'); ?></p>
		</div>
	</div>
	
			
	<div class="grid-24 center">
		<input type="submit" id="submit1" class="large link_button"/>
	</div>
	
	</div>
	
	<?= form_close(); ?>
	
    <div class="grid">
    	<div class="grid-24 scroll">
           		
			<table id="table2">
				
		<thead>
			<tr>
				<td><h4>Ref No</h4></td>
				<td><h4>Supplier</h4></td>
				<td><h4>Date</h4></td>
				<td><h4>Period</h4></td>
				<td><h4>Net</h4></td>
				<td><h4>Vat</h4></td>
				<td><h4>Gross</h4></td>
				<td><h4>Paid By</h4></td>
			</tr>
		</thead>
			
	<?php
	
	foreach($results as $row){
		echo "<tr><td><p>".$row->autoid."</p></td>";
		echo "<td><p>".$row->fuelsupplier."</p></td>";
		echo "<td><p>".$row->date."</p></td>";
		echo "<td><p>".$row->period."</p></td>";		
		echo "<td><p>".$row->net."</p></td>";
		echo "<td><p>".$row->vat."</p></td>";
		echo "<td><p>".$row->gross."</p></td>";
		echo "<td><p>".$row->paidby."</p></td>";
		
	} 
	 
	?>
	</table>

			</div>
		</div>
	</div>
</div>