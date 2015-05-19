       	
<div id="container">
	<h1>Company Car Log</h1>
	<?= form_open('forms/selectform'); ?>
	
	<div class="imputfieldemphasis">
		<h3>Parameters:</h3>
	<table id="table1" width="50%">
		<thead>
			<tr>
				<td>Select User*</td>
				<td>Select From Date*</td>
				<td>Select To Date*</td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<select name="user">
						<?php	
							foreach($users as $row){
								echo "<option value='".$row->username."'>".$row->username."</option>";
							} 						 
						?>
				</select>
			</td>
			<td>
				<input type="text" name="datefrom" id="datepicker" />
			</td>
			<td>
				<input type="text" name="dateto" id="datepicker2" />
			</td>
		
		</tr>
		</table>

	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	</div>
	
	<?= form_close(); ?>
	
	<table id="table6" width="55%">
		<tr>
			<td>Showing results for:</td>
			<td><h3><?php echo $selecteduser;  ?></h3></td>
			<td>Date range:</td>
			<td><h3><?php echo $datefrom;  ?></h3></td>
			<td><h3>-</h3></td>
			<td><h3><?php echo $dateto;  ?></h3></td>
		</tr>
	</table>
	
	
	
	<div class="divemphasis">
	
		<table class="table14" width="100%">
		<h3>Car Log</h3>	
		<h4>Showing cars within specified range, registered to user:</h4>
	<thead>
		<tr>
			<th>Username</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Car Registration</th>
			<th>From</th>
			<th>To</th>
			<th>Benefit</th>
			<th>Fuel</th>
			<th>Total</th>
		</tr>
	</thead>
			
	<?php
	
	foreach($carsforperiod as $row){
		echo "<tr><td>".$row->username."</td>";
		echo "<td>".$row->name."</td>";
		echo "<td>".$row->surname."</td>";
		echo "<td>".$row->carreg."</td>";
		echo "<td>".$row->fromdate."</td>";
		echo "<td>".$row->todate."</td>";
		echo "<td>£".$row->calcbenefit."</td>";
		echo "<td>£".$row->calcfuel."</td>";
		echo "<td>£".$row->calctotal."</td></tr>";
	} 
	 
	?>
	</table>
	
	<table class="table14" width="50%">
		<h4>Totals</h4>
	<thead>
		<tr>
			<th>Total</th>
			<th>20% Band</th>
			<th>40% Band</th>
		</tr>
	</thead>
			
	<?php
	
	foreach($totals as $row){
		echo "<tr><td>£".$row->total."</td>";
		echo "<td>£".$row->two."</td>";
		echo "<td>£".$row->four."</td></tr>";
	} 
	 
	?>
	</table>
	</div>
	<div class="invisibleemphasis">
	<table class="table14" width="100%">
		<h3>Average</h3>
		<h4>Cars Used between January 15th - 31st</h4>
	<thead>
		<tr>
			<th>Username</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Car Registration</th>
			<th>From</th>
			<th>To</th>
			<th>Benefit</th>
			<th>Fuel</th>
			<th>Total</th>
		</tr>
	</thead>
			
	<?php
	
	foreach($january as $row){
		echo "<tr><td>".$row->username."</td>";
		echo "<td>".$row->name."</td>";
		echo "<td>".$row->surname."</td>";
		echo "<td>".$row->carreg."</td>";
		echo "<td>".$row->fromdate."</td>";
		echo "<td>".$row->todate."</td>";
		echo "<td>£".$row->calcbenefit."</td>";
		echo "<td>£".$row->calcfuel."</td>";
		echo "<td>£".$row->calctotal."</td></tr>";
	} 
	 
	?>
	</table>
	
	<table class="table14" width="100%">
		<h4>Car Info for cars used between January 15th - 31st by the user</h4>
	<thead>
		<tr>
			<th>Registration</th>
			<th>Model</th>
			<th>List Price</th>
			<th>Co2</th>
			<th>Benefit</th>
			<th>Fuel</th>
			<th>Total</th>
			<th>20% Band</th>
			<th>40% Band</th>
		</tr>
	</thead>
			
	<?php
	
	foreach($carsinfo as $row){
		echo "<tr><td>".$row->carreg."</td>";
		echo "<td>".$row->car."</td>";
		echo "<td>£".$row->listprice."</td>";
		echo "<td>".$row->co2."</td>";
		echo "<td>£".$row->benefit."</td>";
		echo "<td>£".$row->fuel."</td>";
		echo "<td>£".$row->total."</td>";
		echo "<td>£".$row->two."</td>";
		echo "<td>£".$row->four."</td></tr>";
	} 
	 
	?>
	</table>
	
	</div>
	<div class="divemphasis">
	<h3>Comparison</h3>
	<h4>Comparison of tax benefit by total for cars used within period specified, against averaging by car used bewteen 15th - 31st of Jan </h4>
	
	<table  id="table4" width="55%">
		<tr>
			<td><h4>Total car benefit for cars used within specified period</h4></td>
			<td><h4>Total car benefit for cheapest car to tax (15th to 31st Jan)</h4></td>
		</tr>
		<tr>
			<td class="greentd1"><?php foreach($totalforperiod as $row){	echo "£".$row->total."";} ?></td>
			<td class="greentd1"><?php foreach($cheapestbycar as $row){ echo "£".$row->mintax."";} ?></td>
		</tr>
	</table>
	
	
	
	
	
	</div>

</div>