<div id="container">
    <div class="clearfix">
    	   
	<h1>PAYMENT METHOD INPUT</h1>
	<?= form_open('forms/fuelpaymentmthd'); ?>
	
	
<div class="grid">
   <div class="grid-24 scroll">
	
	<table id="table4" width="50%">
		<thead>
			<tr>
				<td class="paymentmthd"><h4>Add Fuel Payment Method</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="i.e. Fuel Card - 4546" type="text" name="fuelpaymentmthd" />
			</td>
			</tr>
		</table>
	</div>	
		
		
		<div class="errormsg">
			<p><?php echo form_error('fuelpaymentmthd'); ?></p>
		</div>
	
		<div class="grid-24 center">
			<input type="submit" id="submit1" class="large link_button"/>
		</div>	
	<?= form_close(); ?>


		</div>
	</div>
</div>