       	
<div id="container">
	<h1>PAYMENT METHOD INPUT</h1>
	<?= form_open('forms/paymentmthd'); ?>
	
	<table id="table3" width="50%">
		<thead>
			<tr>
				<td class="paymentmthd"><h4>Add Payment Method</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="i.e. Cash" type="text" name="paymentmthd" />
			</td>
			</tr>
		</table>
		
		<div class="errormsg">
			<p><?php echo form_error('paymentmthd'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>