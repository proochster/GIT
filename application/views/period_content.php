       	
<div id="container">
	<h1>PERIOD INPUT</h1>
	<?= form_open('forms/period'); ?>
	
	<table id="table3" width="50%">
		<thead>
			<tr>
				<td class="period"><h4>Add Period</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="i.e. Oct-13" type="text" name="period" />
			</td>
			</tr>
		</table>
		
		
		<div class="errormsg">
			<p><?php echo form_error('period'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>