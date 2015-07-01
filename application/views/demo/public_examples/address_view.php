<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>FPS Gateway</title>
	<?php $this->load->view('head'); ?> 
</head>

<body id="manage_address_book">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/admin_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Public: Manage Address Book</h2>
				<p>Here you can save multiple addresses and then use them or relate to them in other forms.</p>
				<p></p>
				<p>Below is a list of all addresses that are related to your account.</p>
			</div>		
		</div>
	</div>
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Manage Address Book</h2>
				<a href="<?php echo $base_url;?>auth_public/insert_address">Insert New Address</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<table>
						<thead>
							<tr>
								<th class="spacer_150 tooltip_trigger"
									title="An alias to reference the address by.">
									Alias
								</th>
								<th>Recipient</th>
								<th>Company</th>
								<th>Post Code</th>
								<th class="spacer_100 align_ctr tooltip_trigger" 
									title="If checked, the row will be deleted upon the form being updated.">
									Delete
								</th>
							</tr>
						</thead>
						<?php 
							if (!empty($addresses)) {
								foreach ($addresses as $address) {
						?>
						<tbody>
							<tr>
								<td>
									<a href="<?php echo $base_url;?>auth_public/update_address/<?php echo $address['uadd_id'];?>/"><?php echo $address['uadd_alias'];?></a>
								</td>
								<td><?php echo $address['uadd_recipient'];?></td>
								<td><?php echo $address['uadd_company'];?></td>
								<td><?php echo $address['uadd_post_code'];?></td>
								<td class="align_ctr">
									<input type="checkbox" name="delete_address[<?php echo $address['uadd_id'];?>]" value="1"/>
								</td>
							</tr>
						</tbody>
						<?php } ?>
						<tfoot>
							<tr>
								<td colspan="5">
									<input type="submit" name="update_addresses" value="Delete Checked Addresses" class="link_button large"/>
								</td>
							</tr>
						</tfoot>
						<?php } else { ?>
						<tbody>
							<tr>
								<td colspan="5">
									<p>There are no addresses in your address book</p>
								</td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
				<?php echo form_close();?>
			</div>
		</div>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 
</div>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>