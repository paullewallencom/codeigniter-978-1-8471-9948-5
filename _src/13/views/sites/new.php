<h1>Add new site</h1>

<?php 

	//First open the form using the form helper
	echo form_open('sites/add'); 

?>

<ul>
	
	<!-- And then we use the form helper's input function to create the form fields -->

	<li>Site name: <?php echo form_input('name'); ?></li>

	<li>Site url: <?php echo form_input('url'); ?> </li>

	<li>Site username: <?php echo form_input('un'); ?></li>

	<li>Username password: <?php echo form_input('pw'); ?></li>

	<li>Client name 1: <?php echo form_input('client1'); ?></li>

	<li>Client name 2: <?php echo form_input('client2'); ?></li>

	<li>Admin name 1: <?php echo form_input('admin1'); ?></li>

	<li>Admin name 2: <?php echo form_input('admin2'); ?></li>

	<li>Domain id: <?php echo form_input('domainid'); ?></li>

	<li>Host id: <?php echo form_input('hostid'); ?></li>

	<li>Webroot: <?php echo form_input('webroot'); ?></li>

	<li>Files count: <?php echo form_input('files'); ?></li>

	<li>Files upload date: <?php echo form_input('filesdate'); ?></li>

	<li>Last update: <?php echo form_input('lastupdate'); ?></li>	

	<li>Submit date: <?php echo form_input('submit'); ?></li>
</ul>

<!-- Create the submit button -->

<?php echo form_submit('add', 'Add site'); ?>