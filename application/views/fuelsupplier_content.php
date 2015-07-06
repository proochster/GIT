<div id="container">
    <div class="clearfix">
	<h1>FUEL SUPPLIER NAME INPUT</h1>
	<?= form_open('forms/fuelsupplier'); ?>
	
<div class="grid">
   <div class="grid-24 scroll">
	
	<table id="table4" width="50%">
		<thead>
			<tr>
				<td><h4>Supplier Name</h4></td>
			</tr>
		</thead>
			<tr>			 
			<td>
				<input placeholder="i.e. ASDA Petrol Station" type="text" name="fuelsupname" />
			</td>
			</tr>
		</table>
	</div>
		
		<div class="errormsg">
			<p><?php echo form_error('fuelsupname'); ?></p>
		</div>
	
	<div class="grid-24 center">
			
		<input type="submit" id="submit1" class="large link_button"/>
	
	</div>
	
	<?= form_close(); ?>
	
	
		</div>
	</div>
</div>