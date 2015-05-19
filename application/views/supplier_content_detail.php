       	
<div id="container">
	<h1>SUPPLIER DETAILS INPUT</h1>
	<?= form_open('forms/supplier_content_detail'); ?>
	
	<table id="table8" width="100%">
		
			<tr>
				<td class="fullname"><h4>Full Company Name*</h4></td>
				<td><input placeholder="i.e. FP Solutions Ltd" type="text" name="fullname" /></td>
			</tr>
			<tr>
				<td class="business"><h4>Address Line 1*</h4></td>
				<td><input placeholder="Address Line 1" type="text" name="business" /></td>
			</tr>
		
			<tr>
				<td class="address1"><h4>Address Line 2</h4></td>
				<td><input placeholder="Address Line 2" type="text" name="address1" /></td>
			</tr>
			<tr>
				<td class="address1"><h4>Town*</h4></td>
				<td><input placeholder="Town" type="text" name="address2" /></td>
			</tr>
			
			<tr>
				<td class="town"><h4>County</h4></td>
				<td><input placeholder="County" type="text" name="town" /></td>
			</tr>
			<tr>
				<td class="postcode"><h4>Country*</h4></td>
				<td><input placeholder="Country" type="text" name="postcode" /></td>
			</tr>
			<tr>
				<td class="uniquecustcode"><h4>Post Code*</h4></td>
				<td><input placeholder="Post Code" type="text" name="uniquecustcode" /></td>
			</tr>
		
			
	</table>
	<table id="table9" width="100%">
		
			<tr>
				<td><h4>Account Number*</h4></td>
				<td class="cellemphasis"><input placeholder="i.e. ABCD1234" type="text" name="fullname" /></td>
			</tr>
			<tr>
				<td><h4>Supplier Category*</h4></td>
				<td class="cellemphasis">
				<select name="customercategory">
				<!-- Will have to be feed from database, options here are temporary -->
					<option value="expenses">Expenses</option>
					<option value="goods">Goods</option>
					<option value="services">Services</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="postcode"><h4>Type of Supply*</h4></td>
				<!-- Will have to be feed from database, options here are temporary -->
				<td><select name="customercategory">
					<option value="expenses">Accomodation</option>
					<option value="goods">Parking</option>
					<option value="services">Food</option>
				</select></td>
			</tr>
		
			<tr>
				<td class="address1"><h4>Email*</h4></td>
				<td><input placeholder="Email" type="text" name="address1" /></td>
			</tr>
			<tr>
				<td class="address1"><h4>Contact Number*</h4></td>
				<td><input placeholder="Contact Number" type="text" name="address2" /></td>
			</tr>
			
			<tr>
				<td class="town"><h4>Preffered Method of Payment*</h4></td>
				<td>
				<select name="customercategory">
					<option value="Bank Transfer">Bank Transfer</option>
					<option value="Cash">Cash</option>
					<option value="Cheque">Cheque</option>
					<option value="Credit Card">Credit Card</option>
					<option value="Debit Card">Debit Card</option>
					<option value="Direct Debit">Direct Debit</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<td class="uniquecustcode"><h4>Vat Rate*</h4></td>
				<td>
				<select name="customercategory">
					<option value="0">0</option>
					<option value="std20">Standard 20</option>
					<option value="Exempt">Exempt</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="uniquecustcode"><h4>Vat Reg*</h4></td>
				<td>
				<select name="customercategory">
					<option value="Yes">Yes</option>
					<option value="std20">Standard 20</option>
					<option value="Exempt">Exempt</option>
				</select>
				</td>
			</tr>
		
			
	</table>
		
		<div class="errormsg">
			<p><?php echo form_error('fullname'); ?></p>
			<p><?php echo form_error('business'); ?></p>
			<p><?php echo form_error('address1'); ?></p>
			<p><?php echo form_error('town'); ?></p>
			<p><?php echo form_error('postcode'); ?></p>
			<p><?php echo form_error('uniquecustcode'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>
