<div id="container">
	<div class="clearfix">
	<h1>PURCHASES DATA INPUT</h1>
	<?= form_open('forms/purchases'); ?>
	
	<div class="grid">
            <div class="grid-24 scroll">
	
	<table id="table4" width="100%">
		<thead>
			<tr>
				<td class="supplier"><h4>Select Supplier</h4></td>
				<td class="invoiceref"><h4>Invoice Reference</h4></td>
				<td class="date"><h4>Date</h4></td>
				<td class="period"><h4>Select Period</h4></td>
				<td class="gross"><h4>Gross</h4></td>
				<td class="vatpercentage"><h4>Select Vat%</h4></td>
				<td class="narrative"><h4>Select Narrative</h4></td>
				<td class="paymentmthd"><h4>Select Payment Method</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<select name="supplier">
						<?php	
							foreach($supplier as $row){
								echo "<option value='".$row->supname."'>".$row->supname."</option>";
							} 						 
						?>
				</select>
			</td>
			<td>
				<input placeholder="i.e. 34060" type="text" name="invoiceref" />
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
				<select name="vatpercent">
					<option value="0">0</option>
					<option value="20">20</option>
				</select>
			</td>
			<td>
				<select name="narrative">
						<?php	
							foreach($narrative as $row){
								echo "<option value='".$row->narrative."'>".$row->narrative."</option>";
							} 						 
						?>
				</select>
			</td>
			<td>
				<select name="paymentmthd">
						<?php	
							foreach($paymentmthd as $row){
								echo "<option value='".$row->paymentmthd."'>".$row->paymentmthd."</option>";
							} 						 
						?>
				</select>
			</td>					
		</tr>
		</table>
		
		<div class="errormsg">
			<p><?php echo form_error('invoiceref'); ?></p>
			<p><?php echo form_error('date'); ?></p>
			<p><?php echo form_error('net'); ?></p>
			<p><?php echo form_error('vat'); ?></p>
			<p><?php echo form_error('gross'); ?></p>
			<p><?php echo form_error('vatpercent'); ?></p>
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
				<td class="ref"><h4>Ref No</h4></td>
				<td class="supplier"><h4>Supplier</h4></td>
				<td class="invoiceref"><h4>Invoice Ref</h4></td>
				<td class="date"><h4>Date</h4></td>
				<td class="period"><h4>Period</h4></td>
				<td class="net"><h4>Net</h4></td>
				<td class="vat"><h4>Vat</h4></td>
				<td class="gross"><h4>Gross</h4></td>
				<td class="vatpercent"><h4>Vat%</h4></td>
				<td class="narrative"><h4>Narrative</h4></td>
				<td class="paidby"><h4>Paid By</h4></td>
			</tr>
		</thead>
			
	<?php
	
	foreach($results as $row){
		echo "<tr><td><p>".$row->autoid."</p></td>";
		echo "<td><p>".$row->supplier."</p></td>";
		echo "<td><p>".$row->invoiceref."</p></td>";
		echo "<td><p>".$row->date."</p></td>";
		echo "<td><p>".$row->period."</p></td>";		
		echo "<td><p>".$row->net."</p></td>";
		echo "<td><p>".$row->vat."</p></td>";
		echo "<td><p>".$row->gross."</p></td>";
		echo "<td><p>".$row->vatpercent."%</p></td>";
		echo "<td><p>".$row->narrative."</p></td>";
		echo "<td><p>".$row->paidby."</p></td>";
		
	} 
	 
	?>
	</table>

			</div>
		</div>
	</div>
</div>