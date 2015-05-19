
<div id="container">
       	
<div id="invoicecontainer">
	<div id="invoiceheader"><h1>Financial Performance Solutions Ltd</h1></div>
	<?= form_open('forms/invoice'); ?>
	
	<div id="companyaddress">
		<table id="table10">
			<tr>
				<td><h4>10 Flappit Springs</h4></td>
			</tr>
			<tr>
				<td><h4>Halifax Road</h4></td>
			</tr>
			<tr>
				<td><h4>Keighley</h4></td>
			</tr>
			<tr>
				<td><h4>West Yorkshire</h4></td>
				<td><h4>BD21 5PU</h4></td>
			</tr>
			<tr>
				<td><h4>Mobile</h4></td>
				<td><h4>123456789</h4></td>
			</tr>
			<tr>
				<td><h4>Email</h4></td>
				<td><h4>markcoates@fpsolutions.com</h4></td>
			</tr>
		</table>
		
		
		
	</div>
	<div id="clientaddress">
		<table id="table10">
			<tr>
				<td><h4>10 Flappit Springs</h4></td>
			</tr>
			<tr>
				<td><h4>Halifax Road</h4></td>
			</tr>
			<tr>
				<td><h4>Keighley</h4></td>
			</tr>
			<tr>
				<td><h4>West Yorkshire</h4></td>
				<td><h4>BD21 5PU</h4></td>
			</tr>
			<tr>
				<td><h4>Mobile</h4></td>
				<td><h4>123456789</h4></td>
			</tr>
			<tr>
				<td><h4>Email</h4></td>
				<td><h4>markcoates@fpsolutions.com</h4></td>
			</tr>
		</table>
		
		
	</div>	
	<div id="documentdetails">
		<table id="table11">
			<tr>
				<td><h4>Doc No</h4></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>
			<tr>
				<td><h4>Date</h4></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>
			<tr>
				<td><h4>Payment Due</h4></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>
			<tr>
				<td><h4>Order No</h4></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>
		</table>
		
		
	</div>
	
	<div class="onelinetb">
		<table id="table12">
			<tr>
				<td><h4>Vat No</h4></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>

		</table>
		
	</div>
	
	<div class="details">
	<table id="table4" width="100%">
		<thead>
			<tr>
				<td class="uniquecustcode"><h4>Item</h4></td>
				<td class="description"><h4>Description</h4></td>
				<td class="basis"><h4>Basis</h4></td>
				<td class="rate"><h4>Rate</h4></td>
				<td class="quantity"><h4>Quantity</h4></td>
				<td class="net"><h4>Net</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>1</td>
			<td>
				<input placeholder="Description" type="text" name="description" />
			</td>
			<td>				
				<select name="basis">
									<option value='Hours'>Hours</option>
									<option value='Days'>Days</option>
									<option value='Weeks'>Weeks</option>
									<option value='Months'>Months</option>
									<option value='Units'>Units</option>
									<option value='None'>None</option>
				</select>
			</td>
			<td>				
				<input placeholder="Rate" type="number" step="any" min="0" name="rate" />
			</td>
			<td>				
				<input placeholder="Quantity" type="number" step="any" min="0" name="quantity" />
			</td>			
			<td>
				<input placeholder="Net" type="number" step="any" min="0" name="net" />
			</td>			
		</tr>
		<tr>			 
			<td>2</td>
			<td>
				<input placeholder="Description" type="text" name="description" />
			</td>
			<td>				
				<select name="basis">
									<option value='Hours'>Hours</option>
									<option value='Days'>Days</option>
									<option value='Weeks'>Weeks</option>
									<option value='Months'>Months</option>
									<option value='Units'>Units</option>
									<option value='None'>None</option>
				</select>
			</td>
			<td>				
				<input placeholder="Rate" type="number" step="any" min="0" name="rate" />
			</td>
			<td>				
				<input placeholder="Quantity" type="number" step="any" min="0" name="quantity" />
			</td>			
			<td>
				<input placeholder="Net" type="number" step="any" min="0" name="net" />
			</td>			
		</tr>
		<tr>			 
			<td>3</td>
			<td>
				<input placeholder="Description" type="text" name="description" />
			</td>
			<td>				
				<select name="basis">
									<option value='Hours'>Hours</option>
									<option value='Days'>Days</option>
									<option value='Weeks'>Weeks</option>
									<option value='Months'>Months</option>
									<option value='Units'>Units</option>
									<option value='None'>None</option>
				</select>
			</td>
			<td>				
				<input placeholder="Rate" type="number" step="any" min="0" name="rate" />
			</td>
			<td>				
				<input placeholder="Quantity" type="number" step="any" min="0" name="quantity" />
			</td>			
			<td>
				<input placeholder="Net" type="number" step="any" min="0" name="net" />
			</td>			
		</tr>
		<tr>			 
			<td>4</td>
			<td>
				<input placeholder="Description" type="text" name="description" />
			</td>
			<td>				
				<select name="basis">
									<option value='Hours'>Hours</option>
									<option value='Days'>Days</option>
									<option value='Weeks'>Weeks</option>
									<option value='Months'>Months</option>
									<option value='Units'>Units</option>
									<option value='None'>None</option>
				</select>
			</td>
			<td>				
				<input placeholder="Rate" type="number" step="any" min="0" name="rate" />
			</td>
			<td>				
				<input placeholder="Quantity" type="number" step="any" min="0" name="quantity" />
			</td>			
			<td>
				<input placeholder="Net" type="number" step="any" min="0" name="net" />
			</td>			
		</tr>
		<tr>			 
			<td>5</td>
			<td>
				<input placeholder="Description" type="text" name="description" />
			</td>
			<td>				
				<select name="basis">
									<option value='Hours'>Hours</option>
									<option value='Days'>Days</option>
									<option value='Weeks'>Weeks</option>
									<option value='Months'>Months</option>
									<option value='Units'>Units</option>
									<option value='None'>None</option>
				</select>
			</td>
			<td>				
				<input placeholder="Rate" type="number" step="any" min="0" name="rate" />
			</td>
			<td>				
				<input placeholder="Quantity" type="number" step="any" min="0" name="quantity" />
			</td>			
			<td>
				<input placeholder="Net" type="number" step="any" min="0" name="net" />
			</td>			
		</tr>
		</table>
		

		
		
		
		<div class="errormsg">
			<p><?php echo form_error('description'); ?></p>
			<p><?php echo form_error('rate'); ?></p>
			<p><?php echo form_error('quantity'); ?></p>
			<p><?php echo form_error('net'); ?></p>
		</div>
		<div class="clearboth"></div>	
	</div>
			<div class="paymentinfo">
		<table id="table10">
			<tr>
				<td><h4>Payment Terms:</h4></td>
				<td><h4>Settlement terms as per contract</h4></td>
			</tr>
			<tr>
				<td><h4>Cheques / Bacs Payable To:</h4></td>
				<td><h4>FP Solutions Ltd</h4></td>
			</tr>
			<tr>
				<td><h4>Bank:</h4></td>
				<td><h4>RBS</h4></td>
			</tr>
		</table>
		<table id="table10">
			<tr>
				<td><h4>Sort Code:</h4></td>
				<td><h4>1234 5678</h4></td>
				<td><h4>Account:</h4></td>
				<td><h4>123456789</h4></td>
			</tr>
		</table>
			
			
		</div>
			<div class="onelinetb_small">
		<table id="table13">
			<tr>
				<td><h6>Total Net</h6></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>

		</table>
		
	</div>
		<div class="onelinetb_small">
		<table id="table13">
			<tr>
				<td><h6>Vat payable @ 20.00%</h6></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>

		</table>
		
	</div>
		<div class="onelinetb_small">
		<table id="table13">
			<tr>
				<td><h6>Total Gross Payable</h6></td>
				<td><input type="text" placeholder="1234567890" /></td>
			</tr>

		</table>
		
	</div>
	
	
	<div class="clearboth"></div>	
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	
	<?= form_close(); ?>

<!--
		
	<table id="table2" width="100%">
		<thead>
			<tr>
				<td class="fullname"><h4>Customer Name</h4></td>
				<td class="business"><h4>Business Name</h4></td>
				<td class="uniquecustcode"><h4>Unique Customer Code</h4></td>
				<td class="description"><h4>Item Description</h4></td>
				<td class="basis"><h4>Basis</h4></td>
				<td class="rate"><h4>Rate</h4></td>
				<td class="quantity"><h4>Quantity</h4></td>
				<td class="net"><h4>Net</h4></td>
			</tr>
		</thead>
			
	<?php
	
	foreach($results as $row){
		echo "<tr><td>".$row->fullname."</td>";
		echo "<td>".$row->business."</td>";
		echo "<td>".$row->uniquecustcode."</td>";
		echo "<td>".$row->description."</td>";
		echo "<td>".$row->basis."</td>";		
		echo "<td>".$row->rate."</td>";
		echo "<td>".$row->quantity."</td>";
		echo "<td>".$row->net."</td>";
	} 
	 
	?>
	
	</table>

-->

<div class="clearboth"></div>	
</div>

</div>
