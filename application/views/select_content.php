       	
<div id="container">
	<h1>Select User and Date Range</h1>
	<?= form_open('forms/selectform'); ?>
	
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
	
	<?= form_close(); ?>
	


</div>