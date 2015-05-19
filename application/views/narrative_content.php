       	
<div id="container">
	<h1>NARRATIVE INPUT</h1>
	<?= form_open('forms/narrative'); ?>
	
	<table id="table3" width="50%">
		<thead>
			<tr>
				<td class="period"><h4>Add Narrative</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="i.e. Accomodation" type="text" name="narrative" />
			</td>
			</tr>
		</table>
		
		
		<div class="errormsg">
			<p><?php echo form_error('narrative'); ?></p>
		</div>
		
	<div class="center"><input type="submit" id="submit1" class="submit-button"/></div>
	
	<?= form_close(); ?>

</div>