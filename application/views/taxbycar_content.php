       	
<div id="container">
	<h1>Tax By Car</h1>
	<?= form_open('forms/taxbycar'); ?>
	<?= form_close(); ?>
	<table class="table14" width="100%">
		<h4>Three most expensive cars to tax in company database:</h4>
	<thead>
		<tr>
			<th>Model</th>
			<th>List Price</th>
			<th>Co2</th>
			<th>Registration</th>
			<th>Benefit</th>
			<th>Fuel</th>
			<th>Total (Annual)</th>
			<th>20% Band</th>
			<th>40% Band</th>
		</tr>
	</thead>
			
	<?php
	
	foreach($expensive as $row){
		echo "<tr><td class='redtd1'>".$row->car."</td>";
		echo "<td class='redtd1'>£".$row->listprice."</td>";
		echo "<td class='redtd1'>".$row->co2."</td>";
		echo "<td class='redtd1'>".$row->registration."</td>";
		echo "<td class='redtd1'>£".$row->benefit."</td>";
		echo "<td class='redtd1'>£".$row->fuel."</td>";
		echo "<td class='redtd1'>£".$row->total."</td>";
		echo "<td class='redtd1'>£".$row->two."</td>";
		echo "<td class='redtd1'>£".$row->four."</td></tr>";
	} 
	 
	?>
	</table>
	<table class="table14" width="100%">
		<h4>Three cheapest cars to tax in company database:</h4>
	<thead>
		<tr>
			<th>Model</th>
			<th>List Price</th>
			<th>Co2</th>
			<th>Registration</th>
			<th>Benefit</th>
			<th>Fuel</th>
			<th>Total (Annual)</th>
			<th>20% Band</th>
			<th>40% Band</th>
		</tr>
	</thead>
			
	<?php
	
	foreach($cheap as $row){
		echo "<tr><td class='greentd1'>".$row->car."</td>";
		echo "<td class='greentd1'>£".$row->listprice."</td>";
		echo "<td class='greentd1'>".$row->co2."</td>";
		echo "<td class='greentd1'>".$row->registration."</td>";
		echo "<td class='greentd1'>£".$row->benefit."</td>";
		echo "<td class='greentd1'>£".$row->fuel."</td>";
		echo "<td class='greentd1'>£".$row->total."</td>";
		echo "<td class='greentd1'>£".$row->two."</td>";
		echo "<td class='greentd1'>£".$row->four."</td></tr>";
	} 
	 
	?>
	</table>
	<table class="table14" width="100%">
		<h4>List of company cars already in Database - sorted by cheapest tax first:</h4>
	<thead>
		<tr>
			<th>Model</th>
			<th>List Price</th>
			<th>Co2</th>
			<th>Registration</th>
			<th>Benefit</th>
			<th>Fuel</th>
			<th>Total (Annual)</th>
			<th>20% Band</th>
			<th>40% Band</th>
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
		echo "<td>£".$row->total."</td>";
		echo "<td>£".$row->two."</td>";
		echo "<td>£".$row->four."</td></tr>";
	} 
	 
	?>
	</table>
	
	

</div>
