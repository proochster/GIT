       	
<div id="container">
	<h1>SUPPLIER NAME INPUT</h1>
	<?= form_open('forms/supplier'); ?>
	
	<table id="table3" width="50%">
		<thead>
			<tr>
				<td class="supname"><h4>Supplier Name</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="i.e. Jurys Inn" type="text" name="supname" />
			</td>
			</tr>
		</table>
		
		<div class="errormsg">
			<p><?php echo form_error('supname'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>